<?php

use Illuminate\Support\Facades\Route;

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

//**CRUD Aktiva Order */
Route::resource('activa-orders', 'ActivaOrderController');

//**CRUD */
Route::resource('pesanan-pembelian', 'PesananPembelianController');

//**CRUD */
Route::resource('penawaran-jasa', 'PenawaranJasaController');

//**CRUD Referensi Bahasa */
Route::resource('referensi-bahasa', 'ReferensiBahasaController');

//**CRUD User*/
Route::resource('users', 'UserController');

//CRUD Work
Route::resource('work', 'WorkController');

//CRUD TypeWork
Route::resource('type-work', 'TypeWorkController');

//CRUD Total Payment
Route::resource('total-payment', 'TotalPaymentController');

//CRUD Ref Con
Route::resource('refper', 'RefPerController');

