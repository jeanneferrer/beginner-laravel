<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        \Log::info('Test log entry'); // Test log
        return Task::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'completed' => 'boolean',
        ]);
        return Task::create($validated);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $task = Task::findOrFail($id); // Add this line
        return $task;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $task = Task::findOrFail($id); // Add this line
        $validated = $request->validate([
            'title' => 'sometimes|required|string|max:255',
            'completed' => 'boolean',
        ]);
        $task->update($validated);
        return $task;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $task = Task::findOrFail($id); // Add this line
        $task->delete();
        return response()->json(null, 204);
    }
}
