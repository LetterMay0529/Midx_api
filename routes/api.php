<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Viewer;
use App\Movie;
use App\Schedule;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
|Route::middleware('auth:api')->get('/user', function (Request $request) {
|   return $request->user();
});
|
|
*/


Route::get('viewers/', 'ViewerController@index');
Route::get('viewers/{viewer}', 'ViewerController@show');
Route::post('viewers/', 'ViewerController@store');
Route::patch('viewers/{viewer}', 'ViewerController@update');
Route::delete('viewers/{viewer}', 'ViewerController@destroy');
Route::get('viewers/{viewer}/movies/', 'ViewerController@Viewer');
Route::get('viewers/{viewer}/movies/schedules', 'ViewerController@byViewer');
Route::delete('viewers/{viewer}/movies/schedules', 'ViewerController@destroy');
Route::delete('viewers/{viewer}/movies/schedules', 'ViewerController@destroy');


Route::get('movies/', 'MovieController@index');
Route::get('movies/{movie}', 'MovieController@show');
Route::post('movies/', 'MovieController@store');
Route::patch('movies/{movie}', 'MovieController@update');
Route::delete('movies/{movie}', 'MovieController@destroy');


Route::get('schedules/', 'ScheduleController@index');
Route::get('schedules/{schedule}', 'ScheduleController@show');
Route::post('schedules/', 'ScheduleController@store');
Route::patch('schedules/{schedule}', 'ScheduleController@update');
Route::delete('schedules/{schedule}', 'ScheduleController@destroy');

