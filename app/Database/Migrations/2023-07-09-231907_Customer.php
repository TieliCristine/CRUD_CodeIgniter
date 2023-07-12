<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Customer extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'              => 'BIGINT',
                'unsigned'          => true,
                'auto_increment'    => true
            ],
            'name' => [
                'type'              => 'VARCHAR',
                'constraint'        => 225,
                'null'              => false
            ],
            'birthdate' => [
                'type'              => 'DATE',
                'null'              => false
            ],
            'id_address' => [
                'type'              => 'BIGINT',
                'unsigned'          => true,
                'null'              => false
            ],
            'id_personalData' => [
                'type'              => 'BIGINT',
                'unsigned'          => true,
                'null'              => false
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('id_address', 'addresses', 'id', 'CASCADE', 'CASCADE', 'id_address_fk');
        $this->forge->addForeignKey('id_personalData', 'personalData', 'id', 'CASCADE', 'CASCADE', 'id_personalData_fk');
        $this->forge->createTable('customers');
    }

    public function down()
    {
        $this->forge->dropTable('customers');
    }
}
