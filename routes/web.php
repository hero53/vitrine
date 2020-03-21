<?php

use Illuminate\Support\Facades\Route;
use App\Mail\ContactMessage;


Route::get('/', function () {
    return view('welcome');
});
// for public
Route::get('public/home', 'Page\PagesController@index')->name('home.public');

Route::get('public/team', 'Page\PagesController@team')->name('team.index');
Route::get('public/team/team.show1', 'Page\PagesController@team1')->name('team.show1');
Route::get('public/team/team.show2', 'Page\PagesController@team2')->name('team.show2');
Route::get('public/team/team.show3', 'Page\PagesController@team3')->name('team.show3');
Route::get('public/team/team.show4', 'Page\PagesController@team1')->name('team.show4');

Route::get('public/service', 'Service\ServiceController@index')->name('service');
//Route::get('public/service/batiment', 'Service\ServiceController@batiment')->name('batiment');
//Route::get('public/service/commerce', 'Service\ServiceController@commerce')->name('commerce');
//Route::get('public/service/eau', 'Service\ServiceController@eau')->name('eau');
//Route::get('public/service/exploration', 'Service\ServiceController@exploitation')->name('exploration');
//Route::get('public/service/forage', 'Service\ServiceController@forage')->name('forage');
//Route::get('public/service/ingenierie', 'Service\ServiceController@ingenierie')->name('ingenierie');
//Route::get('public/service/mine', 'Service\ServiceController@mine')->name('mine');
//Route::get('public/service/agriculture', 'Service\ServiceController@agriculture')->name('agriculture');
//Route::get('public/service/formation', 'Service\ServiceController@formation')->name('formation');


Route::get('public/contact', 'Contact\ContactController@index')->name('contact');
Route::post('public/contact/store', 'Contact\ContactController@store')->name('contact.store');

Route::get('public/actualite', 'Blog\BlogController@index')->name('blog.index');
Route::get('public/actualite/show/{articles}', 'Blog\BlogController@show')->name('blog.show');

Route::get('public/projet', 'Projet\ProjetsController@index')->name('projet.index');
Route::get('public/projet/show', 'Projet\ProjetsController@show')->name('projet.show');
//Route::get('devi','Devi\DeviController@index')->name('devi');

//for admin
Route::get('admin/mail', 'Contact\ContactController@adminindex')->name('mail.index');
Route::delete('admin/mail/destroy/{contact}', 'Contact\ContactController@destroy')->name('mail.destroy');
Route::get('admin/mail/{contact}', 'Contact\ContactController@show')->name('mail.show');

Route::get('admin/actualite', 'Admin\BlogController@indexadmin')->name('admin.view');
Route::get('admin/actualite/create', 'Admin\BlogController@create')->name('admin.create');
Route::post('admin/store', 'Admin\BlogController@store')->name('admin.store');
Route::get('admin/actualite/edit/{articles}', 'Admin\BlogController@edit')->name('admin.edit');
Route::patch('admin/actualite/update/{articles}', 'Admin\BlogController@update')->name('admin.update');
Route::delete('adminactualite/destroy/{articles}', 'Admin\BlogController@destroy')->name('admin.destroy');
Route::get('admin/actualite/show/{articles}', 'Admin\BlogController@show')->name('admin.show');

Route::get('admin/welcome', 'Admin\CompteController@connexion')->name('admin.index');




Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');
