<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::view('/{any}', 'dashboard')
    ->middleware(['auth'])
    ->where('any', '.*');


    