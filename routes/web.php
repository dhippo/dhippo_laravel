<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sport', [App\Http\Controllers\SportController::class, 'index']);
