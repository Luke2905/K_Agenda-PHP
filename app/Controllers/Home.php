<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('cabecalho');
        echo view('menu');
        echo view('PaginaInicial');
        echo view('footer');
    }

    public function galeria()
    {
        echo view('cabecalho');
        echo view('menu');
        echo view('galeria');
        echo view('footer');
    }

    public function Funcionario()
    {
        echo view('cabecalho');
        echo view('menu');
        echo view('Funcionarios');
        echo view('footer');
    }

    public function validar()
    {
        echo view('cabecalho');
        echo view('menu');
        echo view('agendamento');
        echo view('footer');
    }
}
