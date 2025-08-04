<?php

use App\Http\Controllers\itemController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return "<h1>hello world!</h1>";
});

Route::resource('item', itemController::class);
