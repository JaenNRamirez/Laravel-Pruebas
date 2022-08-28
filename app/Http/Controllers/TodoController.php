<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TodoModel;

class TodoController extends Controller
{
    //
    /*
    index para mostrar todos
    store para guardar
    update para actualizar
    destroy para eliminar
    edit para mostrar el formulario de edicion
    */

    public function store(Request $request){
        $request -> validate([
            'title' => 'required|min:3'
        ]);
        $todo = new TodoModel;
        $todo->title = $request->title;
        $todo->save();
        return redirect()->route('probando')->with('success', 'Tarea creada correctamente');
    }
}
