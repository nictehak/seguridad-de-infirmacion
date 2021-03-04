<?php

namespace App;

use Caffeinated\Shinobi\Traits\ShinobiTrait;
use Illuminate\Database\Eloquent\Model;

class hospital extends Model
{
    use ShinobiTrait;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'hospital';

    /**
    * The database primary key value. 
    *
    * @var string
    */
    protected $primaryKey = 'idHospital';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idHospital', 'nombre', 'direccion', 'telefono', 'estado', 'latitud', 'longitud','directorGeneral', 'fecha_inscripcion', 'fecha_fin'];
    
   
        public function piso(){
        return $this -> hasmany('App\piso','idHospital');
    }  

    public function Paquetes(){
        return $this->belongsToMany(Paquete::class, 'Suscripcion', 'idHospital', 'idPaquete')->withPivot('fecha_inscripcion', 'fecha_fin');
    }

    
}
