<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ServicosModel;
class Servico extends BaseController
{
    public $servicomodel;

    public function __construct(){
        $this->servicomodel = new ServicosModel();
    }

    public function index()
    {
        $dados['servicos'] = $this->servicomodel->findAll();
        if($dados>0){
            return view('galeria',$dados);
        }else{
            echo "nenhum serviço cadastrado";
            echo "<a href='/Home/index'>Pagina Inicial</a><br>";
        }
    }

    public function cadServ(){
        echo view ('admin/cad_serv_form');
    }

    
    public function cadServico(){

        $model = model('ServicosModel');
        $dados = $this->request->getPost();
        $pro = $model ->db->query("insert into servicos(nome_serv,preco_serv,foto_serv,descriçao_serv) values ('$dados[nome]','$dados[preco]','$dados[url]','$dados[descricao]')");

        if($pro){
            $dados['aviso'] = 'Cadastrado com sucesso!';
            $dados['class'] = 'container';
            echo view('/errors/sucess_alert',$dados);
            header ("Refresh:2; url=/Servico/verServico");
    }else {
        $dados['erro'] = 'Não foi possivel efetuar o cadastro';
        $dados['class'] = 'container';
        echo view('/errors/erro_select',$dados);
        header ("Refresh:2; url=/Servico/verServico");
    }
   }

   public function delServ(){
    $dados['servicos'] = $this->servicomodel->findAll();
    return view('/admin/del_serv',$dados);

    }

   public function delServico(){

    $model = model('ServicosModel');
    $dados = $this->request->getPost();
    $pro = $model ->db->query("delete from servicos where id_serv = '$dados[id]'");

    if($pro){
        $dados['aviso'] = 'Deletado com sucesso!';
        $dados['class'] = 'container';
        echo view('/errors/sucess_alert',$dados);
        header ("Refresh:2; url=/Servico/verServico");
    }else {
    echo "<span class='help-block' style='color: Red;'>Não foi Possivel deletar o Serviço!</span>";
    }

   }

   public function selectServ(){
    $dados['servicos'] = $this->servicomodel->findAll();
    echo view('/admin/alt_serv_select',$dados);
    }

   public function altServ(){
    $dados = $this->request->getPost();
        if(empty($dados)){
             echo view('/errors/erro_select');
            header("Refresh:1; url=/Servico/selectServ");
        }else{
             $dados['servicos'] = $this->servicomodel->find($dados['id']);
             echo view('/admin/edit_galeria_adm',$dados);
            }
    }
    public function altServico(){

    $model = model('ServicosModel');
    $dados = $this->request->getPost();
    $pro = $model ->db->query("update servicos set nome_serv='$dados[nome]',foto_serv='$dados[url]',preco_serv='$dados[preco]', descriçao_serv='$dados[descricao]' where id_serv ='$dados[id]'");
   // dd($dados);
        if($pro){
            $dados['aviso'] = 'Alterado com sucesso!';
            $dados['class'] = 'container';
            echo view('/errors/sucess_alert',$dados);
            header ("Refresh:2; url=/Servico/verServico");
         }else {
            $dados['erro'] = 'Não foi Possivel alterar o Serviço!';
            $dados['class'] = 'container';
            echo view('/errors/erro_agendamento',$dados);
            header ("Refresh:2; url=/Servico/verServico");
        }
    }

    public function verServico(){
        $dados['servicos'] = $this->servicomodel->findAll();
        echo view('/admin/galeria_adm',$dados);
    }
}
