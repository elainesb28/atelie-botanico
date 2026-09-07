<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JardimDigitalController;

Route::get('/', [JardimDigitalController::class, 'home']);
Route::get('/projetos', [JardimDigitalController::class, 'index']);
Route::get('/projetos/{slug}', [JardimDigitalController::class, 'show']);

