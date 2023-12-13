<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;
use Illuminate\Support\Facades\DB;

class ReporteController extends Controller
{
    //
    public function reporte1()
    {
        //
        //return response()->json('Estoy en reporte1');
        $repo1= DB::table('empleados')
        ->join('dependientes', 'empleados.ci', '=', 'dependientes.ci')
        ->select('ci','nombre',DB::raw('count(*) as xxx'))
        ->groupBy('ci','nombre')
        ->having(DB::raw('count(*)'), '>', 1)
        ->orderBy('nombre')
        ->get();
        $sql= DB::table('empleados')
        ->join('dependientes', 'empleados.ci', '=', 'dependientes.ci')
        ->select('ci','nombre',DB::raw('count(*) as xxx'))
        ->groupBy('ci','nombre')
        ->having(DB::raw('count(*)'), '>', 1)
        ->orderBy('nombre')
        ->toSql();
        //$empleados=Empleado::all();
        //return view('empleado.indexe')->with('datos',$empleados);
       return response()->json($sql);
       //return view('empleado.listar')->with('datos',$empleados);
    }
}
