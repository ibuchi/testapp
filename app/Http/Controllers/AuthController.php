<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function register(AuthRequest $request)
    {
        $validated = $request->validated();
        $validated['password'] = bcrypt($request->password);

        User::create($validated);

        return view('success');
    }

    public function login(AuthRequest $request)
    {
        if (!Auth::attempt($request->only(['email', 'password']))) {
            throw ValidationException::withMessages([
                'email' => trans('auth.failed')
            ]);
        }

        $user = Auth::user();

        if ($user->status === 'Active') {
            return redirect()->route('dashboard');
        } else {
            Auth::logout();
            return back();
        }
    }

    public function logout()
    {
        Auth::guard('web')->logout();

        return to_route('auth.login');
    }
}
