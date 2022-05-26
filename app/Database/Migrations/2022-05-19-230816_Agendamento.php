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
            'id_pro' =>[
                'type' => 'INT',
                'constraint' =>10,
                'unsigned'       => true,
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
        ]
        );
        $this->forge->addKey('id_agend', true);
         $this->forge->createTable('agendamento');
        $this->forge->foreignkey('id_pro');

    }

    public function down()
    {
        $this->forge->dropTable('agendamento');
        $this->forge->dropForeignKey('agendamento','id_pro');
    }
}
