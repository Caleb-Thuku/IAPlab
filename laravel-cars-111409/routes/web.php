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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::view('/insert','insert');
Route::post('/create','Cars@create');
Route::get('/display','Cars@displayAll')->name('display');
Route::post('/delete/{id}','Cars@delete');
Route::get('/edit/{id}','Cars@edit');
Route::post('/update/{id}','Cars@update');
Route::get('/insert/review', 'carReview@insert');
Route::post('/create/review','carReview@create');
Route::get('/display/review','carReview@displayAll')->name('display-review');
Route::get('/car/review/{id}','carReview@displayCarReview');
Route::get('/review/car/{id}','Cars@displayReviewCar');