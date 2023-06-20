<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;

class TaskController extends Controller
{
    public function index()
    {
        $todos = DB::table('todos')->get();
        return view('todo', compact('todos'));
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'task_title' => 'required|string|max:255',
            'priority' => 'required',
            'description' => 'required|string|max:500',
        ]);

        // Create a new Task instance with the validated form data
        $task = Todo::create([
            'task_title' => $validatedData['task_title'],
            'priority' => $validatedData['priority'],
            'description' => $validatedData['description'],
        ]);      

        // Save the task to the database
        $task->save();
         // redirection
    return redirect('/todo')->with('status', 'todo added');
    }

    public function view($id)
    {
        $todo = Todo::find($id);
        if ($todo) {
            return view('viewTasks', compact('todo'));
        } else {
            // Handle the case when the task is not found
            abort(404);
        }
    }
   
    public function destroy($id): RedirectResponse
    {
        // Find the task by ID
        $task = Todo::findOrFail($id);

        // Delete the task
        $task->delete();

        // Redirect back to the todo page
        return redirect()->route('todo')->with('status', 'Task deleted successfully');
    }
}
