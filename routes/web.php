<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\PesanController;

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

Route::get('/dashboard', [AdminController::class, 'index']);
Route::get('/user', [AdminController::class, 'tampilan']);
Route::get('/order-detail', [AdminController::class, 'tampilanOrder']);
Route::get('/form-input', [AdminController::class, 'create']);
Route::post('/store-user', [AdminController::class, 'store']);
Route::get('/datatable/user', [AdminController::class, 'datatableUser']);
Route::get('/datatable/order', [PesanController::class, 'datatableOrder']);
Route::get('/edit/{id}', [AdminController::class, 'edit'])->name('frontend.edit');
Route::post('/update-user', [AdminController::class, 'update']);
Route::get('/delete/{id}', [AdminController::class, 'delete']);
Route::get('/', [PesanController::class, 'createOrder']);
Route::get('/edit-order/{id}', [PesanController::class, 'editOrder'])->name('frontend.edit-order');
Route::post('/update-order', [PesanController::class, 'updateOrderDetail']);
Route::get('/delete-order/{id}', [PesanController::class, 'destroyOrder']);
Route::post('/order-sukses', [PesanController::class, 'storePesan']);
Route::get('/sukses', [PesanController::class, 'suksesOrder']);