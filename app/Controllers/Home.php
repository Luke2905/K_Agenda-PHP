<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('PaginaInicial');
    }

    public function galeria()
    {
        echo view('galeria');
    }

    public function funcionario()
    {
        echo view('funcionarios');
    }

    public function agendamento()
    {
        //formulario quebrou irei refazer
    }
}
