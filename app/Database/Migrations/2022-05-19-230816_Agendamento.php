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
        ],
        );
    }

    public function down()
    {
        //
    }
}
