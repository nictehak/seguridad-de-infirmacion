<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PerfilPermiso extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'perfilpermisos';

    /**
    * The database primary key value. 
    *
    * @var string
    */
    protected $primaryKey = 'idPerfilPermisos';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idPerfilPermisos', 'idPerfil', 'idPermisos'];

    public function perfil(){
        return $this -> belongsTo('App\Perfil','idPerfil');
    }

    public function permisos(){
        return $this -> belongsTo('App\Permiso','idPermisos');
    }

    
}
