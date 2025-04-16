<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use SoftDeletes;

    protected $table = 'categorias';

    protected $fillable = [
        'nome',
        'maximo_horas',
        'curso_id',
    ];

    public function curso()
    {
        return $this->belongsTo(Curso::class);
    }

}
