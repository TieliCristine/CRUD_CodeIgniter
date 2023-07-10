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
                'auto_increment' => true,
            ],
            'zip_code' => [
                'type' => 'VARCHAR',
                'null' => 'false'
            ],
            'street' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => 'false'
            ],
            'number' => [
                'type' => 'VARCHAR',
            ],
            'supplemental' => [
                'type' => 'VARCHAR',
            ],
            'district' => [
                'type' => 'VARCHAR',
                'null' => 'false'
            ],
            'city' => [
                'type' => 'VARCHAR',
                'null' => 'false'
            ],
            'state' => [
                'type' => 'VARCHAR',
                'null' => 'false'
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('addresses');
    }

    public function down()
    {
        $this->forge->dropTable('addresses');
    }
}
