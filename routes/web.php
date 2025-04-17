<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.index');
});


// FRONTEND ROUTES 

// PUBLIC ROUTES
Route::controller(HomeController::class)->group(function(){
    Route::get("/", "index")->name("home.index");
    Route::get("/categories", "category")->name("home.category");
});
