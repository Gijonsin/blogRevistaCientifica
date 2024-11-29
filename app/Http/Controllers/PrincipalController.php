<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Revista;

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
        $revistas = Revista::all();
        
        // Pasar las revistas a la vista
        return view('archivos.vista_archivo', compact('revistas'));
        //return view('archivos.vista_archivo');
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

    public function directorio(){
        return view('acercade.vista_directorio');
    }

    public function comite(){
        return view('acercade.vista_comite');
    }

    public function revisores(){
        return view('acercade.vista_revisores');
    }

    public function webmaster(){
        return view('acercade.vista_webmaster');
    }

    public function editor(){
        return view('acercade.vista_editor');
    }

    public function indexa(){
        return view('acercade.vista_indexa');
    }

    public function declaracion_privacidad(){
        return view('acercade.vista_declaracion_privacidad');
    }

    public function contacto(){
        return view('acercade.vista_contacto');
    }

    public function mostrarRevista()
    {
        // Obtener todas las revistas
        $revistas = Revista::all();
        
        // Pasar las revistas a la vista
        return view('archivos.vista_archivo', compact('revistas'));
    }
}

