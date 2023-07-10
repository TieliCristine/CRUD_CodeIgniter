<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Customer extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'BIGINT',
                'unsigned' => true,
                'auto_increment' => true
            ],
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => 225,
                'null' => false
            ],
            'birthdate' => [
                'type' => 'DATE',
                'null' => false
            ],
            'address' => [
                'type' => 'BIGINT',
                'null' => false
            ],
            'personalData' => [
                'type' => 'BIGINT',
                'null' => false
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('address', 'addresses', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('personalData', 'personalData', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('customers');
    }

    public function down()
    {
        $this->forge->dropTable('customers');
    }
}
