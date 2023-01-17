<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTareasRequest;
use App\Http\Requests\UpdateTareasRequest;
use App\Http\Resources\TareasResource;
use App\Models\Materiales;
use App\Models\Tareas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TareasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tareas = Tareas::all();
        return view ('tareas.index')->with('tareas', $tareas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tareas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Tareas::create($input);
        return redirect('tareas')->with('flash_message', 'Tarea Addedd!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tareas  $Tareas
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tarea = Tareas::find($id);
        return view('tareas.show')->with('tarea', $tarea);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tareas  $Tareas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    $tarea = Tareas::find($id);
    return view('tareas.edit')->with('tarea', $tarea);
}

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTareasRequest  $request
     * @param  \App\Models\Tareas  $Tareas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tarea = Tareas::find($id);
        $input = $request->all();
        $tarea->update($input);
        return redirect('tareas')->with('flash_message', 'Tarea Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tareas  $Tareas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tareas::destroy($id);
        return redirect('tareas')->with('flash_message', 'Tarea deleted!');
    }
}
