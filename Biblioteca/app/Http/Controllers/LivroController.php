<?php

namespace App\Http\Controllers;

use App\Models\Livro;
use Illuminate\Http\Request;

class LivroController extends Controller
{
    /**
     * Exibe uma lista de livros
     * Display a listing of the resource.
     */
    public function index()
    {
        $livros = Livro::all();
        return view('dashboard.livros.index', compact('livros'));
    }

    /**
     * Mostra o formulário para criar um novo livro
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.livros.create');
    }

    /**
     * Salva um novo livro no banco de dados
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dados = $request->validate([
            'titulo' => 'required|max:100',
            'autor' => 'required',
            'categoria' => 'required',
            'disponibilidade' => 'required|in:disponivel,indisponivel'
        ]);
        Livro::create($dados);

        return redirect()->route('livros.index')->with('success', 'Livro cadastrado com sucesso!');
    }

    /**
     * Exibe os detalhes de um livro específico
     * Display the specified resource.
     */
    public function show(Livro $livro)
    {
        return view('dashboard.livros.show', compact('livro'));
    }

    /**
     * Mostra o formulário para editar um livro existente
     * Show the form for editing the specified resource.
     */
    public function edit(Livro $livro)
    {
        return view('dashboard.livros.edit', compact('livro'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Livro $livro)
    {
        $dados = $request->validate([
            'titulo' => 'required',
            'autor' => 'required',
            'categoria' => 'required',
            'disponibilidade' => 'required|boolean',
        ]);
        $livro->update($dados);

        return redirect()->route('livros.index')
            ->with('success', 'Livro atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Livro $livro)
    {
        $livro->delete($livro);
        return redirect()->route('dashboard.livros.index')->with('success', 'Livro deletado com sucesso!');
    }
}
