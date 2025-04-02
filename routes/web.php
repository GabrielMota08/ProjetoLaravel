<?php

use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/info', function () {
    return view('info');
});

Route::get('/createEvent', function () {
    return view('create');
});

Route::get('/products', function ($id = null) {
    $busca = request('search');
    return view('products', [ 'busca' => $busca]);
});

Route::get('/products_teste/{id?}', function ($id = null) {
    return view('products_teste', [ 'id' => $id]);
});

// Rota GET existente
Route::get('/event', [EventController::class, 'index']);

// Nova rota POST
Route::post('/event/store', [EventController::class, 'store']);
