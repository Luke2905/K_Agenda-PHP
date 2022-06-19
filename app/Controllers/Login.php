<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Controllers\Admin;
class Login extends BaseController
{
    public $admincontroller;

    public function __construct(){
        $this->admincontroller = new Admin();
    }


    public function autenticar() /* -> Verifica se os dados de Login são verdadeiros */
    {
        $model = model('LoginModel');
        $dados = $this->request->getPost();
        
        $model->where('email',$dados['usuario']);
        $resultado = $model->where('senha',$dados['senha'])->find();

       if(count($resultado)>0){

        session()->set([ /*-> cria a seção de Login */

            'email' => $model->where('email',$dados['usuario']),
            'senha' => $resultado,  
        ]);
        header("Refresh:1; url=/Login/login");   
       }else{
        $model = model('ProfissionalModel');
        $dados = $this->request->getPost();
        
        $model->where('email_pro',$dados['usuario']);
        $resultado = $model->where('senha_pro',$dados['senha'])->find();
        if(count($resultado)>0){
            session()->set([ /*-> cria a seção de Login do Funcionario */

                'email' => $model->where('email',$dados['usuario']),
                'senha' => $resultado,  
            ]);
            header("Refresh:1; url=/Login/loginFuncionario"); 
        }else{
            $dados['erro'] = 'Não foi Possivel fazer login!';
            $dados['class'] = 'container';
            echo view('/errors/erro_select',$dados);
            header("Refresh:1; url=/Home/login");
        }
       }
    }
    public function login(){ // -> metodo de login

        if(session()->has('senha')){ /*-> verifica se existe uma seção ativa */

            return $this->admincontroller->adminHome();
        }else{
            $dados['erro'] = 'Usuario desconectado';
            $dados['class'] = 'container';
            echo view('/errors/erro_agendamento',$dados);
            header("Refresh:1; url=/Home/login");
        } 
    }
    public function loginFuncionario(){ // -> metodo de login funcionario

        if(session()->has('senha')){ 
            echo "<a>Profissional Logado</a><br>";
            echo "<a href='/Login/logout'>Sair</a><br>";
        }else{
            $dados['erro'] = 'Usuario desconectado';
            $dados['class'] = 'container';
            echo view('/errors/erro_agendamento',$dados);
            header("Refresh:1; url=/Home/login");
        } 
    }
    public function logout(){ // -> metodo de login

        session()->destroy(); /*Destroy a seção e limpa os dados dela */
        $dados['erro'] = 'Usuario desconectado com sucesso';
        $dados['class'] = 'container';
        echo view('/errors/erro_agendamento',$dados);
        header("Refresh:1; url=/Home/index");
    }
}
