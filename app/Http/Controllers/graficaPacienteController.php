<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Caffeinated\Shinobi\Models\Role;
use Caffeinated\Shinobi\Models\Permission;


use App\Paciente;
use App\Http\Requests;


class graficaPacienteController extends Controller
{  
    //
    public function graficaPaciente()
   {
        $Tos=Paciente::select(DB::raw('count(*) as enfermedad'))
        ->where('enfermedad','=','Tos')
        ->groupBy('enfermedad')
        ->get()->toArray();
        
        $Tos = array_column($Tos,'enfermedad');

        $Calentura=Paciente::select(DB::raw('count(*) as enfermedad'))
        ->where('enfermedad','=','Calentura')
        ->groupBy('enfermedad')
        ->get()->toArray();
        
        $Calentura = array_column($Calentura,'enfermedad');
        
      

        return view('graficaPaciente')
        ->with('Tos',json_encode($Tos,JSON_NUMERIC_CHECK))
        ->with('Calentura',json_encode($Calentura,JSON_NUMERIC_CHECK));
         }
        
       }
