<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'BIGINT',
                'unsigned' => true,
                'auto_increment' => true
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => 225,
                'unique' => true,
                'null' => false
            ],
            'password' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => false
            ],
            'cpf' => [
                'type' => 'VARCHAR',
                'constraint' => 112,
                'unique' => true,
                'null' => false
            ],
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => 225,
                'null' => false
            ],
            'birthdate' => [
                'type' => 'DATE',
            ],
            'jobPosition' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => false
            ],
            'accessLvl' => [
                'type' => "ENUM('LOW', 'MEDIUM', 'HIGH', 'ADMIN')",
                'default' => 'LOW'
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('users');
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}
