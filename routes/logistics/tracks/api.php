<?php

use App\Http\Controllers\Logistics\TrackController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TrackController::class, 'find']);
Route::get('/{id}', [TrackController::class, 'findOne']);
Route::post('/', [TrackController::class, 'create']);
Route::patch('/{id}', [TrackController::class, 'update']);
Route::delete('/{id}', [TrackController::class, 'delete']);
