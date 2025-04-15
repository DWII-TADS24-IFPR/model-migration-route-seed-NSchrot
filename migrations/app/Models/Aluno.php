<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    use SoftDeletes;

    protected $table = 'alunos';

    protected $fillable = [
        'nome',
        'cpf',
        'email',
        'senha',
        'user_id',
        'curso_id',
        'turma_id',
    ];
}
