<?php

namespace App\Http\Controllers\app;

use App\Facade\Usuario;
use App\Http\Controllers\Controller;
use App\Http\Requests\TutorialValidator;
use App\Model\Categoria;
use App\Model\Tipo;
use App\Model\Tutorial;
use DateTime;
use Illuminate\Support\Facades\Storage;

class TutorialController extends Controller
{
    //

    public function cadastrar()
    {
        $categorias = Categoria::all();
        $tipos = Tipo::all();
        return view('tutorial.cadastrar', compact('categorias', 'tipos'));
    }

    public function salvar(TutorialValidator $request)
    {
        $form = $request->except('_token');
        $tutorial = new Tutorial();
        $categoria = new Categoria();

        $titulo = $form['titulo'];
        $descricao = $form['descricao'];
        $codigo = $form['codigo'];
        $tipo = $form['tipo'];
        $valor = $form['valor'];
        $categorias = collect($form['categorias']);
        //$imagemCabecalho = $request->file('escolherImagemCabecalho')->store('imgTutorial');
        $imagemCabecalho = Storage::disk('public')->put('imgTutorial', $request->file('escolherImagemCabecalho'));
        $imagemExibicao = $request->file('escolherImagemExibicao')->store('imgTutorial');



        $postagem = $form['postagem'];
        $autor = Usuario::getUsuario();
        $dataPublicacao = new DateTime();

        $tutorial->nome = $titulo;
        $tutorial->descricao = $descricao;
        $tutorial->codigoTutorial = $codigo;
        $tutorial->valor = ($valor !=null) ? $valor : $tutorial->valor;
        $tutorial->imagemCabecalho  = $imagemCabecalho;
        $tutorial->imagemExibicao = $imagemExibicao;
        $tutorial->postagem = $postagem;
        $tutorial->id_tipo = $tipo;
        $tutorial->id_autor = $autor->id;
        $tutorial->dataPublicacao = $dataPublicacao;

        //dd($categorias);

        $status = $tutorial->save();

        //salvando categorias do tutorial
        //TODO gerenciar transações caso haja erro ao salvar alguma categoria.
        foreach ($categorias as $value) {
            if ($value != null) {
                $cat = $categoria->find($value);
                $tutorial->categorias()->attach($cat);
            }
        }

        if ($status) {
            return redirect()
                //->route('/produtos/cadastrar')
                ->back()
                ->with('status', 'Cadastrado efetuado com sucesso!');;
        }

        //dd(Usuario::getUsuario());
    }

    public function verTutorial($id){
        $tutorial = Tutorial::find($id);
        return view('tutorial.post', compact('tutorial'));
    }

    public function gerenciarTutoriais(){
        return view('tutorial.gerenciar');
    }


}
