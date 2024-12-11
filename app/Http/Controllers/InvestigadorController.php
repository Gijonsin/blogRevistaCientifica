<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Investigador;
use Illuminate\Support\Facades\Auth;

class InvestigadorController extends Controller
{
    public function create()
    {
        return view('usuarios.vista_informacion');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:100',
            'apellido' => 'required|string|max:100',
            'universidad' => 'required|string|max:150',
            'orcid' => 'required|url',
        ]);

        Investigador::create([
            'NOMBRE_INVESTIGADORES' => $request->nombre,
            'APELLIDO_INVESTIGADORES' => $request->apellido,
            'UNIVERSIDAD_INVESTIGADORES' => $request->universidad,
            'ORCID_INVESTIGADORES' => $request->orcid,
            'ID_USERS' => Auth::id(),
        ]);

        return redirect(route('admin.archivos.index'));
    }
}
