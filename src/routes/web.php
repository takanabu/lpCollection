<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JsDesignController;


Route::get('/jsdesign', [JsDesignController::class, 'index']);

