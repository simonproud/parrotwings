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


Route::get('/', 'HomeController@index')->name('home');
Route::get('/wallet', 'HomeController@index')->name('wallet');

Route::get('/wallet/moneyto', 'WalletController@moneyto')->name('moneyto');
Route::get('/wallet/transactions', 'WalletController@transactions')->name('transactions');
Route::post('/sendmoney', 'WalletController@sendMoney')->name('sendmoney');
Route::get('/getuser', 'HomeController@getUsers')->name('getusers');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Auth::routes();


