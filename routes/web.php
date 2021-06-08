<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin',[ProductController::class, 'index']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::post('/admin/produk',[ProductController::class, 'store']);
Route::get('/hapusproduk/{id}',[ProductController::class, 'delete']);
Route::get('/editproduk/{id}',[ProductController::class, 'edit']);
Route::post('/editproduk/{id}/update',[ProductController::class, 'update']);