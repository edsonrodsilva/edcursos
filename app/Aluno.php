<?php

namespace Edcursos;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    protected $table = 'alunos';
    public $timestamps = false;

    public function estados() {
        return $this->belongsTo('Edcursos\Aluno', 'estados_sigla', 'sigla');
    }
}
