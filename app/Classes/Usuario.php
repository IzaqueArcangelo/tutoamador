<?php
/**
 * Created by PhpStorm.
 * User: Izaque
 * Date: 03/07/2017
 * Time: 13:38
 */

namespace App\Classes;


use App\Model\Login;
use Illuminate\Support\Facades\Auth;

class Usuario
{
    public function tipo(){
        $login = new Login();
        $tipo = "Aluno";

        $usuario = $login
            ->join('alunos', 'alunos.id_login', '=', 'logins.id')
            ->where('logins.id','=', Auth::user()->id)
            ->get();

        if($usuario->isEmpty()){
            $usuario = $login
                ->join('professors', 'professors.id_login', '=', 'logins.id')
                ->where('logins.id','=', Auth::user()->id)
                ->get();
            $tipo = "Professor";
            return $tipo;
        }else{
            return $tipo;
        }
    }

    public function getUsuario(){
        $login = new Login();
        $usuario = $login
            ->join('alunos', 'alunos.id_login', '=','logins.id')
            ->where('logins.id', '=', Auth::user()->id)
            ->first();
        if($usuario == null){
            $usuario = $login
                ->join('professors', 'professors.id_login', '=', 'logins.id')
                ->where('logins.id','=', Auth::user()->id)
                ->first();
            return $usuario;
        }
        return $usuario;
    }
}