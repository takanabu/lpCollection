<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Bs5WebsiteController extends Controller
{
    public function index()
    {
        return view('Bs5Website');
    }
}
