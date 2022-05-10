<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Login extends Seeder
{
    public function run()
    {
        $senha = '12345678';
        $model = model('LoginModel');
        $model ->insert([

            'nome'=>'ADM',
            'email'=>'admin@gmail.com',
            'senha'=>$senha,
        ]);
    }
}
