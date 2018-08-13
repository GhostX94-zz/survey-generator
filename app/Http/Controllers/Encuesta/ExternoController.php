<?php

namespace App\Http\Controllers\Encuesta;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class ExternoController extends Controller
{
    public function getEncuestas(){

        $encuestas = DB::table('preguntas')->orderBy('titulo', 'asc')
        ->groupBy('titulo')->pluck('titulo');
        
        
        return view('encuesta.verEncuestas',compact('encuestas'));
    }


    public function getEncuestaByid($titulo){
        $title =  trim($titulo);
        $preguntas = DB::table('preguntas')
        ->where('titulo','=',$title)
        ->get();

        $totalPreguntas = DB::table('preguntas')
        ->where('titulo','=',$title)
        ->count();

        return view('respuestas.respuestas',compact('preguntas','titulo','totalPreguntas'));
    }
}
