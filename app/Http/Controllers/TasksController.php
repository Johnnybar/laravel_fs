<?php

namespace App\Http\Controllers;

use App\Task;

class TasksController extends Controller
{
  public function index()
  {

    $tasks = Task::all();

    return view('tasks.index', compact('tasks'));
  }

  public function show(Task $task){ //this works because the wildcard in routes matches the argument name here

    // $task = Task::find($id);//no need for this because it's done automatically when the condition above exists

    return view('tasks.show', compact('task'));

  }
}
