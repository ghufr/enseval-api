<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FrontEnd\Financial\FinancialController;
use App\Http\Controllers\FrontEnd\HomeController;

use App\Http\Controllers\FrontEnd\Logistik\DeliveryController;
use App\Http\Controllers\FrontEnd\Logistik\DriverController;
use App\Http\Controllers\FrontEnd\Logistik\ProductController;
use App\Http\Controllers\FrontEnd\Logistik\TrackingController;
use App\Http\Controllers\FrontEnd\Logistik\VehicleController;

use App\Http\Controllers\FrontEnd\Warehouse\InboundController;
use App\Http\Controllers\FrontEnd\Warehouse\MaintenanceController;
use App\Http\Controllers\FrontEnd\Warehouse\OperationalController;
use App\Http\Controllers\FrontEnd\Warehouse\OutboundController;
use App\Http\Controllers\FrontEnd\Warehouse\StockController;
use App\Http\Controllers\FrontEnd\Warehouse\WarehouseController;


Route::resource('home', HomeController::class);
Route::resource('warehouse', WarehouseController::class);
Route::resource('financial', FinancialController::class);

route::name('logistik.')->group(function () {
    Route::resource('driver', DriverController::class);
    Route::resource('product', ProductController::class);
    Route::resource('tracking', TrackingController::class);
    Route::resource('vehicle', VehicleController::class);
    Route::resource('delivery', DeliveryController::class);
});

route::name('warehouse.')->group(function () {
    Route::resource('inbound', InboundController::class);
    Route::resource('maintenance', MaintenanceController::class);
    Route::resource('operational', OperationalController::class);
    Route::resource('outbound', OutboundController::class);
    Route::resource('stock', StockController::class);
});
