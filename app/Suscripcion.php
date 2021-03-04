<?php

namespace App;

use App\Suscripcion;
use Illuminate\Database\Eloquent\Model;

class Suscripcion extends Model
{
    protected $table='Suscripcion';
    protected $fillable = ['idPaquete', 'idSuscripcion', 'fecha_inscripcion', 'fecha_fin', 'idHospital'];

   

 
}
 



