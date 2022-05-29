<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AgendamentoModel;
use App\Models\ProfissionalModel;
class Agendamento extends BaseController
{
/*---------------------Instancia da Models---------------------*/
    public $agendamentolmodel;

    public function __construct(){
        $this->agendamentolmodel = new AgendamentoModel();
        $this->profissionalmodel = new ProfissionalModel();
    }
/*-----------------------------FIM Instancia-----------------------------*/

    public function index()
    {
        $dados['profissionais'] = $this->profissionalmodel->findAll();
        echo view('agendamento',$dados);
    }

    public function cadAgendamento()
    {
        $model = model('AgendamentoModel');
        $dados = $this->request->getPost();
        //dd($dados);

        $model->where('id_pro',$dados['id']);
        $resultado = $model->where('data_agend',$dados['agendamento'])->find();

        if(count($resultado)>0){
            echo view('/errors/erro_agendamento');
            header("Refresh:1; url=/Agendamento/index");

        }else{
            $agend = $model ->db->query("insert into agendamento(nome_agend,email_agend,id_pro,data_agend) values ('$dados[nome]','$dados[email]','$dados[id]','$dados[agendamento]')");
            
        if(empty($dados)){
            echo "<span class='help-block' style='color: Red;'>Erro no Agendamento!</span>";
        }else {
        $date = $dados['agendamento'];
        echo "<span class='help-block' style='color: Blue;'>Seu horario foi agendado</span><br>";
        echo "<a href='/Home/index'>Home</a><br>";
        }
        }
    }
}
