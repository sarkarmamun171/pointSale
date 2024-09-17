<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('layouts.admin');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//Customer Info
Route::get('/customer-info',[CustomerController::class,'customer_index'])->name('customer.index');
//Category Information
Route::get('category/index',[CategoryController::class,'category_index'])->name('category.index');
Route::post('category/store',[CategoryController::class,'category_store'])->name('category.store');
Route::get('/category/edit/{id}',[CategoryController::class,'category_edit'])->name('category.edit');
Route::post('/category/update/{id}',[CategoryController::class,'category_update'])->name('category.update');
Route::get('/category/delte/{id}',[CategoryController::class,'category_delete'])->name('category.delete');

//Brand Info
Route::get('/brand/index',[BrandController::class,'brand_index'])->name('brand.index');
Route::post('/brand/store',[BrandController::class,'brand_store'])->name('brand.store');
Route::get('/brand/edit/{brand_id}',[BrandController::class,'brand_edit'])->name('brand.edit');
Route::post('/brand/update',[BrandController::class,'brand_update'])->name('brand.update');
Route::get('/brand/update/{id}',[BrandController::class,'brand_delete'])->name('brand.delete');
