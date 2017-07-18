<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'id';

    public function tutoriais(){
        return $this->belongsToMany('App\Model\Tutorial');
    }
}
