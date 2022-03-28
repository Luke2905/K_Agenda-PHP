<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Cadastros extends Migration
{
    public function up()
    {
      $this->forge->addField(
          [
              'id' =>[
                  'type' => 'INT',
                  'constraint' =>10,
                  'unsigned'       => true,
               'auto_increment' => true,
              ],
              'nome' =>[
                  'type' => 'VARCHAR',
                  'constraint' =>100,
                  'null' => false,
              ],
              'endereco' =>[
                  'type' => 'VARCHAR',
                  'constraint' => 50,
                  'null' => false,
              ],
              'cidade' =>[
                  'type' => 'VARCHAR',
                  'constraint'=>35,
                  'null' => false,
              ],
              'uf' =>[
                  'type' => 'CHAR',
                  'constraint' =>2,
                  'null' => false,
              ],
              'telefone' =>[
                  'type' => 'INT',
                  'constraint' =>11,
                  'null' => false,
              ],
          ]
          );
          $this->forge->addKey('id', true);
          $this->forge->createTable('cadastros');
    }

    public function down()
    {
        $this->forge->dropTable('cadastros');
    }
}
