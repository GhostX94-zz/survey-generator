<?php

namespace App\Http\Controllers\Encuesta;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class ExternoController extends Controller
{

    public function store(Request $request){
        $preguntasAbiertas = $request->input("abierta");
        $preguntasCerradas = $request->input("cerrada");
        $preguntasMixtas = $request->input("mixta");
        $idPreguntas = $request->input("idPregunta");
        $genero = $request->input("genero");
        $titulo = $request->input("titulo");
        $tipoEncuesta = $request->input("tipoEncuesta");

        
        
        switch($tipoEncuesta){
            case "Abiertas":
                
            $limite = 15;
         for($var= 0; $var < $limite;$var++){
            DB::table('respuestas')->insert([
                'genero'=>$genero,
                'titulo' =>  $titulo,
                'respuesta' => $preguntasAbiertas[$var],
                'idPregunta' =>  $idPreguntas[$var],
                'tipoPregunta' => $tipoEncuesta
            ]);
            }
            return redirect('login');
            break;
            case "Cerradas":
            
            $limite = 15;
            for($var= 0; $var < $limite;$var++){
                DB::table('respuestas')->insert([
                    'genero'=>$genero,
                    'titulo' =>  $titulo,
                    'respuesta' => $preguntasCerradas[$var],
                    'idPregunta' =>  $idPreguntas[$var],
                    'tipoPregunta' => $tipoEncuesta
                ]);
               }
               return redirect('login');
            break;
            case "Mixtas":
            $limite = 15;
         for($var= 0; $var < $limite;$var++){
            DB::table('respuestas')->insert([
                'genero'=>$genero,
                'titulo' =>  $titulo,
                'respuesta' => $preguntasMixtas[$var],
                'idPregunta' =>  $idPreguntas[$var],
                'tipoPregunta' => $tipoEncuesta
            ]);
            }
            return redirect('login');
            break;
        }



    }


    public function getEncuestas(){

        $encuestas = DB::table('preguntas')
        ->select('titulo','tipoPregunta')
        ->orderBy('titulo', 'asc')
        ->groupBy('titulo','tipoPregunta')
        ->get();
        //->pluck('titulo');

        
        $genero = array("Hombre","Mujer");
        
        
        return view('encuesta.verEncuestas',compact('encuestas','genero'));
    }


    public function getEncuestaByid(Request $request){

        $genero = $request->input("genero");
        $titulo = $request->input("titulo");
        
        $opciones = DB::table('opciones as o')
        ->join('preguntas as p','o.idPregunta','=','p.idPregunta')
        ->get();
        
        $title =  trim($titulo);
        $count = $preguntas = DB::table('preguntas as p')->count();
        $preguntas = DB::table('preguntas as p')
        ->select('p.idPregunta','p.nombre','p.titulo','p.tipoPregunta','o.id','o.opcion','o.idPregunta as preguntaID')
        ->join('opciones as o','p.idPregunta','=','o.idPregunta')
        ->where('p.titulo','=',$title)
        ->orderBy('o.opcion', 'asc')
        ->groupBy('p.idPregunta','p.nombre','p.titulo','p.tipoPregunta','o.id','o.opcion','preguntaID')
        ->get();

        $tipoEncuesta = DB::table('preguntas')
        ->select('tipoPregunta')
        ->where('titulo','=',$title)
        ->groupBy('tipoPregunta')
        ->pluck('tipoPregunta')[0];

        $totalPreguntas = DB::table('preguntas')
        ->where('titulo','=',$title)
        ->count();
        
        
        return view('respuestas.respuestas',compact('preguntas','titulo','totalPreguntas','genero','tipoEncuesta'));
    }
}
