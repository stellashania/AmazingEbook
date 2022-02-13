<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class PageController extends Controller
{

    public function index()
    {
        return view('index');
    }

    public function success($locale = 'en')
    {
        App::setLocale($locale);
        return view('success');
    }

    public function saved($locale = 'en')
    {
        App::setLocale($locale);
        return view('saved');
    }

    public function logout_success($locale = 'en')
    {
        App::setLocale($locale);
        return view('logout-success');
    }
}
