<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Investigador;

class LoginController extends Controller
{
    public function iniciar_sesion()
    {
        return view('usuarios.vista_login');
    }

    public function registrarse()
    {
        return view('usuarios.vista_register');
    }

    public function register(Request $request)
    {
        // Validar los datos
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // Crear un nuevo usuario
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        // Crear el investigador
        Investigador::create([
            'NOMBRE_INVESTIGADORES' => $request->nombre,
            'APELLIDO_INVESTIGADORES' => $request->apellido,
            'UNIVERSIDAD_INVESTIGADORES' => $request->universidad,
            'ORCID_INVESTIGADORES' => $request->orcid,
            'ID_USERS' => $user->id,
        ]);

        Auth::login($user);
        return redirect(route('envios.vista_envio'));
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/actual');
    }

    // public function login(Request $request)
    // {
    //     $credentials = [
    //         'email' => $request->email,
    //         'password' => $request->password
    //     ];

    //     $remember = ($request->has('remember') ? true : false);

    //     if (Auth::attempt($credentials, $remember)) {
    //         $request->session()->regenerate();
    //         return redirect()->intended(route('envios.vista_envio'));
    //     }

    //     return back()->withErrors([
    //         'email' => 'Las credenciales proporcionadas no coinciden con nuestros registros.',
    //     ]);
    // }
    public function login(Request $request)
    {
        $login = $request->input('email');
        $password = $request->input('password');
        $remember = $request->has('remember');

        // Verifica si el login es un email o un nombre de usuario
        $fieldType = filter_var($login, FILTER_VALIDATE_EMAIL) ? 'email' : 'name';

        $credentials = [
            $fieldType => $login,
            'password' => $password,
        ];

        if (Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate();
            // return redirect()->intended(route('envios.vista_envio'));
            return redirect()->intended(route('admin.archivos.index'));
        }

        // return back()->withErrors([
        //     'message' => 'Las credenciales proporcionadas no coinciden con nuestros registros.',
        // ]);

        return redirect()->back()->with('error', 'El usuario o la contraseña son erroneas.');
    }
}
