<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Servicos extends Migration
{
    public function up()
    {
        $this->forge->addField(  
            [
                'id_serv' =>[
                   'type'           => 'INT',
                   'constraint'     => 5,
                   'unsigned'       => true,
                   'auto_increment' => true,
                ], 
                'nome_serv' =>[
                    'type'       => 'VARCHAR',
                    'constraint' => 100,
                    'null' => false,
                ],
                'preco_serv' =>[
                    'type' => 'DECIMAL',
                    'constraint' => 10.2,
                    'null' => false,
                ],
                'foto_serv' =>[
                    'type' => 'VARCHAR',
                    'constraint' => 2083,
                    'null' => false,
                ],
                
            ]
            );
            $this->forge->addKey('id_serv', true);
            $this->forge->createTable('servicos');
    }

    public function down()
    {
        $this->forge->dropTable('servicos');
    }
}
