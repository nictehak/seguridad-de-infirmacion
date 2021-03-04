<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


use Caffeinated\Shinobi\Traits\ShinobiTrait;

class Doctor extends Model
{
    use ShinobiTrait;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'doctor';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'idDoctor';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idDoctor', 'nombre', 'apellidos', 'telefono', 'email', 'idEspecialidad'];


    public function Especialidad(){
        return $this -> belongsto('App\Especialidad','idEspecialidad');
    }
    
}
