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
//Route::resource('contents',     'Admin\ContentController');
Route::resource('carousels',    'Admin\CarouselController');

//contenido
Route::match(['get','post'],'contents/{section_id}', 'Admin\ContentController@index')->name('contents');
Route::match(['get','post'],'create/{section_id}',   'Admin\ContentController@create')->name('contents.create');
Route::match(['get','post'],'store',    'Admin\ContentController@store')->name('contents.store');
Route::match(['get','post'],'show/{section_id}',     'Admin\ContentController@show')->name('contents.show');
Route::match(['get','post'],'edit/{section_id}/{id}',     'Admin\ContentController@edit')->name('contents.edit');
Route::match(['get','post'],'update/{section_id}',   'Admin\ContentController@update')->name('contents.update');
Route::match(['get','post'],'destroy/{section_id}',  'Admin\ContentController@destroy')->name('contents.destroy');
Route::match(['get','post'],'stype/{section_id}/{st_id}',  'Admin\ContentController@stype')->name('contents.stype');