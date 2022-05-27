<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Servicos extends Seeder
{
    public function run()
    {
        $data = [
        [
            'nome_serv'=>'Low fade',
            'preco_serv'=> 45,
            'foto_serv'=>'https://homensquesecuidam.com/wp-content/uploads/2017/10/cortes-de-cabelo-masculino-curto-homens-que-se-cuidam-ae.jpg'
        ],
        [
            'nome_serv'=>'High fade',
            'preco_serv'=> 40,
            'foto_serv'=>'https://homensquesecuidam.com/wp-content/uploads/2017/10/cortes-de-cabelo-masculino-curto-homens-que-se-cuidam-b.jpg'
        ],
        [
            'nome_serv'=>'Lateral com navalha',
            'preco_serv'=> 60,
            'foto_serv'=>'https://homensquesecuidam.com/wp-content/uploads/2017/10/cortes-de-cabelo-masculino-curto-homens-que-se-cuidam-h.jpg'
        ],
        [
            'nome_serv'=>'Degradê',
            'preco_serv'=> 35,
            'foto_serv'=>'https://homensquesecuidam.com/wp-content/uploads/2017/10/cortes-de-cabelo-masculino-curto-homens-que-se-cuidam-o.jpg'
        ],
        [
            'nome_serv'=>'Flat Top',
            'preco_serv'=> 50,
            'foto_serv'=>'https://homensquesecuidam.com/wp-content/uploads/2017/10/cortes-de-cabelo-masculino-curto-homens-que-se-cuidam-z-.jpg'
        ],
        [
            'nome_serv'=>'Fade Drop',
            'preco_serv'=> 56,
            'foto_serv'=>'https://blog.trinks.com/wp-content/uploads/2019/08/img_8910-993x1024.jpg'
        ],
        [
            'nome_serv'=>'Black Power',
            'preco_serv'=> 60,
            'foto_serv'=>'https://blog.trinks.com/wp-content/uploads/2019/08/3bf8f376d089a72e027fecf72acd2dfe.jpg'
        ],
        [
            'nome_serv'=>'Nudred',
            'preco_serv'=> 30,
            'foto_serv'=>'https://blog.trinks.com/wp-content/uploads/2019/08/flat_top-768x1024.jpg'
        ],
        [
            'nome_serv'=>'Risco de Navalha',
            'preco_serv'=> 20,
            'foto_serv'=>'https://blog.trinks.com/wp-content/uploads/2019/08/corte-degrad%C3%AA-masculino-cabelo-crespo.jpg'
        ],
        
    ];
        $this->db->table('Servicos')->insertBatch($data);

    }
}
