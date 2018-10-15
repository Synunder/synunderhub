<?php


Route::get('/', function () {
	$tasks = DB::Table('tasks')->get();
	return view('welcome',compact('tasks'));		
});	

//checking each rowid
Route::get('/task', 'TaskController@index');
Route::get('/task/{tasks}','taskController@show');

//layout examples
Route::get('/post', 'postController@index');

//layout blog
route::get('blog','blogcontroller@index');


//forms exercise 
route::get('/blog/create','blogcontroller@create');
route::post('/blog','blogcontroller@store');

