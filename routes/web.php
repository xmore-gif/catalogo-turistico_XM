<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DestinoController;

Route::get('/', function () {
    return redirect('/destinos');
});

Route::get('/destinos', [DestinoController::class, 'index']);

Route::get('/destinos/{id}', [DestinoController::class, 'show']);