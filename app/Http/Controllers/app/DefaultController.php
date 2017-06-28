<?php

namespace App\Http\Controllers\app;

use App\Model\Login;
use DateTime;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DefaultController extends Controller
{
    public function index(){
        $login = new Login();
        $login->create([
            'nomeUsuario' =>  'Arcangelo',
            'email' =>  'izaque_arcangelo1@hotmail.com',
            'senha' =>  '123',
            'dataCadastro' =>  new DateTime(),
        ]);
        return "OK";
    }
}
