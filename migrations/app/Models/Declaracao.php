<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Declaracao extends Model
{
    use SoftDeletes;

    protected $table = 'declaracoes';
    protected $fillable = [
        'hash',
        'data',
        'aluno_id',
        'comprovante_id',
    ];
}
