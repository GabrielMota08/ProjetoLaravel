<?php

use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/info', function () {
    return view('info');
});

Route::get('/products', function ($id = null) {
    $busca = request('search');
    return view('products', [ 'busca' => $busca ]);
});

Route::get('/', [EventController::class, 'index']);

// Rota GET existente
Route::get('/events/create', [EventController::class, 'create']);

Route::get('/events/{id}', [EventController::class, 'show']);

// Nova rota POST
Route::post('/event/store', [EventController::class, 'store']);
