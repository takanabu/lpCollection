<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JsDesignController;
use App\Http\Controllers\HcBackvideoController;

Route::get('/jsdesign', [JsDesignController::class, 'index']);

Route::get('/hcbackvideo', [HcBackvideoController::class, 'index']);



