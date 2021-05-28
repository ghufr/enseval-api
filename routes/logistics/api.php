<?php

use Illuminate\Support\Facades\Route;

Route::name('tracks')->prefix('tracks')->group(__DIR__ . '/tracks/api.php');
