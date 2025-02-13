<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::group([
    'prefix' => 'login',
    'as' => 'teste.'
    ], function () {
        Route::post('/', LoginController::class)->name('login');
});