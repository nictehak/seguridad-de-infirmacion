<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Caffeinated\Shinobi\Models\Role;
use Caffeinated\Shinobi\Models\Permission;

use App\Http\Requests;
use App\doctor;

class GraficaEspecialidadController extends Controller
{
     public function graficaEspecialidad()
    {

    	 $doctor = doctor::paginate(15);
         $Dentista=doctor::select(DB::raw('count(*) as  idEspecialidad'))
        ->where('idEspecialidad','=','5')
        ->groupBy('idEspecialidad')
        ->get()->toArray();
        
        $Dentista = array_column($Dentista,'idEspecialidad');

        $Pediatra=doctor::select(DB::raw('count(*) as  idEspecialidad'))
        ->where('idEspecialidad','=','4')
        ->groupBy('idEspecialidad')
        ->get()->toArray();
        
        $Pediatra = array_column($Pediatra,'idEspecialidad');

        $Fisioterapeuta=doctor::select(DB::raw('count(*) as  idEspecialidad'))
        ->where('idEspecialidad','=','3')
        ->groupBy('idEspecialidad')
        ->get()->toArray();
        
        $Fisioterapeuta = array_column($Fisioterapeuta,'idEspecialidad');
        
        $Ginecólogo=doctor::select(DB::raw('count(*) as  idEspecialidad'))
        ->where('idEspecialidad','=','2')
        ->groupBy('idEspecialidad')
        ->get()->toArray();
        
        $Ginecólogo = array_column($Ginecólogo,'idEspecialidad');
      
        $Neurolingistica=doctor::select(DB::raw('count(*) as  idEspecialidad'))
        ->where('idEspecialidad','=','1')
        ->groupBy('idEspecialidad')
        ->get()->toArray();
        
        $Neurolingistica = array_column($Neurolingistica,'idEspecialidad');

        return view('graficaEspecialidad', compact('doctor'))
        ->with('Dentista',json_encode($Dentista,JSON_NUMERIC_CHECK))
        ->with('Pediatra',json_encode($Pediatra,JSON_NUMERIC_CHECK))
        ->with('Fisioterapeuta',json_encode($Fisioterapeuta,JSON_NUMERIC_CHECK))
        ->with('Ginecólogo',json_encode($Ginecólogo,JSON_NUMERIC_CHECK))
        ->with('Neurolingistica',json_encode($Neurolingistica,JSON_NUMERIC_CHECK));
        
    }
} 
