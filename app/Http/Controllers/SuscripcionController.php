<?php

namespace App\Http\Controllers;

use Caffeinated\Shinobi\Models\Role;
use Caffeinated\Shinobi\Models\Permission;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Paquete; 
use App\Hospital;  
use App\Suscripcion;
use Illuminate\Http\Request;
use Session;
use PDF;

class SuscripcionController extends Controller
{
   

    public function index()
    {
         $Hospitales=Hospital::all();
            return view('Suscripcion',compact('Hospitales', 'Paquetes'));
        //------------------------------------------------------

    }

       public function create()
    {
        return view('graficaPaquete');
    }

       public function listaSuscripciones()
        {
            
        $Paquetes=Suscripcion::select('idPaquete', 'idHospital', 'fecha_inscripcion','fecha_fin')->get();

        $pdf = PDF::loadView('listaSuscripciones',['Paquetes' => $Paquetes]);

        return $pdf->stream('Suscripciones.pdf');
    }

    public function busquedaDatos(Request $request){

        $buscar = $request->get('Hospital');
        $Hospitales=Hospital::where('nombre', 'LIKE', "%$buscar%")->get();
        return view('Suscripcion',  compact('Hospitales'));
    }

    public function busquedaPaquetes(Request $request){

        $buscar = $request->get('Paquete');
        $Hospitales=Paquete::where('nombre', 'LIKE', "%$buscar%")->get();
        return view('Suscripcion',  compact('Paquetes'));
    }

}
