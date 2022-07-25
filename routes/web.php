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
Route::controller(AdminController::class)->group(function () {
    Route::get('/dashboard', 'Admin\AdminController@index');
    Route::get('/user', 'Admin\AdminController@tampilan');
    Route::get('/form-input', 'Admin\AdminController@create');
    Route::post('/store-user', 'Admin\AdminController@store');
    Route::get('/datatable/user', 'Admin\AdminController@datatableUser');
    Route::get('/edit/{id}', 'Admin\AdminController@edit')->name('frontend.edit');
    Route::post('/update-user', 'Admin\AdminController@update');
    Route::get('/delete/{id}', 'Admin\AdminController@delete');
    Route::get('/order-detail', 'Admin\AdminController@tampilanOrder');
});


// Route untuk pesan
Route::controller(PesanController::class)->group(function () {
    Route::get('/', 'PesanController@createOrder');
    Route::post('/store-order', 'PesanController@storePesan');
    Route::get('/order-sukses', 'PesanController@suksesOrder');
    Route::get('/datatable/order', 'PesanController@datatableOrder');
    Route::get('/edit-order/{id}', 'PesanController@editOrder')->name('frontend.edit-order');
    Route::post('/update-order', 'PesanController@updateOrderDetail');
    Route::get('/delete-order/{id}', 'PesanController@destroyOrder');
    Route::get('/sukses', 'PesanController@suksesOrder');
});

// Route Untuk Kamar
Route::controller(KamarController::class)->group(function () {
    Route::get('/kamar', 'KamarController@index');
    Route::get('/datatable/kamar', 'KamarController@datatableKamar');
    Route::get('/input-kamar', 'KamarController@createKamar');
    Route::post('/store-kamar', 'KamarController@storeKamar');
    Route::get('/edit-kamar/{id}', 'KamarController@editKamar')->name('frontend.edit-kamar');
    Route::post('/update-kamar', 'KamarController@updateKamar');
});


// Route Untuk Fasilitas
Route::controller(FasilitasController::class)->group(function () {
    Route::get('/fasilitas', 'FasilitasController@index');
    Route::get('/datatable/fasilitas', 'FasilitasController@datatableFasilitas');
    Route::get('/input-fasilitas', 'FasilitasController@createFas');
    Route::post('/store-fasilitas', 'FasilitasController@storeFas');
    Route::get('/edit-fasilitas/{id}', 'FasilitasController@editFas')->name('frontend.edit-fasilitas');
    Route::post('/update-fasilitas', 'FasilitasController@updateFas');
});