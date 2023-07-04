<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * @return [type]
     */
    public function __invoke()
    {
        if (auth()->user()->is_admin) {
            $users = User::latest()->get();
            $activeUsers =  User::activeCount();
            $inactiveUsers =  User::inactiveCount();
            return view('dashboard.admin', compact('users', 'activeUsers', 'inactiveUsers'));
        }

        return view('dashboard.user');
    }
}
