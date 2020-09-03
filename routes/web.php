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

// Route::get('/{any?}', function () {
//     return view('/index');
// });

Route::get('/your-home', fn() => view('hr.index'));
Route::get('/lead-generation', fn() => view('hr.lead-generate.index'));
Route::get('/lead-generation/create', fn() => view('hr.lead-generate.create'));

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
