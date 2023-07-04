<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * @param AuthRequest $request
     *
     * @return [type]
     */
    public function register(AuthRequest $request)
    {
        User::create($request->validated());

        return to_route('success');
    }

    /**
     * @param AuthRequest $request
     *
     * @return [type]
     */
    public function login(AuthRequest $request)
    {
        if (Auth::attempt($request->only(['email', 'password']))) {
            return to_route('dashboard');
        }

        return back()->withErrors(trans('auth.failed'));
    }

    /**
     * @return [type]
     */
    public function logout()
    {
        Auth::logout();
        return to_route('login');
    }
}
