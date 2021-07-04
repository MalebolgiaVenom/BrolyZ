<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    //se va unir tabla de base de datos con filas de los campos en el Modelo
    protected $table ="Contactos";
    protected $fillable =['id','nombre','email','texto'];
}
