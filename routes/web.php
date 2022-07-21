<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\PesanController;
use App\Models\Fasilitas;
use App\Models\Kamar;

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

// Route::get('/', function () {
//     return view('frontend.dashboard');
// });

// Route Untuk User

Route::get('/dashboard', [AdminController::class, 'index']);
Route::get('/user', [AdminController::class, 'tampilan']);
Route::get('/form-input', [AdminController::class, 'create']);
Route::post('/store-user', [AdminController::class, 'store']);
Route::get('/datatable/user', [AdminController::class, 'datatableUser']);
Route::get('/edit/{id}', [AdminController::class, 'edit'])->name('frontend.edit');
Route::post('/update-user', [AdminController::class, 'update']);
Route::get('/delete/{id}', [AdminController::class, 'delete']);


// Route untuk pesan

Route::get('/order-detail', [AdminController::class, 'tampilanOrder']);
Route::get('/', [PesanController::class, 'createOrder']);
Route::post('/store-order', [PesanController::class, 'storePesan']);
Route::get('/order-sukses', [PesanController::class, 'suksesOrder']);
Route::get('/datatable/order', [PesanController::class, 'datatableOrder']);
Route::get('/edit-order/{id}', [PesanController::class, 'editOrder'])->name('frontend.edit-order');
Route::post('/update-order', [PesanController::class, 'updateOrderDetail']);
Route::get('/delete-order/{id}', [PesanController::class, 'destroyOrder']);
Route::get('/sukses', [PesanController::class, 'suksesOrder']);

// Route Untuk Kamar
Route::get('/kamar', [KamarController::class, 'index']);
Route::get('/datatable/kamar', [KamarController::class, 'datatableKamar']);
Route::get('/input-kamar', [KamarController::class, 'createKamar']);
Route::post('/store-kamar', [KamarController::class, 'storeKamar']);


// Route Untuk Fasilitas
Route::get('/fasilitas', [FasilitasController::class, 'index']);
Route::get('/datatable/fasilitas', [FasilitasController::class, 'datatableFasilitas']);
Route::get('/input-fasilitas', [FasilitasController::class, 'createFas']);
Route::post('/store-fasilitas', [FasilitasController::class, 'storeFas']);
