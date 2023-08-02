<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\StripeController;
use App\Http\Controllers\EmployeeController;

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

//UNTUK LANDING PAGE
Route::get('/', function () {
    return view('welcome');
});

// Auth::routes();

//MENAMPILKAN HALAMAN KAMAR KOST
Route::controller(ProductsController::class)->prefix('products')->group(function() {
    Route::get('', 'index')->name('products');
    // Route::get('/products', [ProductsController::class, 'index']);
    Route::get('cart', [ProductsController::class, 'cart'])->name('cart');
    Route::get('add-to-cart/{id}', [ProductsController::class, 'addToCart'])->name('add_to_cart');
});

//MEMPROTEKSI HALAMAN ADD TO CART DAN STEP SETERUSNYA
Route::middleware('auth')->group(function () {
    Route::get('add-to-cart/{id}', [ProductsController::class, 'addToCart'])->name('add_to_cart');
    Route::post('/session',[StripeController::class, 'session'])->name('session');
    Route::get('/success', [StripeController::class, 'success'])->name('success');
    Route::get('/cancel', [StripeController::class, 'cancel'])->name('cancel');

    Route::patch('update-cart', [ProductsController::class, 'update'])->name('update_cart');
    Route::delete('remove-from-cart', [ProductsController::class, 'remove'])->name('remove_from_cart');

    //HALAMAN EMPLOYEE
    Route::resource('employees', EmployeeController::class);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//MENAMPILKAN FILE DOWNLOAD
Route::get('download-file/{employeeId}', [EmployeeController::class, 'downloadFile'])->name('employees.downloadFile');

Route::get('getEmployees', [EmployeeController::class, 'getData'])->name('employees.getData');

Route::get('exportExcel', [EmployeeController::class, 'exportExcel'])->name('employees.exportExcel');

//EXPORT PDF
Route::get('exportPdf', [EmployeeController::class, 'exportPdf'])->name('employees.exportPdf');
