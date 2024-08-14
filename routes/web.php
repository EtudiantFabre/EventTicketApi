<?php

use App\Http\Controllers\ApiAccessController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/api-access-request', [ApiAccessController::class, 'showForm']);
Route::post('/api-access-request', [ApiAccessController::class, 'handleForm'])->name('api.access.request');
