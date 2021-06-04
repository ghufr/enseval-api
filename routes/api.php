<?php

use Illuminate\Support\Facades\Route;

Route::prefix('finance')->group(__DIR__ . '/finance/api.php');
Route::prefix('logistics')->group(__DIR__ . '/logistics/api.php');
Route::prefix('warehouse')->group(__DIR__ . '/warehouse/api.php');

Route::prefix('shared')->group(__DIR__ . '/shared/api.php');
