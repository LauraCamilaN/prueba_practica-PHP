<?php

use App\Http\Controllers\DocumentoController;
use App\Http\Controllers\HistorialRegistroController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('authentication.login');
});

Route::middleware('auth')->group(function(){

    Route::get('/home', function() {
        return view('modules.home');
    })->name('home');

    Route::prefix('documents')->controller(DocumentoController::class)->name('documents.')->group(function(){
        Route::get('index', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('calculate_code/{id_proceso}/{id_tipo}', 'calculate_code')->name('calculate_code');
        Route::get('edit/{id}', 'edit')->name('edit');
        Route::patch('update/{id}', 'update')->name('update');
        Route::get('show/{id}', 'show')->name('show');
        Route::delete('delete/{id}', 'delete')->name('delete');
    });
});