<?php

namespace App\Http\Controllers\Api\Customer;

use App\Http\Controllers\Controller;
use App\Models\Admin\Application;
use App\Models\ShopOwner\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        // Validate incoming request data
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:customers',
            'password' => 'required|string|min:8',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

         // Validate specific header 'app_key'
    $appKey = $request->header('app_key');

    // Check if the header is present and meets the validation criteria
    if (!$appKey) {
        return response()->json(['error' => 'The app_key header is required.'], 422);
    }

    $application = Application::where('application_key',$appKey)->first();
        // Create a new customer
        $customer = Customer::create([
            'user_id' => $application->user_id,
            'application_id' => $application->id,
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Create a token for the newly registered customer
        $token = $customer->createToken('Customer API Token')->accessToken;

        // Return success response with token
        return response()->json([
            'customer' => $customer,
            'token' => $token,
        ], 201);
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        // Check if the customer exists and the credentials are correct
        $customer = Customer::where('email', $credentials['email'])->first();

        // Validate customer and password
        if ($customer && Hash::check($credentials['password'], $customer->password)) {
            // Generate a new token for the customer
            $token = $customer->createToken('Customer API Token')->accessToken;

            return response()->json([
                'customer' => $customer,
                'token' => $token,
            ], 200);
        } else {
            return response()->json([
                'message' => 'Invalid login credentials',
            ], 401);
        }
    }

    public function logout(Request $request)
    {
        // // Get the authenticated customer
        // $customer = Auth::guard('api')->user();
        // dd($customer->tokens->delete());
        // // Revoke the current access token
        // $customer->tokens()->where('id', $request->user()->token()->id)->delete();

        // return response()->json(['message' => 'Successfully logged out.'], 200);

        auth()->guard('api')->user()->tokens()->delete();
        return response()->json([
            'status' => 'success',
            'message' => 'User is logged out successfully'
            ], 200);
    }

}
