<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'page@home');
//login
Route::get('/admin', 'adminpage@home');
Route::post('/admin/login','adminpage@login');

//logout
Route::get('/admin/logout','adminpage@logout');

//post
Route::get('/admin/addpost','adminpage@addpost');
Route::post('/admin/aksi/addpost','adminaksi@addpost');
Route::get('/admin/listpost','adminpage@listpost');
Route::get('/admin/editpost/{id}','adminpage@editpost');
Route::post('/admin/aksi/editpost/{id}','adminaksi@editpost');
Route::get('/admin/aksi/deletepost/{id}','adminaksi@deletepost');

//kategori post
Route::get('/admin/addkategori','adminpage@addkategori');
Route::post('/admin/aksi/addkategori','adminaksi@addkategori');
Route::get('/admin/listkategori','adminpage@listkategori');
Route::get('/admin/editkategori/{id}','adminpage@editkategori');
Route::post('/admin/aksi/editkategori/{id}','adminaksi@editkategori');
Route::get('/admin/aksi/deletekategori/{id}','adminaksi@deletekategori');

//page
Route::get('/admin/addpage','adminpage@addpage');
Route::post('/admin/aksi/addpage','adminaksi@addpage');
Route::get('/admin/listpage','adminpage@listpage');
Route::get('/admin/editpage/{id}','adminpage@editpage');
Route::post('/admin/aksi/editpage/{id}','adminaksi@editpage');
Route::get('/admin/aksi/deletepage/{id}','adminaksi@deletepage');

//gambar
Route::get('/admin/addgambar','adminpage@addgambar');
Route::post('/admin/aksi/addgambar','adminaksi@addgambar');
Route::get('/admin/listgambar','adminpage@listgambar');
Route::get('/admin/editgambar/{id}','adminpage@editgambar');
Route::post('/admin/aksi/editgambar/{id}','adminaksi@editgambar');
Route::get('/admin/aksi/deletegambar/{id}','adminaksi@deletegambar');

//kategori gambar
Route::get('/admin/addkategorigambar','adminpage@addkategorigambar');
Route::post('/admin/aksi/addkategorigambar','adminaksi@addkategorigambar');
Route::get('/admin/listkategorigambar','adminpage@listkategorigambar');
Route::get('/admin/editkategorigambar/{id}','adminpage@editkategorigambar');
Route::post('/admin/aksi/editkategorigambar/{id}','adminaksi@editkategorigambar');
Route::get('/admin/aksi/deletekategorigambar/{id}','adminaksi@deletekategorigambar');

Route::auth();

Route::get('/home', 'HomeController@index');