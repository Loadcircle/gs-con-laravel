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

Route::redirect('/', 'index');
   
Route::get('index', 'Web\HomeController@index')->name('index');
Route::post('enviar', 'Web\HomeController@enviar')->name('enviar');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('main', 'Admin\MainController');
Route::resource('logo', 'Admin\LogoController');
Route::resource('section', 'Admin\sectionController');
Route::resource('menu', 'Admin\MenuController');
Route::resource('content', 'Admin\ContentController');
Route::resource('carousel', 'Admin\CarouselController');
