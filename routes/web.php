<?php

use Illuminate\Support\Facades\Route;
use App\Mail\ContactMessage;


Route::get('/', function () {
    return view('welcome');
});
// for public
Route::get('/home', 'Page\PagesController@index')->name('home');
Route::get('/service', 'Service\ServiceController@index')->name('service');
Route::get('/batiment', 'Service\ServiceController@batiment')->name('batiment');
Route::get('/commerce', 'Service\ServiceController@commerce')->name('commerce');
Route::get('/eau', 'Service\ServiceController@eau')->name('eau');
Route::get('/exploration', 'Service\ServiceController@exploitation')->name('exploration');
Route::get('/forage', 'Service\ServiceController@forage')->name('forage');
Route::get('/ingenierie', 'Service\ServiceController@ingenierie')->name('ingenierie');
Route::get('/mine', 'Service\ServiceController@mine')->name('mine');
Route::get('/agriculture', 'Service\ServiceController@agriculture')->name('agriculture');
Route::get('/formation', 'Service\ServiceController@formation')->name('formation');


Route::get('/contact', 'Contact\ContactController@index')->name('contact');
Route::post('/contact&store', 'Contact\ContactController@store')->name('contact.store');
Route::get('/blog', 'Blog\BlogController@index')->name('blog.index');
Route::get('/article', 'Blog\BlogController@show')->name('blog.show');
Route::get('/projet', 'Projet\ProjetsController@index')->name('projet.index');
Route::get('/detail', 'Projet\ProjetsController@show')->name('projet.show');
//Route::get('devi','Devi\DeviController@index')->name('devi');

//for admin
Route::get('/mail', 'Contact\ContactController@adminindex')->name('mail.index');
Route::delete('/mail/destroy/{contact}', 'Contact\ContactController@destroy')->name('mail.destroy');
Route::get('/mail/{contact}', 'Contact\ContactController@show')->name('mail.show');

Route::resource('categories', 'Admin\CategoriesController');


Route::get('/article', 'Admin\BlogController@indexadmin')->name('admin.view');
Route::get('/article-create', 'Admin\BlogController@create')->name('admin.create');
Route::post('/article-store', 'Admin\BlogController@store')->name('admin.store');
Route::delete('/article-destroy/{articles}', 'Admin\BlogController@destroy')->name('admin.destroy');
Route::get('/article-show/{articles}', 'Admin\BlogController@show')->name('admin.show');




Auth::routes(['register' => false]);

//Route::get('/home', 'HomeController@index')->name('home');
