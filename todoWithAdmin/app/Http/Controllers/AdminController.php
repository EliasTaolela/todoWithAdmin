<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class AdminController extends Controller
{
    //

    public function dashboard()
{
    return view('admin.dashboard');
}

public function index()
{
    $logs = ActivityLog::with('user')->latest()->paginate(10);
    return view('admin.dashboard', compact('logs'));
}

}
