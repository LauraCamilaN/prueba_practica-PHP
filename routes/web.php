<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('authentication.login');
});

Route::middleware('auth')->group(function(){
    Route::get('/home', function() {
        return view('modules.home');
    })->name('home');
});