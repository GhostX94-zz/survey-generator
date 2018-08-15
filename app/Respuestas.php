<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Respuestas extends Model
{
    protected $table = "respuestas";
    protected $fillable = ['genero','titulo','tipoPregunta','respuesta','idPregunta'];
    protected $primaryKey = "idRespuesta";
}
