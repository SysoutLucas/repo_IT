<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


Route::group([
    'middleware' => 'jwt.verify',
    'prefix' => 'auth'

], function ($router) {
   
    Route::post('/logout','AuthController@logout');
    Route::post('/refresh', 'AuthController@refresh');
    Route::get('/user-profile', 'AuthController@userProfile');
    Route::get('/getUsers', 'UserController@getUsers');
    Route::get('/tarefas', 'UserController@minhasTarefas');
    Route::get('/tarefasUser', 'UserController@tarefasUser');
});

Route::group([
    'prefix' => 'auth'
], function($router){
    Route::post('/login', 'AuthController@login');
    Route::post('/register', 'AuthController@register');
});
