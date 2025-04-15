<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Comprovante extends Model
{
    use SoftDeletes;
    protected $table = 'comprovantes';

    protected $fillable = [
        'horas',
        'atividade',
        'categoria_id',
        'aluno_id',
        'user_id',
    ];
}
