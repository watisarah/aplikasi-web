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

Route::get('/', function () {
    return view('/read/v_dashboard');
});
Route::get('/dashboard', 'NoteController@dashboard');
Route::get('/note', 'NoteController@index');
Route::get('/addnote', 'NoteController@create');
Route::get('/note/{id}', 'NoteController@show');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
