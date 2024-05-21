<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JsDesignController;
use App\Http\Controllers\HcBackvideoController;
use App\Http\Controllers\GpAnimeController;

Route::get('/jsdesign', [JsDesignController::class, 'index']);

Route::get('/hcbackvideo', [HcBackvideoController::class, 'index']);

Route::get('/gpanime', [GpAnimeController::class, 'index']);



