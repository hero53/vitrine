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

Route::get('/', function () {
   return view('welcome');
});
 // for public
Route::get('/home','Page\PagesController@index')->name('home');
Route::get('/service','Service\ServiceController@index')->name('service');
    Route::get('/batiment','Service\ServiceController@batiment')->name('batiment');
    Route::get('/commerce','Service\ServiceController@commerce')->name('commerce');
    Route::get('/eau','Service\ServiceController@eau')->name('eau');
    Route::get('/exploration','Service\ServiceController@exploitation')->name('exploration');
    Route::get('/forage','Service\ServiceController@forage')->name('forage');
    Route::get('/ingenierie','Service\ServiceController@ingenierie')->name('ingenierie');
    Route::get('/mine','Service\ServiceController@mine')->name('mine');
    Route::get('/agriculture','Service\ServiceController@agriculture')->name('service');
    Route::get('/formation','Service\ServiceController@index')->name('formation');





Route::get('/contact','Contact\ContactController@index')->name('contact');
Route::get('/blog','Blog\BlogController@index')->name('blog.index');
Route::get('/article','Blog\BlogController@show')->name('blog.show');
Route::get('/projet','Projet\ProjetsController@index')->name('projet.index');
Route::get('/detail','Projet\ProjetsController@show')->name('projet.show');
//Route::get('devi','Devi\DeviController@index')->name('devi');

//for admin
Route::get('/admin','Admin\PageController@index')->name('admin');

Route::get('/categorie','Admin\CategorieController@index')->name('categorie.index');
Route::get('/categorie&create','Admin\CategorieController@index')->name('categorie.create');
Route::get('/categorie&show','Admin\CategorieController@show')->name('categorie.show');
Route::get('/categorie&create','Admin\CategorieController@create')->name('categorie.create');
Route::get('/categorie&store','Admin\CategorieController@store')->name('categorie.store');
Route::get('/categorie&edit','Admin\CategorieController@edit')->name('categorie.edit');
Route::get('/categorie&update','Admin\CategorieController@update')->name('categorie.update');
Route::get('/categorie&destroy','Admin\CategorieController@destroy')->name('categorie.destroy');

Route::get('/blog&admin','Admin\BlogController@index')->name('admin.blog.index');
Route::get('/blog&create','Admin\BlogController@index')->name('admin.blog.create');
Route::get('/blog&show','Admin\BlogController@show')->name('admin.blog.show');
Route::get('/blog&create','Admin\BlogController@create')->name('admin.blog.create');
Route::get('/blog&store','Admin\BlogController@store')->name('admin.blog.store');
Route::get('/blog&edit','Admin\BlogController@edit')->name('admin.blog.edit');
Route::get('/blog&update','Admin\blogController@update')->name('admin.blog.update');
Route::get('/blog&destroy','Admin\BlogController@destroy')->name('admin.blog.destroy');







Auth::routes(['register' => false]);

//Route::get('/home', 'HomeController@index')->name('home');
