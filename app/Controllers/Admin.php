<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AgendamentoModel;
use App\Models\ProfissionalModel;
class Admin extends BaseController
{

    public $agendamentolmodel;

    public function __construct(){
        $this->agendamentomodel = new AgendamentoModel();
        $this->profissionalmodel = new ProfissionalModel();
    }

    public function adminHome()
    {
        $dados['tabela'] = $this->agendamentomodel->query("select agendamento.id_agend, agendamento.nome_agend,agendamento.email_agend ,profissionais.nome_pro, date_format(agendamento.data_agend, '%d/%c/%Y %H:%i') as data_agend from agendamento inner join profissionais on agendamento.id_pro=profissionais.id_pro;"); /*->dados da tabela */
        $dados['agendamento'] = $this->agendamentomodel->query("select profissionais.nome_pro, count(agendamento.data_agend) as Agendamentos  from agendamento inner join profissionais on agendamento.id_pro=profissionais.id_pro group by nome_pro;"); /*->dados do grafico 1 */
        echo view('admin/home',$dados);
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

    public function Lista_Agendamentos()
    {
        echo view('admin/lista_agendamentos');
    }

}

