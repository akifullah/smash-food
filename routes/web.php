<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ItemController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.index');
});


// FRONTEND ROUTES 

// PUBLIC ROUTES
Route::controller(HomeController::class)->group(function () {
    Route::get("/", "index")->name("home.index");
    Route::get("/about", "about")->name("about");
    Route::get("/contact", "contact")->name("contact");
    Route::get("/categories", "category")->name("home.category");
});



// ADMIN ROUTES
Route::prefix('admin')->group(function () {
    // Admin Dashboard
    Route::get('/', function () {
        return view('admin.index');
    })->name('dashboard');

    // Categories
    Route::prefix("categories")->group(function () {
        Route::get('/', [CategoryController::class, 'index'])->name('admin.categories');
        Route::get('/create', [CategoryController::class, 'create'])->name('admin.create');
    });

    // Products
    Route::prefix('products')->group(function () {
        Route::get('/', [ItemController::class, 'index'])->name('admin.products.index');
        Route::get('/create', [ItemController::class, 'create'])->name('admin.products.create');
    });

    // Orders
    Route::prefix('order')->group(function () {
        Route::get('/', [OrderController::class, 'index'])->name('admin.order.index');
    });

    // Users
    Route::prefix('users')->group(function () {

        Route::get('/', [UserController::class, 'index'])->name('admin.users');
        Route::get('/edit', [UserController::class, 'edit'])->name('admin.user.edit');
    });
    // Blog
    Route::get('/blog', [BlogController::class, 'index'])->name('admin.blog');
});

// Profile Routes
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');

// Logout Route
Route::get('/logout', function () {
    // Implement logout logic here
    return redirect('/');
})->name('logout');
