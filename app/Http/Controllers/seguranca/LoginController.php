<?php

namespace App\Http\Controllers\seguranca;

use App\Model\Login;
use DateTime;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;
    protected $auth;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * O middleware @guest impede que um usuário @autenticado tenha acesso a uma determinada página.
     * Já o @auth impede que visitantes acessem páginas que requerem autenticação.
     *
     * @return void
     */
    public function __construct(Guard $auth)
    {
        $this->middleware('guest', ['except' => 'logout']);
        $this->auth = $auth;
    }

    public function login(Request $request)
    {
        $email = $request->input('email');
        $senha = $request->input('senha');

        $this->validate($request, $this->rules(), $this->validationErrorMessages());



       if ($this->auth->attempt([
            'email' => $email,
            // Nome do indice correspondente ao campo senha que o framework utiliza para validar o usuário.
            'password' => $senha,
            // verifica se o usuário está ativo.
        ])){
            return redirect()->intended('/home');
        }
        else {
            // fazer isto ou sobrescrever o método sendFailedLoginResponse
            return redirect()
                ->back()
                ->withInput($request->all())
                ->withErrors([
                    $this->username() => 'Usuário ou senha inválidos',
                ]);
        }
    }

    public function index(){
        /*$login =  new Login();
        $login->create([
            'nomeUsuario' => 'AMADOR',
            'email' =>'amador@hotmail.com',
            'senha' => bcrypt('12345'),
            'dataCadastro' => new DateTime(),
            //'dataAtualizacao' => '',
        ]);*/
        return view('login');
    }

    protected function rules()
    {
        return [
            'email' => 'required|email',
            'senha' => 'required|',
        ];
    }

    public function validationErrorMessages()
    {
        return [
            'email.required' => 'O email é obrigatório',
            'email.email' => 'Insira um formato válido de email',
            'senha.required' => 'O campo senha não pode ser vazio',
        ];
    }
}
