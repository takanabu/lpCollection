<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JsDesignController extends Controller
{
    public function index()
    {
        return view('home.JsDesign');
    }
}

