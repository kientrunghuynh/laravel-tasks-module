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

use App\Task;
use Illuminate\Http\Request;

Route::group(['prefix' => 'task', 'module'=>'Tasks','namespace' => 'App\Modules\Tasks\Controllers'], function() {
    Route::get('/', 'TaskController@index');
    Route::post('/', 'TaskController@store');
    Route::delete('/task/{task}', 'TaskController@destroy');
});



