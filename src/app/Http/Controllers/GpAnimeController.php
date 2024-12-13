<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GpAnimeController extends Controller
{
    public function index()
    {
        return view('home.GpAnime');
    }
}
