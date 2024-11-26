<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    //
    public function index(){
        return view('inicio.vista_inicio');
    }

    public function actual(){
        return view('actual.vista_actual');
    }

    public function archivo(){
        return view('archivos.vista_archivo');
    }

    public function aviso(){
        return view('avisos.vista_aviso');
    }

    public function sobreLaRevista(){
        return view('acercade.vista_sobreLaRevista');
    }

    public function envio(){
        return view('envios.vista_envio');
    }

    public function login(){
        return view('usuarios.vista_login');
    }

    public function registro(){
        return view('usuarios.vista_register');
    }
}
