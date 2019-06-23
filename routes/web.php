<?php

Route::get('/', function () {
    return view('welcome');
});

Route::resource('project', 'ProjectController');

Route::post('/project/{project}/tasks', 'ProjectTasksController@store');
Route::patch('/task/{task}', 'ProjectTasksController@update');
