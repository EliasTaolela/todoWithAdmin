<?php

namespace App\Http\Controllers;

use App\Models\ActivityLog;

abstract class Controller
{
    //
    public function store(Request $request)
{
    // Store the todo
    $todo = Todo::create($request->all());

    // Log the user action
    ActivityLog::create([
        'user_id' => auth()->id(),
        'action' => 'created todo',
        'details' => json_encode(['todo_id' => $todo->id, 'name' => $todo->name]),
    ]);

    return redirect()->back();
}
}
