<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('person', 'App\Http\Controllers\PersonController@index')->name('person.index');

Route::get('company', 'App\Http\Controllers\CompanyController@index')->name('company.index');

Route::get('image_path', 'App\Http\Controllers\ImagePathController@index')->name('image_path.index');
