<?php

use App\Http\Controllers\Api\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\OrderIntentController;
use App\Http\Controllers\OrderController;

// Routes pour l'authentification
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');
Route::get('/user', [AuthController::class, 'user'])->middleware('auth:sanctum');

// Routes pour les événements
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/events', [EventController::class, 'index']); // Liste des événements
    Route::get('/events/{id}', [EventController::class, 'show']); // Détails d'un événement
    Route::get('/events/{id}/ticket-types', [EventController::class, 'ticketTypes']); // Types de tickets pour un événement

    // Routes pour les intentions de commande
    Route::get('/order-intents', [OrderIntentController::class, 'list']); // Afficher les intentions de commande
    Route::post('/order-intents', [OrderIntentController::class, 'store']); // Créer une intention de commande
    Route::post('/order-intents/{id}/validate', [OrderIntentController::class, 'validateIntent']); // Valider une intention de commande

    // Routes pour les commandes
    Route::get('/orders', [OrderController::class, 'index']); // Liste des commandes
    Route::get('/orders/{id}', [OrderController::class, 'show']); // Détails d'une commande
});
