<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AgendamentoModel;

class Agendamento extends BaseController
{

    public $agendamentolmodel;

    public function __construct(){
        $this->agendamentolmodel = new AgendamentoModel();
    }

    public function index()
    {
        $model = model('AgendamentoModel');
        $dados = $this->request->getPost();
        dd($dados);
    }
}
