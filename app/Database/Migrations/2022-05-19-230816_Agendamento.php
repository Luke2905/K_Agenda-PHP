<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Agendamento extends Migration
{
    public function up()
    {
        $this->forge->addField(
        [
            'id_agend'=>[
                'type' =>'INT',
                    'constraint' => true,
                    'auto_inclement' => true,
            ],
        ],
        );
    }

    public function down()
    {
        //
    }
}
