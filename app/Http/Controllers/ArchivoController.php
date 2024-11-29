<?php

// namespace App\Http\Controllers;

// use App\Models\Archivo;
// use Illuminate\Http\Request;

// class ArchivoController extends Controller
// {
//     public function index()
//     {
//         // Obtener todas las revistas
//         $revistas = Archivo::all();

//         // Pasar las revistas a la vista
//         return view('archivos.vista_archivo', compact('revistas'));
//     }

//     public function show($id)
//     {
//         $revista = Archivo::with('articulos')->findOrFail($id); // Incluye los artículos relacionados
//         return view('revistas.detalle', ['revista' => $revista]);
//     }
// }

namespace App\Http\Controllers;

use App\Models\Archivo;
use Illuminate\Http\Request;

// class ArchivoController extends Controller
// {
//     // Mostrar todas las revistas con sus artículos asociados
//     public function index()
//     {
//         $revistas = Archivo::with('articulos')->get(); // Obtiene revistas con sus artículos
//         return view('archivos.vista_archivo', compact('revistas'));
//     }

//     // Mostrar una revista específica con sus artículos asociados
//     public function show($id)
//     {
//         $revista = Archivo::with('articulos')->findOrFail($id);
//         return view('archivos.vista_revista', compact('revista'));
//     }
// }

class ArchivoController extends Controller
{
    // Mostrar todas las revistas con sus artículos asociados
    public function index()
    {
        $archivos = Archivo::with('articulos')->paginate(5); // Obtiene revistas con sus artículos
        return view('archivos.vista_archivo', compact('archivos'));
    }

    // Mostrar una revista específica con sus artículos asociados
    public function show($id)
    {
        $archivo = Archivo::with('articulos')->findOrFail($id);
        return view('archivos.vista_revista', compact('archivo'));
    }

    public function detalleArticulo($id)
    {
        $articulo = Archivo::with('articulos')
            ->whereHas('articulos', function ($query) use ($id) {
                $query->where('articulos.ID_ARTICULOS', $id);
            })
            ->first()
            ->articulos
            ->where('ID_ARTICULOS', $id)
            ->first();
    
        if (!$articulo) {
            abort(404, 'Artículo no encontrado');
        }
    
        return view('archivos.vista_articulo', compact('articulo'));
    }
}
