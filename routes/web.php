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
    Route::get('/administration/news','NewsController@index');    
    Route::get('/administration/news/add','NewsController@create');    
    Route::get('/administration/news/edit/{id}','NewsController@edit');    
    Route::post('/administration/news/add','NewsController@store');    
    Route::post('/administration/news/edit','NewsController@update');    
    Route::get('/administration/news/delete','NewsController@delete');    
    Route::post('ckeditor/upload', 'CKEditorController@upload')->name('ckeditor.image-upload');

    Route::get('/administration/departments/update-content/{id?}','DepartmentController@updateContent');
});

Route::get('/login','UserController@login')->name('login');
Route::post('/login','UserController@checkLogin');

Route::get('/documents/{documentlist_id?}','DocumentController@showDocuments');
Route::get('/news/{slug}','NewsController@newsDetails');
Route::get('/news-list/','NewsController@newsList');
Route::get('/officials','HomeController@officials');
Route::get('/about-us','HomeController@about');
Route::get('/departments/{slug}','DepartmentController@index');