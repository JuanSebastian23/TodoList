<?php

namespace App\Http\Controllers;

use App\Models\task;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $task['tasks'] = TASK::all();
        return view('task.index', $task);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validar la solicitud
        $request->validate([
            'task' => 'required|string|max:255',
        ]);
        
        // Crear la tarea
        $task = new Task();
        $task->task = $request->task;
        $task->save();
        
        return redirect('/')->with('success', 'Tarea agregada correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(task $task)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, task $task)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $task = Task::findOrFail($id);
            $task->delete();
            return redirect('/')->with('success', 'Tarea eliminada correctamente');
        } catch (\Exception $e) {
            return redirect('/')->with('error', 'Error al eliminar tarea: ' . $e->getMessage());
        }
    }
}
