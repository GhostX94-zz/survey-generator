<?php

namespace App\Http\Controllers\Encuesta;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Illuminate\Support\Collection;
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
       /* $preguntas = DB::table('preguntas as p')
        ->select('p.idPregunta','p.nombre','p.titulo','p.tipoPregunta','o.id','o.opcion','o.idPregunta as preguntaID')
        ->join('opciones as o','p.idPregunta','=','o.idPregunta')
        ->where('p.titulo','=',$title)
        ->orderBy('o.opcion', 'asc')
        ->groupBy('p.idPregunta','p.nombre','p.titulo','p.tipoPregunta','o.id','o.opcion','preguntaID')
        ->get();*/

        $tipoEncuesta = DB::table('preguntas')
        ->select('tipoPregunta')
        ->where('titulo','=',$title)
        ->groupBy('tipoPregunta')
        ->pluck('tipoPregunta')[0];

        $totalPreguntas = DB::table('preguntas')
        ->where('titulo','=',$title)
        ->count();

        $totalOpciones = DB::table('opciones')->count();

        $radiobuttons = DB::table('opciones')
        ->select('opcion','idPregunta')
        //->groupBy('opcion','idPregunta')
        ->get();


        $list=array();
        $preguntas = DB::table('preguntas as p')
        ->select('p.idPregunta','p.nombre','p.titulo','p.tipoPregunta')
        //->join('opciones as o','p.idPregunta','=','o.idPregunta')
        ->where('p.titulo','=',$title)
        //->groupBy('p.idPregunta','p.nombre','p.titulo','p.tipoPregunta','o.id','o.opcion','preguntaID')
        ->get();

       /* $collection = Collection::make($preguntas);
        //$ok =  $collection->toJson();
        $idP = 0;
        for($i= 0; $i < $totalOpciones;$i++){
            $idP = $collection[$i]->idPregunta;

            if($collection[$i]->idPregunta ==  $idP){

                $opcion  = $collection[$i]->opcion;
                array_push($list,$collection[$i]);
                array_push($list,$opcion);
                $idP = 0;
            }else{
                $idP = $collection[$i]->idPregunta;
            }
            
             //$idP = 0;
        }*/
       //   $preguntas =  $list;



        
        
        
        return view('respuestas.respuestas',compact('preguntas','titulo','totalPreguntas','genero','tipoEncuesta','conteo','radiobuttons'));
    }
}
