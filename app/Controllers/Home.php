<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('cabecalho');
        echo view('login');
        echo view('rodape');
    }

    public function layout()
    {
        echo view('principal');
    }

    public function validar()
    {

    }
}
