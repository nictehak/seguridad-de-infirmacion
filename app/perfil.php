<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class perfil extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'perfil';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'idPerfil';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idPerfil', 'nombre', 'slug', 'descripcion'];

      public function usuarios(){
        return $this -> hasmany('App\User','idPerfil');
    }  

    
}
