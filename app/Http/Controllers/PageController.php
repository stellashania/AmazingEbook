<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

    public function index()
    {
        return view('index');
    }

    public function success()
    {
        return view('success');
    }

    public function saved()
    {
        return view('saved');
    }

    public function logout_success()
    {
        return view('logout-success');
    }
}
