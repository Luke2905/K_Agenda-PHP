<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Login extends Migration
{
    public function up()
    {
        $this->forge->addField(  //metodo para criar as colunas e atributos da tabela: 
        [
            'id' =>[
               'type'           => 'INT',
               'constraint'     => 5,
               'unsigned'       => true,
               'auto_increment' => true,
            ], 
            'nome' =>[
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],
            'senha' =>[
                'type' => 'VARCHAR',
                'constraint' => 25,
                'null' => false,
            ],
            'email' =>[
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => false,
            ],
        ]
        );
        $this->forge->addKey('id', true);
        $this->forge->createTable('login');
    }

    public function down()
    {
        $this->forge->dropTable('login');
    }
}
