<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function Show()
    {
        $students = User::all();
        return view('dashboard.dashboard' , ['students' => $students]);
    }

    public function admin()
    {
        return view('dashboard.admin-dashboard');
    }
}
