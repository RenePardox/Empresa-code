<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportexController extends Controller
{
    //
    public function reportex()
    {
        $repo1= DB::table('empleados')
        ->join('dependientes', 'empleados.ci', '=', 'dependientes.ci')
        ->select('empleados.ci','nombre',DB::raw('count(*) as xxx'))
        ->groupBy('empleados.ci','nombre')
        ->having(DB::raw('count(*)'), '>=', 1)
        ->orderBy('nombre')
        ->get();
        $sql= DB::table('empleados')
        ->join('dependientes', 'empleados.ci', '=', 'dependientes.ci')
        ->select('empleados.ci','nombre',DB::raw('count(*) as xxx'))
        ->groupBy('empleados.ci','nombre')
        ->having(DB::raw('count(*)'), '>', 1)
        ->orderBy('nombre')
        ->toSql();
        //$empleados=Empleado::all();
        //return view('empleado.indexe')->with('datos',$empleados);
       return response()->json($repo1);
      
    }
}
