<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use 

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('tasks.index', compact('tasks'));
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'task_title' => 'required',
            'priority' => 'required',
            'description' => 'required',
        ]);

        // Create a new Task instance with the validated form data
        $task = new Task([
            'task_title' => $validatedData['task_title'],
            'priority' => $validatedData['priority'],
            'description' => $validatedData['description'],
        ]);

        // Save the task to the database
        $task->save();
    }
}
