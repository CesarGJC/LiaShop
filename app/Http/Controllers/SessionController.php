<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SessionController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store()
    {
        if (auth()->attempt(request(['email', 'password'])) == false) {
            return back()->withErrors([
                'message' => 'El correo o password es incorrecto, intenta nuevamente'
            ]);
        }
        return redirect()->to('/Dashboard');
    }

    public function destroy()
    {
        auth()->logout();
        return redirect()->to('/');
    }
}