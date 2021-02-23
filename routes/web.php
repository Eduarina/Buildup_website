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


Route::get('/','frontController@index');
Route::get('/propiedades/{id}','frontController@show');
Route::get('/p/{id}','frontController@fromTokko');
Route::get('/propiedades', 'frontController@viewall');
Route::post('/search', 'frontController@search');
Route::get('/nosotros', function(){
	return view('nosotros.index');
});
Route::get('/servicios', function(){
	return view('servicios.index');
});
Route::get('/proyectos', function(){
	return view('proyectos.index');
});
Route::get('/contacto', function(){
	return view('contacto.index');
});
Route::post("/sendMail", 'mailController@send');
Route::get("/unetenos", 'frontController@joinus');