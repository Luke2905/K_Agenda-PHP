<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProfissionalModel;
class Profissional extends BaseController
{
    public $profissionalmodel;

    public function __construct(){
        $this->profissionalmodel = new ProfissionalModel();
    }
    public function index()
    {$dados['profissionais'] = $this->profissionalmodel->findAll();
       // dd($dados);
        return view('funcionarios',$dados);
    }

    public function cadProfissional(){

        $nome = $_POST['nome'];
        $url = $_POST['url'];
        $telefone = $_POST['telefone'];

        $model = model('ProfissionalModel');
        $dados = $this->request->getPost();
        $pro = $model ->db->query("insert into profissionais(nome_pro,telefone_pro,foto_pro) values ('$nome','$telefone','$url')");

        if($pro){
            echo "<span class='help-block' style='color: Blue;'>Cadastro efetuado com sucesso!</span><br>";
            echo "<a href='/Home/login'>Pagina de Login</a><br>";
            echo "<a href='/Profissional/index'>Pagina de Profissionais</a>";
    }else {
        echo "<span class='help-block' style='color: Red;'>Erro no cadastro!</span>";
    }

    }
}