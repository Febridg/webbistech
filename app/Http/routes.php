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

Route::get('/', 'pagectr@home');
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

//menu
Route::get('/admin/addmenu','adminpage@addmenu');
Route::post('/admin/aksi/addmenu','adminaksi@addmenu');
Route::get('/admin/listmenu','adminpage@listmenu');
Route::get('/admin/editmenu/{id}','adminpage@editmenu');
Route::post('/admin/aksi/editmenu/{id}','adminaksi@editmenu');
Route::get('/admin/aksi/deletemenu/{id}','adminaksi@deletemenu');

//submenu
Route::get('/admin/addsubmenu','adminpage@addsubmenu');
Route::post('/admin/aksi/addsubmenu','adminaksi@addsubmenu');
Route::get('/admin/listsubmenu','adminpage@listsubmenu');
Route::get('/admin/editsubmenu/{id}','adminpage@editsubmenu');
Route::post('/admin/aksi/editsubmenu/{id}','adminaksi@editsubmenu');
Route::get('/admin/aksi/deletesubmenu/{id}','adminaksi@deletesubmenu');

//link
Route::get('/admin/addlink','adminpage@addlink');
Route::post('/admin/aksi/addlink','adminaksi@addlink');
Route::get('/admin/listlink','adminpage@listlink');
Route::get('/admin/editlink/{id}','adminpage@editlink');
Route::post('/admin/aksi/editlink/{id}','adminaksi@editlink');
Route::get('/admin/aksi/deletelink/{id}','adminaksi@deletelink');

//modul
Route::get('/admin/listmodul','adminpage@listmodul');

//konten
Route::get('/admin/addkonten','adminpage@addkonten');
Route::post('/admin/aksi/addkonten','adminaksi@addkonten');
Route::get('/admin/listkonten','adminpage@listkonten');
Route::get('/admin/editkonten/{id}','adminpage@editkonten');
Route::post('/admin/aksi/editkonten/{id}','adminaksi@editkonten');
Route::get('/admin/aksi/deletekonten/{id}','adminaksi@deletekonten');

//webtmp
Route::get('/ajax/lokasi','ajaxpage@lokasi');

Route::auth();

Route::get('/home', 'HomeController@index');