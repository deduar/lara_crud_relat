<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMaterialesRequest;
use App\Http\Requests\UpdateMaterialesRequest;
use App\Models\Materiales;
use App\Models\Tareas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MaterialesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materiales = DB::table('materiales')->join('tareas',function($join) {$join->on('tareas.id','=','materiales.tarea_id');})->select('materiales.id','materiales.nombre as m_name', 'tareas.nombre as t_name')->get();
        return view ('materiales.index')->with('materiales', $materiales);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tareas = Tareas::all();
        return view('materiales.create')->with('tareas', $tareas);
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
        Materiales::create($input);
        return redirect('materiales')->with('flash_message', 'Material Addedd!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Materiales  $materiales
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $material = DB::table('materiales')->join('tareas',function($join) {$join->on('tareas.id','=','materiales.tarea_id');}) ->where('materiales.id', '=', $id)->select('materiales.id','materiales.nombre as m_name', 'tareas.nombre as t_name')->get();
        // $material = Materiales::find($id);
        return view('materiales.show')->with('material', $material);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Materiales  $materiales
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tareas = Tareas::all();
        $material = Materiales::find($id);
        return view('materiales.edit',['material'=> $material,'tareas'=>$tareas]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMaterialesRequest  $request
     * @param  \App\Models\Materiales  $materiales
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $material = Materiales::find($id);
        $input = $request->all();
        $material->update($input);
        return redirect('materiales')->with('flash_message', 'Material Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Materiales  $materiales
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Materiales::destroy($id);
        return redirect('materiales')->with('flash_message', 'Material deleted!');
    }
}
