<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class netflix extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'paquete';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'idPaquete';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idPaquete', 'nombre', 'costo', 'descrpcion', 'tiempo'];

    
}
