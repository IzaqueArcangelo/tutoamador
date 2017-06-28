<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'nomeUsuario',
        'email',
        'senha',
        'dataCadastro',
        'dataAtualizacao',
    ];


}
