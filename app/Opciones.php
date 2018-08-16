<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Opciones extends Model
{
    protected $table = "opciones";
    protected $fillable = ['opcion','idPregunta'];
    protected $primaryKey = "id";
}
