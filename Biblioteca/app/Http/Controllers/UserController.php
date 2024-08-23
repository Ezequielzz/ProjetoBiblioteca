<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
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
        if (Auth::guard('web')->attempt($credentials)) {
            $request->session()->regenerate(); // Regenera a sessão para evitar fixação de sessão
        return redirect()->intended('/');
        } else {
            dd(Auth::guard('web')->attempt());
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
            // Valida os dados do formulário de registro
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255',
                'password' => 'required|string|min:3',
                'endereco' => 'required|string|max:255',
                'data_nascimento' => 'required|string'
            ]);

            // Converte a data de nascimento do formato 'd/m/Y' (dd/mm/aaaa) para um objeto Carbon
            $dataNascimento = \Carbon\Carbon::createFromFormat('d/m/Y', $request->data_nascimento);

            // Valida se a data de nascimento é anterior a hoje (ou seja, não permite datas futuras)
            if (!$dataNascimento || $dataNascimento->isFuture()) {
                // Se a data for inválida ou estiver no futuro, retorna com um erro personalizado
                return back()->withErrors(['data_nascimento' => 'A data de nascimento deve ser uma data válida e anterior a hoje.']);
            }

            // Converte a data para o formato 'Y-m-d' (aaaa-mm-dd), que é o formato padrão para o banco de dados
            $dataNascimentoFormatada = $dataNascimento->format('Y-m-d');

            // Cria o novo usuário no banco de dados usando os dados validados e a data formatada
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'endereco' => $request->endereco,
                'data_nascimento' => $dataNascimentoFormatada,
            ]);

            if ($user) {
                return redirect()->route('cadastro')->with('success', 'Usuário cadastrado com sucesso!');
            }
        } catch (Exception $error) {
            // Em caso de erro (por exemplo, erro de banco de dados), retorna com uma mensagem de erro
            return back()->withErrors('Ocorreu um erro ' . $error->getMessage());
        }
    }


    // Realizar o logout do usuário
    public function logout(Request $request)
    {
        Auth::guard('web')->logout(); // Logout do guard 'user'
        $request->session()->regenerateToken(); // Regenera o token da sessão


        $request->session()->invalidate();
        $request->session()->regenerate(); // Invalida a sessão


        return redirect('/');
    }
}
