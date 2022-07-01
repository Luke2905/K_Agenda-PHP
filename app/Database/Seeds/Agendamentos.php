<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Agendamentos extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nome_agend'=>'Alberto',
                'email_agend'=>'bebeto@gmail.com',
                'id_pro'=>'1',
                'data_agend' =>'2022-07-01',
                'hora_agend'=>'12:00',
                'status_agend' => 'Ativo'
            ],
            [
                'nome_agend'=>'Antonietta Bueno Firmino',
                'email_agend'=>'Antonietta@gmail.com',
                'id_pro'=>'1',
                'data_agend' =>'2022-07-01',
                'hora_agend'=>'13:00',
                'status_agend' => 'Ativo'
            ],
            [
                'nome_agend'=>'Wescley Gabrig Alentejo',
                'email_agend'=>'Wescley@gmail.com',
                'id_pro'=>'1',
                'data_agend' =>'2022-07-01',
                'hora_agend'=>'14:00',
                'status_agend' => 'Ativo'
            ],
            [
                'nome_agend'=>'Julliana da Conceição Peixoto',
                'email_agend'=>'Julliana@gmail.com',
                'id_pro'=>'2',
                'data_agend' =>'2022-07-02',
                'hora_agend'=>'09:00',
                'status_agend' => 'Ativo'
            ],
            [
                'nome_agend'=>'Giselle Braz Filho',
                'email_agend'=>'Giselle@gmail.com',
                'id_pro'=>'2',
                'data_agend' =>'2022-07-02',
                'hora_agend'=>'10:00',
                'status_agend' => 'Ativo'
            ],
            [
                'nome_agend'=>'Tarcísio Pessoa Dinis',
                'email_agend'=>'Tarcísio@gmail.com',
                'id_pro'=>'2',
                'data_agend' =>'2022-07-02',
                'hora_agend'=>'12:00',
                'status_agend' => 'Ativo'
            ],
            [
                'nome_agend'=>'Lucy Cormack Araujo ',
                'email_agend'=>'Lucy@gmail.com',
                'id_pro'=>'3',
                'data_agend' =>'2022-07-01',
                'hora_agend'=>'12:00',
                'status_agend' => 'Ativo'
            ],
            [
                'nome_agend'=>'Devanir Facre Marques',
                'email_agend'=>'Devanir@gmail.com',
                'id_pro'=>'3',
                'data_agend' =>'2022-07-01',
                'hora_agend'=>'13:00',
                'status_agend' => 'Ativo'
            ],
            [
                'nome_agend'=>'Verônica Rodrigues Damasceno',
                'email_agend'=>'Verônica@gmail.com',
                'id_pro'=>'1',
                'data_agend' =>'2022-07-04',
                'hora_agend'=>'09:00',
                'status_agend' => 'Ativo'
            ],
            [
                'nome_agend'=>'Ignácio Paes Maia',
                'email_agend'=>'Ignácio@gmail.com',
                'id_pro'=>'1',
                'data_agend' =>'2022-07-04',
                'hora_agend'=>'12:00',
                'status_agend' => 'Cancelado'
            ],
            [
                'nome_agend'=>'Erika Carvalho Borges',
                'email_agend'=>'Erika@gmail.com',
                'id_pro'=>'1',
                'data_agend' =>'2022-07-04',
                'hora_agend'=>'09:00',
                'status_agend' => 'Cancelado'
            ],
            [
                'nome_agend'=>'Ana Cristina Darmont',
                'email_agend'=>'Darmont@gmail.com',
                'id_pro'=>'2',
                'data_agend' =>'2022-07-04',
                'hora_agend'=>'09:00',
                'status_agend' => 'Ativo'
            ],

        ];
            $this->db->table('agendamento')->insertBatch($data);
    }
}
