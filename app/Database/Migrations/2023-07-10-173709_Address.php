<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Address extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'BIGINT',
                'unsigned' => true,
                'auto_increment' => true
            ],
            'zipCode' => [
                'type' => 'VARCHAR',
                'constraint' => 8,
                'null' => false
            ],
            'street' => [
                'type' => 'VARCHAR',
                'constraint' => 150,
                'null' => false
            ],
            'number' => [
                'type' => 'VARCHAR',
                'constraint' => 5,
                'null' => false
            ],
            'supplemental' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => false
            ],
            'district' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => false
            ],
            'city' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => false
            ],
            'state' => [
                'type' => 'VARCHAR',
                'constraint' => 20,
                'null' => false
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('addresses');
    }

    public function down()
    {
        $this->forge->dropTable('addresses');
    }
}