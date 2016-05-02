<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// LISTA DE REPORTAJES
Route::get('stories', 'Stories@stories');
Route::get('updateStory/{id}', 'Stories@updateStory');

// AÑADIR UN REPORTAJE + VIDEO
Route::get('addVideo', 'AddVideo@addVideoGet');
Route::post('addVideo', 'AddVideo@addVideoPost');

// AÑADIR UN DOCUMENTO
Route::get('addDocument', 'AddDocument@addDocumentGet');
Route::post('addDocument', 'AddDocument@addDocumentPost');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
});
