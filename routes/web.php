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

    Route::get('/administration/departments/{id?}','DepartmentController@updateContent');
    Route::post('/administration/departments','DepartmentController@store');
    Route::get('/administration/departments-members/{id?}','DepartmentController@updateMember');
    Route::post('/administration/department-members','DepartmentController@storeMember');

    Route::get('/administration/announcements/','AnnouncementController@index');
    Route::get('/administration/announcements/create','AnnouncementController@create');
    Route::post('/administration/announcements/store','AnnouncementController@store');
    Route::get('/administration/announcements/delete','AnnouncementController@delete');
});

Route::get('/login','UserController@login')->name('login');
Route::post('/login','UserController@checkLogin');

Route::get('/documents/{documentlist_id?}','DocumentController@showDocuments');
Route::get('/news/{slug}','NewsController@newsDetails');
Route::get('/news-list/','NewsController@newsList');
Route::get('/officials','HomeController@officials');
Route::get('/about-us','HomeController@about');
Route::get('/department/{slug}','DepartmentController@index');
Route::get('/department/{slug}/members','DepartmentController@members');
Route::get('/department/{slug}/services','DepartmentController@services');
Route::get('/department/{slug}/forms','DepartmentController@forms');
Route::get('/projects','HomeController@projects');
Route::get('/policy','HomeController@policy');
Route::get('/terms','HomeController@terms');