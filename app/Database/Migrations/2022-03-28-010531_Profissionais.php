<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Profissionais extends Migration
{
    public function up()
    {
        $this->forge->addField(
            [
                'id_pro' =>[
                    'type' => 'INT',
                    'constraint' =>10,
                    'unsigned'       => true,
                 'auto_increment' => true,
                ],
                'nome_pro' =>[
                    'type' => 'VARCHAR',
                    'constraint' =>100,
                    'null' => false,
                ],
                'telefone_pro' =>[
                    'type' => 'BIGINT',
                    'constraint' =>11,
                    'null' => false,
                ],
                'foto_pro' =>[
                    'type' => 'VARCHAR',
                    'constraint' => 2083,
                    'null' => false,
                ],
                'email_pro' =>[
                    'type' => 'VARCHAR',
                    'constraint' => 100,
                    'null' => false,
                ],
                'senha_pro' =>[
                    'type' => 'VARCHAR',
                    'constraint' => 25,
                    'null' => false,
                ],

             ]
            );
            $attributes = ['ENGINE' => 'InnoDB'];
            $this->forge->addKey('id_pro', true);
            $this->forge->createTable('profissionais',false,$attributes);
    }

    public function down()
    {
        $this->forge->dropTable('profissionais');
    }
}
