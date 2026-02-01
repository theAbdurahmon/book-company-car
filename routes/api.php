<?php

use App\Http\Controllers\TripController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;

Route::get("/available-cars", [CarController::class, "available"]);
Route::post("/book-trip", [TripController::class, "store"]);
Route::delete("/trips/{trip}", [TripController::class, "cancel"]);