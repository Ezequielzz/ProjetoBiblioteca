<?php

namespace App\Http\Controllers;

use App\Models\Emprestimo;
use App\Models\Livro;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmprestimoController extends Controller
{

    public function add(Livro $livro)
    {
        // Atualizar a disponibilidade do livro para indisponível
        $livro->update(['disponibilidade' => 'indisponivel']);

        $emprestimo = Emprestimo::create([
            'id_usuario' => Auth::id(), 
            'id_livro' => $livro->id,
            'data_emprestimo' => now(), // Adiciona a data atual
            'data_devolucao' => now()->addWeek(), // Adiciona 7 dias
            'status' => 'em andamento'
        ]);

        return redirect()->route('livros.show', $emprestimo->id)
            ->with('success', "Emprestimo adicionado ao livro");
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Verifica se o usuário é um bibliotecário
        if (Auth::user()->tipo === 'bibliotecario') {
            // Bibliotecário pode ver todos os empréstimos
            $emprestimos = Emprestimo::with('livro')->get();
        } else {
            // Usuário comum só vê seus próprios empréstimos
            $emprestimos = Emprestimo::with('livro')->where('id_usuario', Auth::id())->get();
        }

        return view('dashboard.emprestimos.index', compact('emprestimos'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $emprestimo = Emprestimo::with('livro')->findOrFail($id);
        return view('dashboard.emprestimos.show', compact('emprestimo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $emprestimo = Emprestimo::findOrFail($id);

        return view('dashboard.emprestimos.edit', compact('emprestimo'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $emprestimo = Emprestimo::findOrFail($id);

        $dados = $request->validate([
            'status' => 'required|in:pendente,em andamento,devolvido,atrasado',
        ]);

        $emprestimo->update($dados);

        return redirect()->route('emprestimos.index')
            ->with('success', 'Empréstimo atualizado com sucesso!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Livro $emprestimo)
    {
        $emprestimo->delete($emprestimo);
        return redirect()->route('dashboard.emprestimos.index')->with('success', 'Livro deletado com sucesso!');
    }

    /**
     * Devolve um livro.
     */
    public function devolver($id)
    {
        $emprestimo = Emprestimo::findOrFail($id);
        $emprestimo->update(['status' => 'devolvido']);

        // Atualiza a disponibilidade do livro para disponível
        $livro = $emprestimo->livro;
        $livro->update(['disponibilidade' => 'disponivel']);

        return redirect()->route('emprestimos.index')
            ->with('success', 'Livro devolvido com sucesso!');
    }
}
