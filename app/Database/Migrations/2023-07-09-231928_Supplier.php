<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Supplier extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'              => 'BIGINT',
                'unsigned'          => true,
                'auto_increment'    => true
            ],
            'corporativeName' => [
                'type'              => 'VARCHAR',
                'constraint'        => 225,
                'null'              => false
            ],
            'salesRepresentative' => [
                'type'              => 'VARCHAR',
                'constraint'        => 225,
                'null'              => false
            ],
            'id_address_supplier' => [
                'type'              => 'BIGINT',
                'unsigned'          => true,
                'null'              => false
            ],
            'id_personalData_supplier' => [
                'type'              => 'BIGINT',
                'unsigned'          => true,
                'null'              => false
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('id_address_supplier', 'addresses', 'id', 'CASCADE', 'CASCADE', 'id_address_supplier_fk');
        $this->forge->addForeignKey('id_personalData_supplier', 'personalData', 'id', 'CASCADE', 'CASCADE', 'id_personalData_supplier_fk');
        $this->forge->createTable('suppliers');
    }

    public function down()
    {
        $this->forge->dropTable('suppliers');
    }
}
