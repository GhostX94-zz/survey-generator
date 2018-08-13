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

    public function delete($idUsuario){
        \App\User::where('id', '=', $idUsuario)->delete();
        
        return redirect('verUsuario');
    }

    public function update(Request $request){
        $nombre = $request->input("nombre");
        $correo = $request->input("correo");
        $id = $request->input("id");

        $user = \App\User::find($id);
        $user->name = $nombre;
        $user->email = $correo;
        $user->save();

        return redirect('verUsuario');
       
    }

    public function edit($idUsuario){
        $usuarios = DB::table('users')->get();
        $user = \App\User::find($idUsuario);
        return view('usuarios.actualizarUsuario', compact('user'));
    }
}
