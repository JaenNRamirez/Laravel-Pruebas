<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\porhacer;

class porcontroller extends Controller
{
    //
    public function store(Request $request){

        $request->validate([
            'title'=>'required|min:3'
        ]);

        $todo = new porhacer();
        $todo->tarea_pendiente = $request->title;
        $todo->save();
        return redirect()->route('xdxd')->with('success', 'Tarea Creada Correctamente');
    }

    public function index(){
        $todo = porhacer::all();
        return view('tareas.index',['porhacerall'=>$todo]);
    }
}
