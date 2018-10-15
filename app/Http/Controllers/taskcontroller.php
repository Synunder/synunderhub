<?php

namespace App\Http\Controllers;

use App\Task;

class taskcontroller extends Controller
{
    public function index()
	{
	$tasks = Task::all();
	return view('task.index',compact('tasks'));	
	}

	public function show(Task $tasks)
	{
    return view('task.show',compact('tasks'));
	}
}
