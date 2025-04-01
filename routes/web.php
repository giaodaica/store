<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShopingController;
use App\Http\Controllers\TourController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


Route::get('/', function () {
    return Inertia::render('Welcome');
})->name('home');

Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
Route::middleware('admin')->prefix('admin')->group(function(){
    Route::get('/products', [AdminProductController::class,'index'])->name('products.index');
    Route::get('/create', [AdminProductController::class,'create'])->name('products.create');
    Route::post('/create', [AdminProductController::class,'store'])->name('products.store');
    Route::post('products/{id}/delete', [AdminProductController::class, 'destroy'])->name('products.destroy');
});



Route::get('/users', [UserController::class,'index'])->name('users.index');
Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard.index');
Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('shop',[ProductController::class,'index']);
Route::get('detail',[ProductController::class,'show']);
Route::post('cart',[ProductController::class,'cart']);
Route::get('shoping-cart',[ShopingController::class,'index']);
Route::get('check-out',[ShopingController::class,'checkout']);
Route::post('cart1',[ShopingController::class,'store']);
Route::get('tour',[TourController::class,'index']);
Route::get('tour/{id}',[TourController::class,'show']);


