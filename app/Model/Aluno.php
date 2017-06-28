<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    public $timestamps = false;

    public function login(){
        return $this->belongsTo(Login::class, 'id_login', 'id');
    }
}
