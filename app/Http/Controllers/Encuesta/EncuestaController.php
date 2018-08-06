<?php

namespace App\Http\Controllers\Encuesta;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Barryvdh\DomPDF\Facade as PDF;
use DB;

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

    public function ajaxRequestPost()
    {
        $input = request()->all();
        return response()->json(['success' => 'Got Simple Ajax Request.']);
    }

}
