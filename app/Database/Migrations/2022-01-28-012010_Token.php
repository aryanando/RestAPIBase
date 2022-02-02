<?php

namespace App\Database\Migrations;

// AUTHORIZATION ----------

use CodeIgniter\Database\Migration;

class Token extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'username' =>[
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'token' => [
                'type' => 'TEXT'
            ],
        ]);

        $this->forge->createTable('tokens');
    }

    public function down()
    {
        $this->forge->dropTable('tokens');
    }
}
