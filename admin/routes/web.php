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

Route::get('/', 'HomeController@homeIndex')->name('home');
Route::get('/visitor', 'VisitorController@visitorIndex')->name('visitor.index');
Route::get('/service', 'ServiceController@index')->name('service.index');
Route::get('/getServicesData', 'ServiceController@getServiceData')->name('service.getdata');
