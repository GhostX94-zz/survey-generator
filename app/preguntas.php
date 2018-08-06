<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class preguntas extends Model
{
    protected $table = "preguntas";
    protected $fillable = ['nombre','titulo','tipoPregunta'];
    protected $primaryKey = "idPregunta";
}
