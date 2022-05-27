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
                'id_agend' =>[
                    'type' => 'INT',
                    'constraint' =>100,
                    'unsigned'  => true,
                 'auto_increment' => true,
                ],
             ]
            );
            $this->forge->addKey('id_pro', true);
            $this->forge->createTable('profissionais');
            /*$this->forge->foreignkey('id_agend');*/
    }

    public function down()
    {
        $this->forge->dropTable('profissionais');
        /*$this->forge->dropForeignKey('Profissionais','id_agend');*/
    }
}
