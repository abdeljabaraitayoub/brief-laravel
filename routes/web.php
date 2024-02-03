<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
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


// category routes
Route::get("/category", [CategoryController::class, "index"])->name("category.index");
Route::get("/category/create", [CategoryController::class, "create"])->name("category.create");
Route::get("/category/edit/{id}", [CategoryController::class, "edit"])->name("category.edit");

Route::post("/category", [CategoryController::class, "store"])->name("category.store");
Route::put("/category/{id}", [CategoryController::class, "update"])->name("category.update");
Route::delete("/category/{id}", [CategoryController::class, "destroy"])->name("category.destroy");

// product routes
Route::get("/product", [ProductsController::class, "index"])->name("product.index");
Route::get("/product/create", [ProductsController::class, "create"])->name("product.create");
Route::get("/product/edit/{id}", [ProductsController::class, "edit"])->name("product.edit");

Route::post("/product", [ProductsController::class, "store"])->name("product.store");
Route::put("/product/{id}", [ProductsController::class, "update"])->name("product.update");
Route::delete("/product/{id}", [ProductsController::class, "destroy"])->name("product.destroy");
