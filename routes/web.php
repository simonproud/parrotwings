<?php

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


Route::get('/', 'HomeController@index')->name('home')->middleware(['auth', 'banned']);
Route::get('/wallet', 'HomeController@index')->name('wallet')->middleware(['auth', 'banned']);

Route::get('/wallet/moneyto', 'WalletController@moneyto')->name('moneyto')->middleware(['auth', 'banned']);
Route::get('/wallet/transactions', 'WalletController@transactions')->name('transactions')->middleware(['auth', 'banned']);
Route::post('/sendmoney', 'WalletController@sendMoney')->name('sendmoney')->middleware(['auth', 'banned']);
Route::get('/getuser', 'HomeController@getUsers')->name('getusers');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout')->middleware(['auth', 'banned']);
Auth::routes();


Route::get('/admin', 'AdminController@index')->name('admin');
Route::get('/admin/action/ban', 'AdminController@actionBan');
Route::get('/admin/action/unban', 'AdminController@actionUnban');
