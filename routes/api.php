<?php

use App\Http\Controllers\RandomNum\GetController;
use App\Http\Controllers\RandomNum\StoreController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'RandomNum'], function () {
    Route::post('/generate', [StoreController::class, '__invoke']);
    Route::get('/retreive/{randomNum}', [GetController::class, '__invoke']);
});

