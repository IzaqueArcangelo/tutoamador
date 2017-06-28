<?php

namespace App\Http\Controllers\app;

use App\Facade\Usuario;
use App\Model\Login;
use App\Model\Tutorial;
use DateTime;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DefaultController extends Controller
{
    public function index(){
        //dd(Usuario::tipo());
        $tutoriais = Tutorial::where([])->orderBy('id', 'desc')->paginate(100);

        return view('index', compact('tutoriais'));
    }

    public function post(){
        return view('post');
    }

    public function contato(){
        return view('contact');
    }
    public function sobre(){
        return view('about');
    }

    public function admin(){
        return view('admin');
    }
    public function tutoriais(){
        return view('tutoriais');
    }



}
