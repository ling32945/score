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


/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', 'StudentsController@main');

Route::group(['prefix' => 'test'], function()
{
});
    Route::resource('student', 'StudentsController');
    Route::resource('course', 'CoursesController');
    Route::resource('score', 'ScoresController');
    Route::group(['prefix' => 'score'], function(){
        Route::get('/', 'ScoresController@create');
        Route::get('create', 'ScoresController@create');
        Route::post('store', 'ScoresController@store');
    });
