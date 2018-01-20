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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::group(['prefix' => '/users'], function () {

    Route::get('/', ['as' => 'users', 'uses' => 'UserController@index']);
    Route::get('/{id}', ['as' => 'users.show', 'uses' => 'UserController@show']);
    Route::post('/store', ['as' => 'users.store', 'uses' => 'UserController@store']);
    Route::put('/store', ['as' => 'users.store', 'uses' => 'UserController@store']);
    Route::delete('/{id}', ['as' => 'users.delete', 'uses' => 'UserController@destroy']);


});

Route::group(['prefix' => '/workouts'], function () {

    Route::get('/', ['as' => 'workouts', 'uses' => 'WorkoutController@index']);
    Route::get('/{id}', ['as' => 'workouts.show', 'uses' => 'WorkoutController@show']);
    Route::post('/store', ['as' => 'workouts.store', 'uses' => 'WorkoutController@store']);
    Route::put('/store', ['as' => 'workouts.store', 'uses' => 'WorkoutController@store']);
    Route::delete('/{id}', ['as' => 'workouts.delete', 'uses' => 'WorkoutController@destroy']);

});

Route::group(['prefix' => '/exercises'], function () {

    Route::get('/', ['as' => 'exercises', 'uses' => 'ExerciseController@index']);
    Route::get('/{id}', ['as' => 'exercises.show', 'uses' => 'ExerciseController@show']);
    Route::post('/store', ['as' => 'exercises.store', 'uses' => 'ExerciseController@store']);
    Route::put('/store', ['as' => 'exercises.store', 'uses' => 'ExerciseController@store']);
    Route::delete('/{id}', ['as' => 'exercises.delete', 'uses' => 'ExerciseController@destroy']);

});