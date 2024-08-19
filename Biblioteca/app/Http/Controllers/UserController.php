<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Exception;

class UserController extends Controller
{
    // Exibir formulário de login
    public function showLoginForm()
    {
        return view('login');
    }

    // Processar o login do usuário
    public function login(Request $request)
    {

        // Validações para o login
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // Tenta autenticar com o guard 'user'
        if (Auth::guard('user')->attempt($credentials)) {
            $request->session()->regenerate(); // Regenera a sessão para evitar fixação de sessão
            return redirect()->intended('/dashboard');
        } else{
            dd(Auth::guard('user')->attempt());
        }

        // Se falhar, retorna com erro
        return back()->withErrors([
            'email' => 'Email ou senha inválidos.',
        ])->onlyInput('email');
    }


    // Exibir o formulário de registro
    public function showRegisterForm()
    {
        return view('cadastro');
    }


    // Processar o registro de um novo usuário
    public function register(Request $request)
    {
        try {
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255',
                'password' => 'required|string|min:3',
            ]);

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            Auth::login($user);

            if ($user) {
                return redirect('/dashboard');
            }
        } catch (Exception $error) {
            return back()->withErrors('Ocorreu um erro ' . $error->getMessage());
        }
    }


    // Realizar o logout do usuário
    public function logout(Request $request)
    {
        Auth::guard('user')->logout(); // Logout do guard 'user'
        $request->session()->regenerateToken(); // Regenera o token da sessão


        $request->session()->invalidate();
        $request->session()->regenerate(); // Invalida a sessão


        return redirect('/');
    }
}
