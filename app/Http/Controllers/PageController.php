<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // public function cart()
    // {
    //     return view('cart');
    // }

    // public function profile()
    // {
    //     return view('profile');
    // }

    public function index()
    {
        return view('index');
    }

    // public function ebook_detail()
    // {
    //     return view('ebook-detail');
    // }

    public function success()
    {
        return view('success');
    }

    public function saved()
    {
        return view('saved');
    }

    // public function account_maintenance()
    // {
    //     return view('account-maintenance');
    // }

    // public function update_role()
    // {
    //     return view('update-role');
    // }

    public function logout_success()
    {
        return view('logout-success');
    }
}
