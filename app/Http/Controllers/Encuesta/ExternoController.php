<?php

namespace App\Http\Controllers\Encuesta;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ExternoController extends Controller
{
    public function getEncuestas(){
        return view('encuesta.verEncuestas');
    }
}
