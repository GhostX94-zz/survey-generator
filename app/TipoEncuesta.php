<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoEncuesta extends Model
{
   protected $table = "tipoEncuesta";
   protected $fillable=['nombre'];
   protected $primaryKey="idEncuesta";
}
