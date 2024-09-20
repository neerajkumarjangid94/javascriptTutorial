<?php

use App\Http\Controllers\Test\AdminTestController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/first/test', [AdminTestController::class, 'generalTest']);