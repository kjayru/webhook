<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebhookController;

// (Opcional) GET solo si tu proveedor lo usa para verificación
Route::get('/webhook', [WebhookController::class, 'verify']);

// POST principal para recibir eventos
Route::post('/webhook', [WebhookController::class, 'handle']);