<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Profissional extends Seeder
{
    public function run()
    {
        $data = [

            'nome_pro'=>'Alberto',
            'foto_pro'=>'https://img.ibxk.com.br/2019/02/17/17124052466014.jpg',
            'telefone_pro'=>'999703020'
        ],
        [
            'nome_pro'=>'Vania',
            'foto_pro'=>'https://cajamar.sp.gov.br/noticias/wp-content/uploads/sites/2/2021/07/site-vacinacao-33-anos.png',
            'telefone_pro'=>'981521926'
        ],
        [
            'nome_pro'=>'Larissa',
            'foto_pro'=>'https://img.freepik.com/fotos-gratis/a-foto-horizontal-agradou-a-mulher-de-pele-escura-com-corte-de-cabelo-afro-aponta-para-longe-com-os-dois-dedos-da-frente-mostra-um-espaco-em-branco-para-sua-promocao-isolado-sobre-a-parede-azul-pessoas-conceito-de-propaganda_273609-26380.jpg?w=2000',
            'telefone_pro'=>'997335130'
        ],
        [
            'nome_pro'=>'Valter',
            'foto_pro'=>'https://cajamar.sp.gov.br/noticias/wp-content/uploads/sites/2/2021/08/site-vacinacao-26-anos.png',
            'telefone_pro'=>'986271580'
        ],
        [
            'nome_pro'=>'Mike',
            'foto_pro'=>'https://pm1.narvii.com/6583/13022a93a381cddb0c98d4e0a813635bd1215d89_hq.jpg',
            'telefone_pro'=>'972519113'
        ],
        [
            'nome_pro'=>'Nelson',
            'foto_pro'=>'https://static1.conquistesuavida.com.br/articles//4/56/84/@/18404-gente-que-da-prioridade-aos-sentimentos-article_gallery-2.jpg',
            'telefone_pro'=>'999673212'
        ],
        [
            'nome_pro'=>'Ryan',
            'foto_pro'=>'https://img.freepik.com/fotos-gratis/pessoa-reflexiva-calma-pacifica-pessoa-criativa-em-pe-com-a-mao-perto-dos-labios_259150-20819.jpg',
            'telefone_pro'=>'983711677'
        ],
        [
            'nome_pro'=>'Erick',
            'foto_pro'=>'https://tangerino.com.br/blog/wp-content/uploads/2021/03/cursos-de-gestao-de-pessoas-1.jpg',
            'telefone_pro'=>'991316875'
        ],
        [
            'nome_pro'=>'Antonieta',
            'foto_pro'=>'https://fotografiadicas.com.br/wp-content/uploads/2017/10/15-Como-fotografar-pessoas-Fotografia-Dicas.jpg',
            'telefone_pro'=>'997035342'
        ]);
        
        $this-&gt;db-&gt;table('Profissionais')-&gt;insertBatch($data);

    }
}
