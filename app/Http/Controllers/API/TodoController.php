<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Todo;
class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Todo::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(['title' => 'required|string|max:255']);
        $todo = Todo::create([
            'title => $request->title',
            'completed' => false,
        ]);
        return response()->json($todo, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Todo $todo)
    {
        $request->validate(['title' => 'sometimes|string|max:225']);
        $todo->update($request->only(['title', 'completed']));
        return response()->json($todo);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Todo $todo)
    {
        $todo->delete();
        return response()->json(null, 204);
    }
}
