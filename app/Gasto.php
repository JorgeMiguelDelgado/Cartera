<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gasto extends Model
{
protected $table='gastos';
protected $fillable=['descripcion','monto','fecha'];
}
