<?php
use App\Http\Controllers\blog\BlogEnController;
use App\Http\Controllers\blog\BlogViController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix'=> 'vi'], function() {
    Route::get("/blog", [BlogViController::class, "index"]);
});

Route::group(['prefix'=> 'en'], function() {
    Route::get("/blog", [BlogEnController::class, "index"]);
});