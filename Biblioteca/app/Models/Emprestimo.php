<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Emprestimo extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = 'emprestimos';

    protected $fillable = [
        'id_usuario',
        'id_livro',
        'data_emprestimo',
        'data_devolucao',
        'status'
    ];

    // Relacionamento com o usuário
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    // Relacionamento com o livro
    public function livro(): BelongsTo
    {
        return $this->belongsTo(Livro::class, 'id_livro');
    }
}
