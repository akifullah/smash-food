
<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\admin\SubItemCategory;
use App\Http\Controllers\admin\SubItemController;
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
    
    Route::prefix("categories")->group(function(){
        Route::get("/", "category")->name("home.category");
        Route::get("/{id}", "categoryItems")->name("home.category.items");
    });
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
        Route::get('/create', [CategoryController::class, 'create'])->name('admin.categories.create');
        Route::post('/store', [CategoryController::class, 'store'])->name('admin.categories.store');
        Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('admin.categories.edit');
        Route::post('/update/{id}', [CategoryController::class, 'update'])->name('admin.categories.update');
        Route::get('/delete/{id}', [CategoryController::class, 'delete'])->name('admin.categories.delete');
        Route::get('/status/{id}', [CategoryController::class, 'status'])->name('admin.categories.status');
    });

    // SUB ITEMS CATEGORIES
    Route::prefix("sub-item-categories")->controller(SubItemCategory::class)->group(function(){
        Route::get("/", "index")->name("sub.item.category.index");
        Route::post("/create", "store")->name("sub.item.category.store");
        Route::post("/status", "status")->name("sub.item.category.status");
        Route::get("/edit/{id}", "edit")->name("sub.item.category.edit");
        Route::post("/delete", "delete")->name("sub.item.category.delete");
    });

    // SUB ITEMS 
    Route::prefix("sub-items")->controller(SubItemController::class)->group(function(){
        Route::get("/", "index")->name("admin.subitem.index");
        Route::post("/store", "store")->name("admin.subitem.store");
        Route::get("/edit/{id}", "edit")->name("admin.subitem.edit");
        Route::post("/update", "update")->name("admin.subitem.update");
        Route::post("/delete", "delete")->name("admin.subitem.delete");
    });

    // Products
    Route::prefix('products')->group(function () {
        Route::get('/', [ProductController::class, 'index'])->name('admin.products.index');
        Route::get('/create', [ProductController::class, 'create'])->name('admin.products.create');
        Route::post('/store', [ProductController::class, 'store'])->name('admin.products.store');
        Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('admin.products.edit');
        Route::post('/update/{id}', [ProductController::class, 'update'])->name('admin.products.update');
        Route::get('/delete/{id}', [ProductController::class, 'delete'])->name('admin.products.delete');
        Route::get('/status/{id}', [ProductController::class, 'status'])->name('admin.products.status');
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
