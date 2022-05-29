<?php

namespace App\Controllers;
use App\Models\ProfissionalModel;
class Home extends BaseController
{
    public $profissionalmodel;

    public function __construct(){
        $this->profissionalmodel = new ProfissionalModel();
    }

    public function index()
    {
        echo view('PaginaInicial');
    }

    public function galeria()
    {
        echo view('galeria');
    }

    public function funcionario()
    {
        echo view('funcionarios');
    }

    public function agendamento()
    {
        $dados['profissionais'] = $this->profissionalmodel->findAll();
        echo view('agendamento',$dados);
    }

    public function localizacao()
    {
        echo view('localizacao');
    }

    public function mapa()
    {
        echo view('mapa');
    }

    public function login()
    {
        echo view('login_register');
    }

    public function register()
    {
        echo view('register_login');
    }
    /* Exclusão da função de autenticar do Controller Home
    a Função encontra-se no Controller Login
    */
}
