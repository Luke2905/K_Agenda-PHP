<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Agendamento extends Migration
{
    public function up()
    {
        $this->forge->addField(
        [
            'id_agend' =>[
                'type' => 'INT',
                'constraint' =>100,
                'unsigned'  => true,
             'auto_increment' => true,
            ],
            'nome_agend' =>[
                'type' => 'VARCHAR',
                'constraint' =>100,
                'null' => false,
            ],
            'email_agend' =>[
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => false,
            ],
            'id_pro'=>[

                'type' => 'INT',
                'constraint' =>10,
                'unsigned'       => true,
                'null' => false,
            ],
            'data_agend' =>[
                'type' => 'DATETIME',
                'null' => false,
            ],

        ]
        );

        $attributes = ['ENGINE' => 'InnoDB'];
        $this->forge->addKey('id_agend', true);
        $this->forge->addForeignKey('id_pro','profissionais','id_pro');
         $this->forge->createTable('agendamento',false,$attributes);
       

    }

    public function down()
    {
        $this->forge->dropTable('agendamento');
    }
}
