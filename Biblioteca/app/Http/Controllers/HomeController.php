<?php

namespace App\Http\Controllers;

use App\Models\Livro;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        // Retornando os Livros Cadastrados para a Home
        $livros = Livro::latest()->take(3)->get();
        return view('home', compact('livros'));
    }
}
