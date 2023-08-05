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
use \Illuminate\Http\Request;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/tasks', function(){
    return view('tasks.index');
});

Route::post('/tasks', function(Request $request){
    $task = new Task();
    $task->name = $request->name;
    $task->save();
    return redirect('/tasks');
});