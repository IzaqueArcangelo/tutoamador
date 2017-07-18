<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', 'app\DefaultController@index')->name('/');
Route::get('/home', 'app\DefaultController@index')->name('/home');
Route::get('/post', 'app\DefaultController@post')->name('/post');
Route::get('/contato', 'app\DefaultController@contato')->name('/contato');
Route::get('/sobre', 'app\DefaultController@sobre')->name('/sobre');
Route::get('/admin', 'app\DefaultController@admin')->name('/admin');
Route::get('/tutoriais', 'app\DefaultController@tutoriais')->name('/tutoriais');
Route::get('/gerenciar/usuarios', 'app\DefaultController@gerenciarUsuarios')->name('/gerenciar/usuarios');

Route::get('/login', 'seguranca\LoginController@index')->name('/login');
Route::post('/login', 'seguranca\LoginController@login')->name('/login');
Route::post('/logout', 'seguranca\LoginController@logout')->name('/logout');
Route::get('/logout', 'seguranca\LoginController@logout')->name('/logout');


Route::get('/registrar/usuario', 'registro\UsuarioController@cadastroAluno')->name('/registrar/usuario');
Route::post('/registrar/usuario', 'registro\UsuarioController@salvarAluno')->name('/registrar/usuario');
Route::get('/registrar/professor', 'registro\UsuarioController@cadastroProfessor')->name('/registrar/professor');
Route::post('/registrar/professor', 'registro\UsuarioController@salvarProfessor')->name('/registrar/professor');
Route::get('/editar/perfil', 'registro\UsuarioController@editar')->name('/editar/perfil');

Route::get('/cadastrar/tutorial', 'app\TutorialController@cadastrar')->name('/cadastrar/tutorial');
Route::post('/salvar/tutorial', 'app\TutorialController@salvar')->name('/salvar/tutorial');
Route::get('/ler/tutorial/{id}', 'app\TutorialController@verTutorial')->name('/ler/tutorial');




