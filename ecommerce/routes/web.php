<?php
use App\Http\Controllers\blog\BlogEnController;
use App\Http\Controllers\blog\BlogViController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get("/", [DashboardController::class, "index"])->name("home");

Route::group(['prefix'=> 'vi'], function() {
    Route::get("/blog", [BlogViController::class, "index"])->name("vi.blog");
});

Route::group(['prefix'=> 'en'], function() {
    Route::get("/blog", [BlogEnController::class, "index"]);
});