<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'HomeController@index')->name('home');
Route::get('/test','HomeController@test');

Route::middleware(['auth'])->group(function(){
    Route::get('/administration', 'AdminController@index');
    Route::get('/administration/documents','DocumentController@index');
    Route::get('/administration/documents/add','DocumentController@create');
    Route::post('/administration/documents/add','DocumentController@store');
    Route::get('/logout', 'UserController@signout');
    Route::get('/administration/documents/delete','DocumentController@delete');
    
});
Route::get('/documents/{documentlist_id?}','DocumentController@showDocuments');

Route::get('/login','UserController@login')->name('login');
Route::post('/login','UserController@checkLogin');