<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('pwa.page.profile');
    }

    public function chat()
    {
        return view('pwa.tab.chat');
    }

    public function course()
    {
        return view('pwa.tab.course');
    }

    public function exam()
    {
        return view('pwa.tab.exam');
    }
}
