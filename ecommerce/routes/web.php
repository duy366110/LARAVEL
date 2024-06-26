<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/home", function () {
    return "Home page";
});

Route::get("/house", function() {
    return redirect("/home");
});

Route::get("/greet/{name}", function($name) {
    return $name;
});