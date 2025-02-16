<?php

use App\Http\Controllers\LoginAdmController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::group([
    'prefix' => 'loginAdm',
    'as' => 'loginAdm.'
    ], function () {
        Route::post('/', LoginAdmController::class)->name('login');
});