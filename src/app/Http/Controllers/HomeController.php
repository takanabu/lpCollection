<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('Home');
    }

    public function privacyPolicy()
    {
        return view('footer.privacy-policy');
    }

    public function history()
    {
        return view('blog.header.history');
    }

    public function level()
    {
        return view('blog.header.level');
    }

    public function magic()
    {
        return view('blog.header.magic');
    }

    public function gold()
    {
        return view('blog.header.gold');
    }

}
