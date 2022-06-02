<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Login extends BaseController
{
    public function autenticar()
    {
        $model = model('LoginModel');
        $dados = $this->request->getPost();
        
        $model->where('email',$dados['usuario']);
        $resultado = $model->where('senha',$dados['senha'])->find();

       if(count($resultado)>0){
           header("Refresh:1; url=/Admin/adminHome");
       }else{
        $model = model('ProfissionalModel');
        $dados = $this->request->getPost();
        
        $model->where('email_pro',$dados['usuario']);
        $resultado = $model->where('senha_pro',$dados['senha'])->find();
        if(count($resultado)>0){
            echo "<a>Profissional Logado</a><br>";
            echo "<a href='/Home/index'>Sair</a><br>";
        }else{
           echo "<span class='help-block' style='color: Red;'>Não foi Possivel fazer login!</span>";
           header("Refresh:1; url=/Home/Login");
        }
       }
    }
}
