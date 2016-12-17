<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');
Route::group(['middleware' => 'auth'], function () {
		Route::resource('questions','QuestionController');
		Route::resource('levels','AcademicLevelController');
		Route::resource('subjects','SubjectController');
		Route::resource('faculties','FacultyController');
		Route::resource('locations','LocationController');
		Route::resource('categories','CategoryController');
		Route::resource('directories','DirectoryController');
});

Route::group(['prefix' => 'api'], function () {
		Route::get('categories','ApiController@categories');
		Route::get('locations','ApiController@locations');
		Route::get('directories','ApiController@directories');
});
