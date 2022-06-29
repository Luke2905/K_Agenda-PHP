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
            $dados['aviso'] = 'Cadastrado com sucesso!';
            $dados['class'] = 'container';
            echo view('/errors/sucess_alert',$dados);
            header ("Refresh:2; url=/Profissional/verProfissional");
    }else {
        $dados['erro'] = 'Não foi possivel efetuar o cadastro';
        $dados['class'] = 'container';
        echo view('/errors/erro_select',$dados);
        header("Refresh:1; url=/Profissional/selectPro");
    }

    }

    public function delProfissional(){

        $model = model('AgendamentoModel');
        $dados = $this->request->getPost();
        $delete = $dados['deletePro'];

        $resultado = $model->where('id_pro',$delete)->find();

        if(count($resultado)>0){
            $dados['erro'] = 'Não é possivel deletar este profissional';
            $dados['class'] = 'container';
            echo view('/errors/erro_agendamento',$dados);
            header ("Refresh:2; url=/Profissional/verProfissional");

        }else{
        $model = model('ProfissionalModel');
        $dados = $this->request->getPost();
        $delete = $dados['deletePro'];
        $pro = $model ->db->query("delete from profissionais where id_pro = '$delete'");

        if($pro){
            $dados['aviso'] = 'Deletado com sucesso!';
            $dados['class'] = 'container';
            echo view('/errors/sucess_alert',$dados);
            header ("Refresh:2; url=/Profissional/verProfissional");
    }else {
        $dados['erro'] = 'Não foi Possivel alterar o profissional!';
        $dados['class'] = 'container';
        echo view('/errors/erro_agendamento',$dados);
        header ("Refresh:2; url=/Profissional/verProfissional");
    }
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
            $dados['erro'] = 'Profissional não encontrado';
            $dados['class'] = 'container';
            echo view('/errors/erro_select',$dados);
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
        $dados['aviso'] = 'Alterado com sucesso!';
        $dados['class'] = 'container';
        echo view('/errors/sucess_alert',$dados);
        header ("Refresh:2; url=/Profissional/verProfissional");
    }else {
        $dados['erro'] = 'Não foi Possivel alterar o profissional!';
        $dados['class'] = 'container';
        echo view('/errors/erro_agendamento',$dados);
        header ("Refresh:2; url=/Profissional/verProfissional");
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