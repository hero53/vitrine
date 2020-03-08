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

Route::get('/home','Page\PagesController@index')->name('home');
Route::get('/service','Service\ServiceController@index')->name('service');
Route::get('/contact','Contact\ContactController@index')->name('contact');


Route::get('/blog','Blog\BlogController@index')->name('blog.index');
Route::get('/article','Blog\BlogController@show')->name('blog.show');
Route::get('/projet','Projet\ProjetsController@index')->name('projet.index');
Route::get('/detail','Projet\ProjetsController@show')->name('projet.show');
//Route::get('devi','Devi\DeviController@index')->name('devi');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
