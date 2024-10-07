<?php

namespace App\Http\Middleware;

use App\Models\Admin\Application;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckApplicationKey
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {


       $appKey = request()->header('app_key');
       $application = Application::where('application_key', $appKey)->first();
        if (!$application) {
         return response()->json(['error' => 'Invalid or missing application key'], 403);
        }
        $request->merge(['userId' => $application->user_id]);
        return $next($request);

    }
}
