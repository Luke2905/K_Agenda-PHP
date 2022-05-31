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

    public function cadPro(){
        echo view('/admin/cad_pro');

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
        $delete = $dados['deletePro'];
        $pro = $model ->db->query("delete from profissionais where id_pro = '$delete'");

        if($pro){
            echo "<span class='help-block' style='color: Blue;'>deletado com sucesso!</span><br>";
            echo "<a href='/Home/login'>Pagina de Login</a><br>";
            echo "<a href='/Profissional/verProfissional'>Pagina de Profissionais</a>";
    }else {
        echo "<span class='help-block' style='color: Red;'>Não foi Possivel deletar o Usuario!</span>";
    }

    }
    public function delPro(){
        $dados['profissionais'] = $this->profissionalmodel->findAll();
        return view('/admin/del_pro',$dados);

    }

    public function selectPro(){
        $dados['profissionais'] = $this->profissionalmodel->findAll();
        echo view('/admin/alt_pro_select',$dados);
    }

    public function altPro(){
        $dados = $this->request->getPost();

        if(empty($dados)){
            echo view('/errors/erro_select');
            header("Refresh:1; url=/Profissional/selectPro");
        }else{
            $dados['profissionais'] = $this->profissionalmodel->find($dados['alterarPro']);
            echo view('/admin/edit_funcionarios_adm',$dados);
        }       
    }

    public function altProfissional(){

        $model = model('ProfissionalModel');
        $dados = $this->request->getPost();
        $pro = $model ->db->query("update profissionais set nome_pro='$dados[nome]',foto_pro='$dados[url]',telefone_pro='$dados[telefone]' where id_pro ='$dados[id]'");
       // dd($dados);
       if($pro){
        echo "<span class='help-block' style='color: Blue;'>Alterado com sucesso!</span><br>";
        echo "<a href='/Admin/menuPro'>Voltar</a><br>";
    }else {
    echo "<span class='help-block' style='color: Red;'>Não foi Possivel deletar o Usuario!</span>";
    }
    }

    public function verProfissional(){
        $dados['profissionais'] = $this->profissionalmodel->findAll();
        echo view('/admin/funcionarios_adm',$dados);
    }

    public function pesquisarPro(){

        $dados = $this->request->getPost();
        //$dados['search'] = $busca;
        $this->profissionalmodel->orLike('nome_pro',$dados['search']);
        $this->profissionalmodel->orLike('telefone_pro',$dados['search']);
        $dados['profissionais']=  $this->profissionalmodel->findAll();
         return view('funcionarios',$dados);


    }
}