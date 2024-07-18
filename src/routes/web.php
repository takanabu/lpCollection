<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JsDesignController;
use App\Http\Controllers\HcBackvideoController;
use App\Http\Controllers\GpAnimeController;
use App\Http\Controllers\Bs5WebsiteController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;


Route::get('/jsdesign',
[JsDesignController::class, 'index']);

Route::get('/hcbackvideo', [HcBackvideoController::class, 'index']);

Route::get('/gpanime',
[GpAnimeController::class, 'index']);

Route::get('/bs5website', [Bs5WebsiteController::class, 'index']);

Route::get('/blog',
[BlogController::class, 'index']);



Route::get('/',
[HomeController::class, 'index']);

Route::get('/privacy-policy',
[HomeController::class, 'privacyPolicy']);

Route::get('/history',
[HomeController::class, 'history']);

Route::get('/level',
[HomeController::class, 'level']);

Route::get('/magic',
[HomeController::class, 'magic']);

Route::get('/gold',
[HomeController::class, 'gold']);



Route::get('/contact',
[ContactController::class, 'index']);

Route::post('/contacts/confirm', [ContactController::class, 'confirm']);

Route::post('/contacts', [ContactController::class, 'store']);



