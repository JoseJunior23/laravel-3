<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Mostra pagina de login
     */
    public function signin()
    {
        return view('signin');
    }
    /**
     * Mostra a pagina de registro
     */
    public function signup()
    {
        return view('signup');
    }
    /**
     * realiza login do usuario
     */

    public function login(Request $request)
    {
        $input = $request->only(
            'email',
            'password'
        );

        if (auth()->attempt($input)) {
            $request->session()->regenerate();
            return redirect('/products');
        }
        return back()->withError('Login incorreto');
    }

    /**
     * criar um usuario
     */
    public function store(Request $request)
    {
        $input = $request->only(
            'name',
            'email',
            'password'
        );
        $input['password'] = bcrypt($input['password']);
        User::create($input);

        return redirect('/')->withSucess('Usuário criado');
    }
}
