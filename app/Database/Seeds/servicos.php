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
            'descriçao_serv' => 'O corte low Fade é um tipo de degradê que é marcado numa altura mais baixa do crânio',
            'foto_serv'=>'https://homensquesecuidam.com/wp-content/uploads/2017/10/cortes-de-cabelo-masculino-curto-homens-que-se-cuidam-ae.jpg'
        ],
        [
            'nome_serv'=>'High fade',
            'preco_serv'=> 40,
            'descriçao_serv' => 'O Hi-top fade ou High-Top é um penteado ou corte de cabelo masculino onde o cabelo na lateral é cortado ou raspado bem curto enquanto o cabelo no topo da cabeça é mantido bem longo',
            'foto_serv'=>'https://homensquesecuidam.com/wp-content/uploads/2017/10/cortes-de-cabelo-masculino-curto-homens-que-se-cuidam-b.jpg'
        ],
        [
            'nome_serv'=>'Lateral com navalha',
            'preco_serv'=> 60,
            'descriçao_serv' => 'O corte lateral com navalha é um tipo de corte que a parte lateral é raspada na navalha',
            'foto_serv'=>'https://homensquesecuidam.com/wp-content/uploads/2017/10/cortes-de-cabelo-masculino-curto-homens-que-se-cuidam-h.jpg'
        ],
        [
            'nome_serv'=>'Degradê',
            'preco_serv'=> 35,
            'descriçao_serv' => 'Degradê ou gradiente de cor é uma sequência de tons contínuos, podendo ser limitado ou ilimitado',
            'foto_serv'=>'https://homensquesecuidam.com/wp-content/uploads/2017/10/cortes-de-cabelo-masculino-curto-homens-que-se-cuidam-o.jpg'
        ],
        [
            'nome_serv'=>'Flat Top',
            'preco_serv'=> 50,
            'descriçao_serv' => 'Um "flattop" é um tipo de corte de cabelo curto, onde o cabelo na parte superior da cabeça geralmente está ereto e cortado para formar um convés de aparência plana',
            'foto_serv'=>'https://homensquesecuidam.com/wp-content/uploads/2017/10/cortes-de-cabelo-masculino-curto-homens-que-se-cuidam-z-.jpg'
        ],
        [
            'nome_serv'=>'Fade Drop',
            'preco_serv'=> 56,
            'descriçao_serv' => 'Fade Drop é um tipo de corte de cabelo desbotado que se curva para baixo em direção à parte de trás da cabeça. Quando visto de lado',
            'foto_serv'=>'https://blog.trinks.com/wp-content/uploads/2019/08/img_8910-993x1024.jpg'
        ],
        [
            'nome_serv'=>'Black Power',
            'preco_serv'=> 60,
            'descriçao_serv' => 'O cabelo black power, também chamado de afro, é um tipo de corte/penteado comumente usado por homens e mulheres de cabelo crespo ou cacheado',
            'foto_serv'=>'https://blog.trinks.com/wp-content/uploads/2019/08/3bf8f376d089a72e027fecf72acd2dfe.jpg'
        ],
        [
            'nome_serv'=>'Nudred',
            'preco_serv'=> 30,
            'descriçao_serv' => 'O nudred é uma técnica de texturização que cria o efeito de dreads fakes com uma esponja específica',
            'foto_serv'=>'https://blog.trinks.com/wp-content/uploads/2019/08/flat_top-768x1024.jpg'
        ],
        [
            'nome_serv'=>'Risco de Navalha',
            'preco_serv'=> 20,
            'descriçao_serv' => 'O risco de navalha geralmente segue o caimento natural do cabelo ou pode seguir a linha do fade, mas nada impede do risco aparecer em desenhos',
            'foto_serv'=>'https://blog.trinks.com/wp-content/uploads/2019/08/corte-degrad%C3%AA-masculino-cabelo-crespo.jpg'
        ],
        
    ];
        $this->db->table('Servicos')->insertBatch($data);

    }
}
