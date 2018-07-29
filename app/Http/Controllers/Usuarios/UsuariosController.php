<?php

namespace App\Http\Controllers\Usuarios;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Log;

class UsuariosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('usuarios.index');
    }

    public function verUsuarios(){

        $usuarios = DB::table('users')->get();
        return view('usuarios.verUsuario',compact('usuarios'));
        
    }
}
