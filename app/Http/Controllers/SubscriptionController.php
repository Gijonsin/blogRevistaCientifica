<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SubscriptionController extends Controller
{
    public function store(Request $request)
    {
        // Validar los datos
        $request->validate([
            'email' => 'required|email|unique:subscribers'
        ]);

        // Crear un nuevo suscriptor
        User::create($request->all());

        return redirect()->back()->with('message', '¡Gracias por suscribirte!');
    }
}
