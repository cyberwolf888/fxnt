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
Route::get('/method', 'HomeController@method')->name('method');
Route::get('/brokers', 'HomeController@brokers')->name('brokers');
Route::get('/faqs', 'HomeController@faqs')->name('faqs');
Route::get('/priceandpayment', 'HomeController@priceandpayment')->name('priceandpayment');
Route::get('/account-management', 'HomeController@account_management')->name('account_management');
Route::get('/disclaimer', 'HomeController@disclaimer')->name('disclaimer');
Route::get('/tradingresults', 'HomeController@tradingresults')->name('tradingresults');
