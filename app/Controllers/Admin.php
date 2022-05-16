<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Admin extends BaseController
{
    public function adminHome()
    {
        echo view('admin/home');
    }

    public function novoUser()
    {
        echo view('admin/novo_user');
    }

    public function cadUser()
    {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $model = model('LoginModel');
        $dados = $this->request->getPost();
        $user = $model ->insert($dados);

        if($user){
            echo "<span class='help-block' style='color: Blue;'>Cadastro efetuado com sucesso!</span><br>";
            echo "<a href='/Home/login'>Pagina de Login</a><br>";
            echo "<a href='/Home/index'>Pagina principal</a>";
    }else {
        echo "<span class='help-block' style='color: Red;'>Erro no cadastro!</span>";
    }

    }
    public function menuPro()
    {
        echo view('admin/menu_pro');
    }
    public function menuServ()
    {
        echo view('admin/menu_serv');
    }

}

