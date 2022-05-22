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
        $pro = $model ->db->query("insert into servicos(nome_serv,preco_serv,foto_serv) values ('$dados[nome]','$dados[preco]','$dados[url]')");

        if($pro){
            echo "<span class='help-block' style='color: Blue;'>Cadastro efetuado com sucesso!</span><br>";
            echo "<a href='/Admin/menuServ'>Voltar para o Menu</a><br>";
            echo "<a href='/Home/galeria'>Galeria de Cortes</a>";
    }else {
        echo "<span class='help-block' style='color: Red;'>Erro no cadastro!</span>";
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
        echo "<span class='help-block' style='color: Blue;'>deletado com sucesso!</span><br>";
        echo "<a href='/Admin/menuServ'>Voltar para o Menu</a>";
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
             echo view('/admin/alt_serv',$dados);
            }
    }
    public function altServico(){

    $model = model('ServicosModel');
    $dados = $this->request->getPost();
    $pro = $model ->db->query("update servicos set nome_serv='$dados[nome]',foto_serv='$dados[url]',preco_serv='$dados[Preco]' where id_serv ='$dados[id]'");
   // dd($dados);
        if($pro){
             echo "<span class='help-block' style='color: Blue;'>Alterado com sucesso!</span><br>";
             echo "<a href='/Admin/menuServ'>Voltar</a><br>";
         }else {
            echo "<span class='help-block' style='color: Red;'>Não foi Possivel Alterar o Serviço!</span>";
        }
    }
}
