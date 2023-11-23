<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $messages = [
            'password.required' => 'El campo contraseña es obligatorio.',
            'password.min' => 'La contraseña debe tener al menos :min caracteres.',
            'password.regex' => 'La contraseña debe contener al menos una letra mayúscula y una minúscula.',
        ];
    
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => [
                'required',
                'string',
                'min:5',             // debe tener al menos 5 caracteres
                'regex:/[a-z]/',      // debe contener al menos una letra minúscula
                'regex:/[A-Z]/',      // debe contener al menos una letra mayúscula
            ],
        ], $messages);

        $user = User::create(request(['name', 'email', 'password']));

        auth()->login($user);
        return back()->with('Info','Usuario Creado correctamente') && redirect()->to('/Dashboard');
        // return redirect()->to('/');
    }

}