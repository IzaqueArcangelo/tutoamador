<?php

namespace App\Http\Controllers\registro;

use App\Model\Aluno;
use App\Model\Login;
use DateTime;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class UsuarioController extends Controller
{
    public function cadastroAluno(){
        return view('registro.aluno');
    }

    public function salvarAluno(Request $request){
        $status = false;
        $form = $request->except('_token');
        $aluno = new Aluno();
        $login = new Login();

        $aluno->nome = $form['nome'];
        $aluno->dataNascimento = $form['dataNascimento'];
        $aluno->CPF = $form['CPF'];
        $aluno->sexo = $form['sexo'];



        $login->nomeUsuario = $form['nomeUsuario'];
        $login->senha = bcrypt($form['senha']);
        $login->email = $form['email'];
        $login->dataCadastro = new DateTime();

        $login->save();
        $aluno->login()->associate($login);
        $status = $aluno->save();
        // Cadastro com sucesso.
        if ($status) {
            return redirect()
                ->back()
                ->with('status', 'O Cadastro do usuário foi efetuado com sucesso!');
        }
    }

    public function cadastroProfessor(){
        return view('registro.professor');
    }

    public function salvarProfessor(Request $request){
        return view('registro.aluno');
    }

    public function editar(){
        return view('perfil.aluno');
    }
}

