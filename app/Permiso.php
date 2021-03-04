<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permiso extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'permisos';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'idPermisos';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idPermisos', 'nombre', 'descripcion'];

    public function Perfilpermisos(){
        return $this -> hasmany('App\PerfilPermiso','idPermisos');
    } 
}
