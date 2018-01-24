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
Route::post('register', 'Auth\RegisterController@register');

Route::group(['prefix' => '/user', 'middleware' => 'auth:api'], function () {

//    Route::get('/', ['as' => 'users', 'uses' => 'UserController@index']);
    Route::get('/', ['as' => 'user.show', 'uses' => 'UserController@show']);
    Route::put('/update', ['as' => 'user.update', 'uses' => 'UserController@update']);
//    Route::delete('/{id}', ['as' => 'user.delete', 'uses' => 'UserController@destroy']);
    Route::post('/logout', ['as' => 'user.logout', 'uses' => 'Auth\LoginController@logout']);

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
//    Route::post('/store', ['as' => 'exercises.store', 'uses' => 'ExerciseController@store']);
//    Route::put('/store', ['as' => 'exercises.store', 'uses' => 'ExerciseController@store']);
//    Route::delete('/{id}', ['as' => 'exercises.delete', 'uses' => 'ExerciseController@destroy']);

});