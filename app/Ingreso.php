<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingreso extends Model
{
    protected $table='ingresos';
    
protected $fillable=['descripcion','monto','fecha'];
}
