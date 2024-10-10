<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\FlowerController;

Route::resource('flowers', FlowerController::class);
