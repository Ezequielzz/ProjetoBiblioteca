<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Livro extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = 'livros';

    protected $fillable = [
        'titulo',
        'autor',
        'categoria',
        'disponibilidade'
    ];

    // Relacionamento de um Livro com vários empréstimos
    public function emprestimos(): HasMany
    {
        return $this->hasMany(Emprestimo::class, 'id_livro');
    }
}
