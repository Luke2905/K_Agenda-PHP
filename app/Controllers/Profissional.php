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
        if($dados>0){
            return view('funcionarios',$dados);
        }else{
            echo "nenhum profissional cadastrado";
            echo "<a href='/Home/index'>Pagina Inicial</a><br>";
        }
    }

    public function cadProfissional(){

        $model = model('ProfissionalModel');
        $dados = $this->request->getPost();
        $pro = $model ->db->query("insert into profissionais(nome_pro,telefone_pro,foto_pro) values ('$dados[nome]','$dados[telefone]','$dados[url]')");

        if($pro){
            echo "<span class='help-block' style='color: Blue;'>Cadastro efetuado com sucesso!</span><br>";
            echo "<a href='/Home/login'>Pagina de Login</a><br>";
            echo "<a href='/Profissional/index'>Pagina de Profissionais</a>";
    }else {
        echo "<span class='help-block' style='color: Red;'>Erro no cadastro!</span>";
    }

    }

    public function delProfissional(){

        $model = model('ProfissionalModel');
        $dados = $this->request->getPost();
        $pro = $model ->db->query("delete from profissionais where id_pro = '$dados[id]'");

        if($pro){
            echo "<span class='help-block' style='color: Blue;'>deletado com sucesso!</span><br>";
            echo "<a href='/Home/login'>Pagina de Login</a><br>";
            echo "<a href='/Profissional/index'>Pagina de Profissionais</a>";
    }else {
        echo "<span class='help-block' style='color: Red;'>Não foi Possivel deletar o Usuario!</span>";
    }

    }
    public function delPro(){
        $dados['profissionais'] = $this->profissionalmodel->findAll();
        return view('/admin/del_pro',$dados);

    }
}