<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $users = User::latest()->get();

        return view('dashboard', compact('users'));
    }

    public function status(User $user)
    {
        $user->status = 'Active';
        $user->update();

        return back();
    }

}
