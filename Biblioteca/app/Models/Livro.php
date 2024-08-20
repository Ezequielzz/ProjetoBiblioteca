<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
