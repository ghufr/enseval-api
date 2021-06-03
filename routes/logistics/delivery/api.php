<?php

use App\Http\Controllers\DeliveryController;
use Illuminate\Support\Facades\Route;

Route::get("delivery", [DeliveryController::class, 'find']);
Route::get("delivery/{id}", [DeliveryController::class, 'findOne']);
Route::post("delivery", [DeliveryController::class, 'create']);
Route::delete("delivery/{id}", [DeliveryController::class, 'delete']);
Route::put("delivery/{id}", [DeliveryController::class, 'update']);
