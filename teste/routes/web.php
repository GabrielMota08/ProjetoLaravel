<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\AccessLogController;

Route::get('/', function () {
    return Inertia::render('welcome');
})->name('home');

Route::post('/acessos/{dadosSolicitados}', [AccessLogController::class, 'store']);
Route::get('/acessos', [AccessLogController::class, 'index']);

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', function () {
        return Inertia::render('dashboard');
    })->name('dashboard');
});

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';