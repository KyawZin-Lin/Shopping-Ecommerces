<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        $user= Auth::user();
        // dd($user);

        // Check the user's role and redirect accordingly
    if ($user->hasRole('SuperAdmin')) {
        return redirect('/');  // Redirect to admin dashboard
    } elseif ($user->hasRole('ShopOwner')) {
        return redirect()->route('shop-owner.dashboard');  // Redirect to shop owner dashboard
    }

    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        // dd(auth()->user()->hasRole('SuperAdmin'), route('shop-owner.login'));
        $route='';
        if(auth()->user()->hasRole('SuperAdmin')){
            $route=route('login');
        }else{
            $route=route('shop-owner.login');  // Redirect to shop owner login page if shop owner
        }
        // dd($route);
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect($route);
    }
}
