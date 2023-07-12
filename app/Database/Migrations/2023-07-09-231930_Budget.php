<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Budget extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'              => 'BIGINT',
                'unsigned'          => true,
                'auto_increment'    => true
            ],
            'quantity' => [
                'type'              => 'INT',
                'constraint'        => 20,
                'unsigned'          => true,
                'null'              => false
            ],
            'finalPrice' => [
                'type'              => 'INT',
                'constraint'        => 20,
                'null'              => false
            ],
            'id_customer' => [
                'type'              => 'BIGINT',
                'unsigned'          => true,
                'null'              => false
            ],
            'id_supplier' => [
                'type'              => 'BIGINT',
                'unsigned'          => true,
                'null'              => false
            ],
            'id_product' => [
                'type'              => 'BIGINT',
                'unsigned'          => true,
                'null'              => false
            ],
            'status' => [
                'type'              => "ENUM('PENDING', 'PROGRESSING', 'AUTHORIZED', 'CONCLUDED', 'DELIVERED')",
                'default'           => 'PENDING'
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('id_customer', 'customers', 'id', 'NO ACTION', 'NO ACTION', 'id_customer_fk');
        $this->forge->addForeignKey('id_supplier', 'suppliers', 'id', 'NO ACTION', 'NO ACTION', 'id_supplier_fk');
        $this->forge->addForeignKey('id_product', 'products', 'id', 'NO ACTION', 'NO ACTION', 'id_product_fk');
        $this->forge->createTable('budgets');
    }

    public function down()
    {
        $this->forge->dropTable('budgets');
    }
}
