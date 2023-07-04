<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Active
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->user()->status === 'Inactive' && !$request->user()->is_admin) {
            session()->flash('unauthorized', 'You have not been authorized to access the dashboard of this app! Please contact admin');
            Auth::logout();
            return to_route('login');
        }
        return $next($request);
    }
}
