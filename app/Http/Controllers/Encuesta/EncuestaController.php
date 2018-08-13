<?php

namespace App\Http\Controllers\Encuesta;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Barryvdh\DomPDF\Facade as PDF;
use DB;
use Input;

class EncuestaController extends Controller
{
      public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $tipoEncuestas = DB::table('tipoEncuesta')->get();
        
        return view('_Layout',compact('tipoEncuestas'));
    }

    public function getPreguntasByEncuestas($tipoPregunta){
        $pregutnas = DB::table('preguntas')->where('tipoPregunta', $tipoPregunta)->get();
        return $pregutnas;
    }

    public function store(Request $request){

        $tipoEncuestas = DB::table('tipoEncuesta')->get();
        $preguntasAbiertas = $request->input("abierta");
        $preguntasCerradas = $request->input("cerrada");
        $preguntasMixtas = $request->input("mixta");
        $titulo = $request->input('titulo');
        $tipoEcuesta = $request->input("tipoEncuesta");
        
        switch($tipoEcuesta){
            case "Abiertas":
                
            $limite = 15;
         for($var= 0; $var < $limite;$var++){
            DB::table('preguntas')->insert([
                'nombre' => $preguntasAbiertas[$var],
                'titulo' =>  $titulo,
                'tipoPregunta' => 'Abiertas'
            ]);
            }
            return view('_Layout',compact('tipoEncuestas'));
            break;
            case "Cerradas":
            
            $limite = 15;
            for($var= 0; $var < $limite;$var++){
               DB::table('preguntas')->insert([
                   'nombre' => $preguntasCerradas[$var],
                   'titulo' =>  $titulo,
                   'tipoPregunta' => 'Cerradas'
               ]);
               }
               return view('_Layout',compact('tipoEncuestas'));
            break;
            case "Mixtas":
            $limite = 15;
         for($var= 0; $var < $limite;$var++){
            DB::table('preguntas')->insert([
                'nombre' => $preguntasMixtas[$var],
                'titulo' =>  $titulo,
                'tipoPregunta' => 'Mixtas'
            ]);
            }
            return view('_Layout',compact('tipoEncuestas'));
            break;
        }
    }

   

    public function ajaxRequestPost()
    {
        $input = request()->all();
        return response()->json(['success' => 'Got Simple Ajax Request.']);
    }

}
