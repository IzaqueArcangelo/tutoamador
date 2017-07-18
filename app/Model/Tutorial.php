<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Tutorial extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'id';

    public function autor(){

    }

    public function tipo(){

    }

    public function categorias(){
        return $this->belongsToMany('App\Model\Categoria', 'categorias_tutoriais','id_tutorial','id_categoria');
    }
}
