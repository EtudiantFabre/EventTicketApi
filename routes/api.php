<?php

use App\Http\Controllers\Api\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\OrderIntentController;
use App\Http\Controllers\OrderController;



Route::post('/login' , [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/events', [EventController::class, 'index']);
    Route::get('/events/{id}', [EventController::class, 'show']);
    Route::get('/events/{id}/ticket-types', [EventController::class, 'ticketTypes']);

    Route::post('/order-intents', [OrderIntentController::class, 'store']);
    Route::post('/order-intents/{id}/validate', [OrderIntentController::class, 'validateIntent']);

    Route::get('/orders', [OrderController::class, 'index']);
    Route::get('/orders/{id}', [OrderController::class, 'show']);

    Route::post('/logout' , [AuthController::class, 'logout']);
    Route::get('/user', [AuthController::class, 'user']);
});
