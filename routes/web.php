<?php

use Illuminate\Routing\RouteGroup;
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

    Route::get('/administration/messages','AnnouncementController@messages');
    Route::post('/ajax/announcement-details','AnnouncementController@ajaxAnouncementDetails');

    Route::get('/administration/projects','ProjectController@index');
    Route::get('/administration/project/add','ProjectController@add');
    Route::post('/administration/project/save','ProjectController@saveProject');
    Route::get('/administration/add_project_photo/{project_id}','ProjectController@addProjectPhoto');
    Route::post('/administration/project-photo/save','ProjectController@saveProjectPhoto');
    Route::post('/administration/projects/delete','ProjectController@delete');

    Route::prefix('administration')->group(function() {
        Route::get('/contents/{type}', 'ContentController@index');
        Route::post('/contents', 'ContentController@save');
        
        Route::get('/highlights','HighlightsController@index');
        Route::post('/highlights/details','HighlightsController@details');
        Route::post('/highlights','HighlightsController@update');

        Route::get('/officials','OfficialsController@index');
        Route::post('/officials/details','OfficialsController@details');
        Route::post('/officials','OfficialsController@update');

        Route::get('/hotlines', 'HotlineController@index');
        Route::post('/hotlines/details', 'HotlineController@details');
        Route::post('/hotlines', 'HotlineController@store');
        Route::post('/hotlines/delete', 'HotlineController@delete');

        Route::get('/banners/', 'BannerController@index');
        Route::post('/banners/', 'BannerController@store');
        Route::post('/banners/delete', 'BannerController@delete');

        Route::post('/image/crop','ImageController@crop');
    });

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
Route::get('/project-photos/{id}','HomeController@projectDetails');
Route::get('/policy','HomeController@policy');
Route::get('/terms','HomeController@terms');
Route::post('/contact/save','HomeController@contactSave');
Route::get('/test','HomeController@test');