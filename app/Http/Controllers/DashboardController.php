<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function dashboard()
    {
        $header = "Dashboard";
        $data = user::all();

        return view('admin.dashboard', compact('header', 'data'));
    }

    public function users()
    {
        $header = "Users";
        $data = User::all();

        return view('admin.users', compact('header', 'data'));
    }

    public function settings()
    {
        $header = "Settings";
        $data = User::all();

        return view('admin.settings', compact('header', 'data'));
    }
}
