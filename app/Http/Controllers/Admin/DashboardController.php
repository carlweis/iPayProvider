<?php

namespace IPayProvider\Http\Controllers\Admin;

use Illuminate\Http\Request;

use IPayProvider\Http\Requests;
use IPayProvider\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard.index');
    }
}
