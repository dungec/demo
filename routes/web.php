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
Route::get('home','MyController@home')->name('home');
Route::get('dangkygiasu',[
	'as'=>'getdkgs',
	'uses'=>'MyController@getdkgs'
]);
Route::post('dangkygiasu',[
	'as'=>'postdkgs',
	'uses'=>'MyController@postdkgs'
]);
Route::get('dangnhap',[
	'as'=>'getdngs',
	'uses'=>'MyController@getdangnhap']);
Route::post('dangnhap',[
	'as'=>'postdangnhap',
	'uses'=>'MyController@postdangnhap']);
Route::get('dangxuat','MyController@dangxuat')->name('dangxuat');
Route::get('danhsachlop','MyController@danhsachlop')->name('danhsachlop');
Auth::routes();

