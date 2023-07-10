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
                'auto_increment' => true,
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => 225,
                'unsigned' => true,
                'null' => 'false'
            ],
            'password' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => 'false'
            ],
            'cpf' => [
                'type' => 'VARCHAR',
                'constraint' => 112,
                'unsigned' => true,
                'null' => 'false'
            ],
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => 225,
                'null' => 'false'
            ],
            'birthdate' => [
                'type' => 'DATE',
            ],
            'job_position' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => 'false'
            ],
            'access_lvl' => [
                //foreign key
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
