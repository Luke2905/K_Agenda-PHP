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
}