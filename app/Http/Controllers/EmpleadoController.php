<?php

namespace App\Http\Controllers;
use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        //return response()->json('Estoy en index');
        $empleados=Empleado::all();
        //return view('empleado.indexe')->with('datos',$empleados);
       // return response()->json($empleados);
       return view('empleado.listar')->with('datos',$empleados);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        //return 'estoy en create';
        return view('empleado.datos');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        //return response()->json($request);
        //SSreturn 'estoy en STORAGE';
        $datos=request()->except('_token');
        Empleado::insert($datos);
        return redirect('empleado');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        //return 'estoy para editar';
        $empleado=Empleado::where('ci',$id)->first();
        return view('empleado.editar')->with('datos',$empleado);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $datos=request()->except(['_token','_method']);
        Empleado::where('ci',$id)->update($datos);
        return redirect('empleado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        //return 'estoy para borrar';
        Empleado::where('ci',$id)->delete();
        return redirect('empleado');
    }
}
