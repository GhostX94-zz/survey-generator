<?php

namespace App\Http\Controllers\Encuesta;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Barryvdh\DomPDF\Facade as PDF;
use DB;
use Illuminate\Support\Facades\Input;
use ConsoleTVs\Charts\Classes\Chartjs\Chart;



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
        $arreglo = $request->input("radios2");
        
        $valorEntradas = count($arreglo);
        

        
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
               $id= DB::table('preguntas')->insertGetId([
                   'nombre' => $preguntasCerradas[$var],
                   'titulo' =>  $titulo,
                   'tipoPregunta' => 'Cerradas'
               ]);
                $numeroInputs = explode('-', $preguntasCerradas[$var])[0];
               for($i= 0; $i < $numeroInputs;$i++){
                   $tipoId = explode('-', $arreglo[$i])[0];
                   $valor = explode('-', $arreglo[$i])[1];
                   if($tipoId == "p1"){
                    DB::table('opciones')->insert([
                        'opcion' => $valor,
                        'idPregunta' =>  $id
                    ]);
                    }

                    if($tipoId == "p1"){
                        DB::table('opciones')->insert([
                            'opcion' => $valor,
                            'idPregunta' =>  $id
                        ]);
                        }

                        if($tipoId == "p2"){
                            DB::table('opciones')->insert([
                                'opcion' => $valor,
                               'idPregunta' =>  $id
                           ]);
                           }                        
                           if($tipoId == "p3"){
                               DB::table('opciones')->insert([
                                   'opcion' => $valor,
                                   'idPregunta' =>  $id
                               ]);
                               }                        
                               if($tipoId == "p4"){
                                   DB::table('opciones')->insert([
                                       'opcion' => $valor,
                                       'idPregunta' =>  $id
                                   ]);
                                   }                        
                                   if($tipoId == "p5"){
                                       DB::table('opciones')->insert([
                                           'opcion' => $valor,
                                           'idPregunta' =>  $id
                                       ]);
                                       }

                                        if($tipoId == "p6"){
                            DB::table('opciones')->insert([
                                'opcion' => $valor,
                                'idPregunta' =>  $id
                            ]);
                            }

                            if($tipoId == "p7"){
                                DB::table('opciones')->insert([
                                    'opcion' => $valor,
                                    'idPregunta' =>  $id
                                ]);
                                }

                                if($tipoId == "p8"){
                                    DB::table('opciones')->insert([
                                        'opcion' => $valor,
                                        'idPregunta' =>  $id
                                    ]);
                                    }

                                    if($tipoId == "p9"){
                                        DB::table('opciones')->insert([
                                            'opcion' => $valor,
                                            'idPregunta' =>  $id
                                        ]);
                                        }

                                   if($tipoId == "p10"){
                                       DB::table('opciones')->insert([
                                           'opcion' => $valor,
                                           'idPregunta' =>  $id
                                       ]);
                                       }

                                       if($tipoId == "p11"){
                                           DB::table('opciones')->insert([
                                               'opcion' => $valor,
                                               'idPregunta' =>  $id
                                           ]);
                                           }

                                           if($tipoId == "p12"){
                                               DB::table('opciones')->insert([
                                                   'opcion' => $valor,
                                                   'idPregunta' =>  $id
                                               ]);
                                               }

                                               if($tipoId == "p13"){
                                                   DB::table('opciones')->insert([
                                                       'opcion' => $valor,
                                                       'idPregunta' =>  $id
                                                   ]);
                                                   }

                                                   if($tipoId == "p14"){
                                                       DB::table('opciones')->insert([
                                                           'opcion' => $valor,
                                                           'idPregunta' =>  $id
                                                       ]);
                                                       }
                                                       if($tipoId == "p15"){
                                                        DB::table('opciones')->insert([
                                                            'opcion' => $valor,
                                                            'idPregunta' =>  $id
                                                        ]);
                                                        }
                                      }

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

    public function getEncuestasCerradas(){

        $encuestas = DB::table('preguntas')
        ->where('tipoPregunta','=','Cerradas')
        ->select('titulo','tipoPregunta','idPregunta')
        ->orderBy('titulo', 'asc')
        ->groupBy('titulo','tipoPregunta','idPregunta')
        ->get();
        
        return view('encuesta.verRespuestas',compact('encuestas'));
        
    }


    public function getGrafica(){

        $data = DB::table('preguntas')
        ->where('tipoPregunta','=','Cerradas')
        ->select('titulo','tipoPregunta','idPregunta')
        ->orderBy('titulo', 'asc')
        ->groupBy('titulo','tipoPregunta','idPregunta')
        ->get();
        
        $chart =  \Charts::create('pie', 'highcharts')    
        ->title("Resumen de Presupuestos Realizados")
        ->labels(['Preguntas Cerradas'])
        ->values([78,10,20])
        ->dimensions(1000,500)
        ->responsive(false);




        
    return view('encuesta.grafica', ['chart' => $chart, "datas" => $data]);
    }
    public function ajaxRequestPost()
    {
        $input = request()->all();
        return response()->json(['success' => 'Got Simple Ajax Request.']);
    }

    public function verPreguntas(){
        $encuestas = DB::table('preguntas')
        ->where('tipoPregunta','=','Cerradas')
        ->select('titulo')
        ->orderBy('titulo', 'asc')
        ->groupBy('titulo')
        ->get();
        
        return view('encuesta.verPreguntas',compact('encuestas'));
    }


    /*EDITAR ENCUESTA*/
    public function update(Request $request){

        //return redirect('home');
        $tipoEncuestas = DB::table('tipoEncuesta')->get();
        $preguntasCerradas = $request->input("cerrada");
        $titulo = $request->input('titulo');
        $tipoEcuesta = $request->input("tipoEncuesta");
        $arreglo = $request->input("radios2");
        
        $valorEntradas = count($preguntasCerradas);

        for($i= 0; $i < $valorEntradas;$i++){
             DB::table('preguntas')
             ->where('idPregunta','=',$i)
             ->update([
                 'nombre' => $preguntasCerradas[$i],
             ]);
             
            }

       /* $user = \App\preguntas::find($id);
        $user->name = $nombre;
        $user->email = $correo;
        $user->save();*/

        return redirect('home');
       
    }
    public function edit($titulo){
        $title = trim($titulo);
        $preguntas = DB::table('preguntas')->where('titulo','=',$title)->get();
        return view('encuesta.actualizarEncuesta', compact('preguntas'));
    }
    /*ELIMINAR ENCUESTA*/
    public function delete($titulo){

        $title = trim($titulo);
        $idPreguntas = DB::table('preguntas')->where('tipoPregunta','=',"Cerradas")->pluck('idPregunta');
        $count = DB::table('preguntas')->where('tipoPregunta','=',"Cerradas")->count();

        for($var= 0; $var < $count;$var++){

            $op = \App\Opciones::find($idPreguntas[$var]);
            \App\Opciones::where('idPregunta', '=', $idPreguntas[$var])->delete();
            \App\Respuestas::where('idPregunta', '=', $idPreguntas[$var])->delete();
            \App\preguntas::where('idPregunta', '=', $idPreguntas[$var])->delete();
        }
        
        
        
        return redirect('home');
    }

}

