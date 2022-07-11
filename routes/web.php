<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;

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

Route::get('/', [AdminController::class, 'index']);
Route::get('/pengunjung', [AdminController::class, 'tampilan']);
Route::get('/form-input', [AdminController::class, 'create']);
Route::post('/store-user', [AdminController::class, 'store']);
Route::get('/datatable/user', [AdminController::class, 'datatableUser']);
Route::get('/edit/{id}', [AdminController::class, 'edit']);
Route::post('/update-user', [AdminController::class, 'updateUser']);
Route::get('/delete/{id}', [AdminController::class, 'delete']);