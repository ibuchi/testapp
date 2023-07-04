<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __invoke(Request $request, User $user)
    {

        $user->update($request->only('status'));

        return back()->with(['success' => 'Account has been updated successfully!']);
    }
}
