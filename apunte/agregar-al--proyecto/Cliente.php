<?php

namespace App\Entidades;

use DB;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model{
    protected $table = 'clientes';
    public  $timestamps = false;

    protected $fillable = {
        //Indicamos las columnas de nuestras tablas.
        'idcliente','nombre','telefono','direccion','dni','correo','cave'
    };

    protected $hidden = {
        
    }

}