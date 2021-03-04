<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Caffeinated\Shinobi\Models\Role;
use Caffeinated\Shinobi\Models\Permission;

use App\Http\Requests;
use App\Paciente;

class GeneroPacienteController extends Controller
{
     public function generoPaciente()
    {


        $Paciente = Paciente::paginate(15);

         $Femenino=Paciente::select(DB::raw('count(*) as  sexo'))
        ->where('sexo','=','Femenino')
        ->groupBy('sexo')
        ->get()->toArray();
        
        $Femenino = array_column($Femenino,'sexo');
        $Masculino=Paciente::select(DB::raw('count(*) as  sexo'))
        ->where('sexo','=','Masculino')
        ->groupBy('sexo')
        ->get()->toArray();
        
        $Masculino = array_column($Masculino,'sexo');
        
      

        return view('generoPaciente', compact('Paciente'))
         ->with('Femenino',json_encode($Femenino,JSON_NUMERIC_CHECK))
        ->with('Masculino',json_encode($Masculino,JSON_NUMERIC_CHECK));
    }
}
