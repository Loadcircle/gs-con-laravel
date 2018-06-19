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
   
Route::get('index',     'Web\HomeController@index')->name('index');
Route::post('enviar',   'Web\HomeController@enviar')->name('enviar');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('mains',        'Admin\MainController');
Route::resource('logos',        'Admin\LogoController');
Route::resource('sections',     'Admin\sectionController');
Route::resource('menus',        'Admin\MenuController');
Route::resource('contents',     'Admin\ContentController');
Route::resource('carousels',    'Admin\CarouselController');
