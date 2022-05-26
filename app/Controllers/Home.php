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

    public function autenticar()
    {
        $model = model('LoginModel');
        $dados = $this->request->getPost();
        //dd($dados);
        
        $model->where('email',$dados['usuario']);
        $resultado = $model->where('senha',$dados['senha'])->find();
       // dd($resultado);

       if(count($resultado)>0){
           return view('/admin/home');
       }else{
           return view('login',['erro'=>'Não foi possivel fazer login','classe'=>'footer_p']);
       }
    }
}
