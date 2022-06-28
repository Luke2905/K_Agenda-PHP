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
        $this->agendamentomodel = new AgendamentoModel();
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
        $model->where('data_agend',$dados['dia']);
        $resultado = $model->where('hora_agend',$dados['hora'])->find();

        if(count($resultado)>0){
            $dados['erro'] = 'O horário informado não está disponivel';
            $dados['class'] = 'container';
            echo view('/errors/erro_agendamento',$dados);
            header("Refresh:2; url=/Agendamento/index");

        }else{
            $agend = $model ->db->query("insert into agendamento(nome_agend,email_agend,id_pro,data_agend,hora_agend,status_agend) values ('$dados[nome]','$dados[email]','$dados[id]','$dados[dia]', '$dados[hora]','Aguardando Confirmação')");
            
        if($agend){

            // do{ 
            //     $dados['erro'] = 'Aguardando Confirmação';
            //     $dados['class'] = 'container';
            //     echo view('/errors/erro_agendamento',$dados);
            //     $model->where('id_pro',$dados['id']);
            //     $model->where('data_agend',$dados['dia']);
            //     $resultado = $model->where('hora_agend',$dados['hora']);
            //     $resultado = $model->where('status_agend','Aguardando Confirmação')->find();
            //     dd($resultado);
            // }while(count($resultado) > 0); 

                $dados['aviso'] = 'Agendamento Solicitado';
                $dados['class'] = 'container';
                echo view('/errors/sucess_alert',$dados);
                header("Refresh:2; url=/Agendamento/index");
            
        }else {
            $dados['erro'] = 'Erro no Agendamento!';
            $dados['class'] = 'container';
            echo view('/errors/erro_select',$dados);
        }
        }
    }

    public function selectAgendamento(){ /*-> Exibe no select as Solicitações de Agendamento pendetes */
        $dados['servicos'] = $this->agendamentomodel->where('status_agend','Aguardando Confirmação')->find();
        echo view('/admin/confirmar_agend',$dados);
        }

        public function verAgend(){

            $dados = $this->request->getPost();
                if(empty($dados)){
                    $dados['erro'] = 'Não foi Possivel Confirmar o Agendamento!';
                    $dados['class'] = 'container';
                    echo view('/errors/erro_agendamento',$dados);
                    header("Refresh:1; url=/Agendamento/selecAgendamento");
                }else{
                     $dados['servicos'] = $this->agendamentomodel->query("select agendamento.id_agend, agendamento.nome_agend,agendamento.email_agend ,profissionais.nome_pro, date_format(agendamento.data_agend, '%d/%c/%Y') as data_agend, agendamento.hora_agend from agendamento inner join profissionais on agendamento.id_pro=profissionais.id_pro where id_agend = '$dados[id]';");
                     echo view('/admin/alt_serv',$dados);
                    }
            }
    public function confirmarAgendamento(){ /*-> Confirma as Solicitações */
            $model = model('AgendamentoModel');
            $dados = $this->request->getPost();
          //dd($dados);
            $agend = $model ->db->query("update agendamento set status_agend = 'Ativo' where id_agend ='$dados[id]'");
            if($agend){

                $dados['aviso'] = 'Agendamento Confirmado';
                $dados['class'] = 'container';
                echo view('/errors/sucess_alert',$dados);
                header("Refresh:2; url=/Agendamento/selectAgendamento");
            }else {
                $dados['erro'] = 'Não foi Possivel Confirmar o Agendamento!';
                $dados['class'] = 'container';
                echo view('/errors/erro_agendamento',$dados);
                header("Refresh:2; url=/Login/login");
            }

    }

    public function concluirAgendamento(){ /*-> Muda o Status do Agendamento para concluido*/
        $model = model('AgendamentoModel');
        $dados = $this->request->getPost();

        $agend = $model ->db->query("update agendamento set status_agend = 'Concluido' where id_agend ='$dados[Feito]'");
        if($agend){
            $dados['aviso'] = 'Agendamento Concluido';
            $dados['class'] = 'container';
            echo view('/errors/sucess_alert',$dados);
            header("Refresh:2; url=/Admin/Lista_Agendamentos");
        }else {
            $dados['erro'] = 'Não foi Possivel Concluir o Agendamento!';
            $dados['class'] = 'container';
            echo view('/errors/erro_agendamento',$dados);
            header("Refresh:2; url=/Admin/Lista_Agendamentos");
        }
       // dd($dados);
    }
    
    public function cancelarAgendamento(){ /*-> Muda o Status do Agendamento para Cancelado*/
        $model = model('AgendamentoModel');
        $dados = $this->request->getPost();

        $agend = $model ->db->query("update agendamento set status_agend = 'Cancelado' where id_agend ='$dados[Cancelado]'");
        if($agend){
            $dados['erro'] = 'Agendamento Cancelado';
            $dados['class'] = 'container';
            echo view('/errors/erro_agendamento',$dados);
            header("Refresh:2; url=/Admin/Lista_Agendamentos");
        }else {
            $dados['erro'] = 'Não foi Possivel Cancelar o Agendamento!';
            $dados['class'] = 'container';
            echo view('/errors/erro_agendamento',$dados);
            header("Refresh:2; url=/Admin/Lista_Agendamentos");
        }
       // dd($dados);
    }
}
