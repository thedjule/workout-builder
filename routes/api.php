<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('login', 'Auth\LoginController@login');

Route::group(['prefix' => '/users', 'middleware' => 'auth:api'], function () {

    Route::get('/', ['as' => 'users', 'uses' => 'UserController@index']);
    Route::get('/{id}', ['as' => 'users.show', 'uses' => 'UserController@show']);
    Route::put('/update', ['as' => 'users.update', 'uses' => 'UserController@update']);
    Route::post('/register', ['as' => 'users.register', 'uses' => 'Auth\RegisterController@register']);
    Route::delete('/{id}', ['as' => 'users.delete', 'uses' => 'UserController@destroy']);
    Route::post('/logout', ['as' => 'users.logout', 'uses' => 'Auth\LoginController@logout']);

});

Route::group(['prefix' => '/workouts', 'middleware' => 'auth:api'], function () {

    Route::get('/', ['as' => 'workouts', 'uses' => 'WorkoutController@index']);
    Route::get('/{id}', ['as' => 'workouts.show', 'uses' => 'WorkoutController@show']);
    Route::post('/store', ['as' => 'workouts.store', 'uses' => 'WorkoutController@store']);
    Route::put('/store', ['as' => 'workouts.store', 'uses' => 'WorkoutController@store']);
    Route::delete('/{id}', ['as' => 'workouts.delete', 'uses' => 'WorkoutController@destroy']);

});

Route::group(['prefix' => '/exercises', 'middleware' => 'auth:api'], function () {

    Route::get('/', ['as' => 'exercises', 'uses' => 'ExerciseController@index']);
    Route::get('/{id}', ['as' => 'exercises.show', 'uses' => 'ExerciseController@show']);
    Route::post('/store', ['as' => 'exercises.store', 'uses' => 'ExerciseController@store']);
    Route::put('/store', ['as' => 'exercises.store', 'uses' => 'ExerciseController@store']);
    Route::delete('/{id}', ['as' => 'exercises.delete', 'uses' => 'ExerciseController@destroy']);

});