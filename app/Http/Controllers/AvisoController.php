<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aviso;
use Illuminate\Support\Facades\Auth;

class AvisoController extends Controller
{
    public function create()
    {
        return view('avisos.vista_aviso_enviar');
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'contenido' => 'required|string',
        ]);

        $aviso = Aviso::create([
            'TITULO_AVISOS' => $request->titulo,
            'CONTENIDO_AVISOS' => $request->contenido,
            'ID_USERS' => Auth::id(),
        ]);

        if ($aviso) {
            return redirect()->back()->with('message', '¡Aviso subido con éxito!');
        } else {
            return redirect()->back()->with('error', 'Hubo un problema al subir el aviso.');
        }
    }

    public function show($id)
    {
        $aviso = Aviso::findOrFail($id);
        return view('avisos.vista_avisos_detalle', compact('aviso'));
    }

    public function index()
    {
        // Obtiene todos los avisos ordenados por fecha de creación, opcionalmente
        // $avisos = Aviso::orderBy('CREADO_AVISOS', 'desc')->get();
        $avisos = Aviso::orderBy('CREADO_AVISOS', 'desc')->paginate(10);

        return view('avisos.vista_aviso', compact('avisos'));
    }
}
