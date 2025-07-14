<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(Request $request)// take all tasks
    {
        $tasks = Task::query();
        
        if($request->category) {
            $tasks->where('category', $request->category);
        }
        if($request->priority) {
            $tasks->where('priority', $request->priority);
        }
        if($request->start || $request->end) {
            $tasks->whereBetween('deadline', [
                $request->start ?? '2010-01-01', 
                $request->end ?? '2999-01-01'
            ]);
        }
        $allowedSorts = ['created_at', 'priority', 'deadline'];
        if ($request->sort) {
        if (in_array($request->sort, $allowedSorts)) {
            $tasks->orderBy($request->sort, $request->order ?? 'asc');
        } else {
            return response()->json([
                'message' => 'Invalid sort field. Allowed values: created_at, priority, deadline.'
            ], 400);
        }
    }

    return response()->json($tasks->get());

    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'priority' => 'required|in:Low,Medium,High',
            'deadline' => 'required|date',
        ]);

        $task = Task::create($validated+$request->only(['description', 'category']));
        return response()->json($task, 201);
    }

    public function show(Request $request, Task $task)
    {
        return response()->json($task);
    }


    public function update(Request $request, Task $task)
    {
          $validated = $request->validate([
            'title' => 'sometimes|string|max:255',
            'priority' => 'sometimes|in:Low,Medium,High',
            'deadline' => 'sometimes|date',
        ]);
        $task->update($validated + $request->only(['description', 'category']));
        return response()->json($task);

    }

  
    public function destroy(Task $task )
    {
        $task->delete();
        return response()->json(['message' => 'Task deleted successfully']);
    }
}
