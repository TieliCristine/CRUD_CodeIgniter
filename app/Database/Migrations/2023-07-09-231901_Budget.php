<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Budget extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'BIGINT',
                'unsigned' => true,
                'auto_increment' => true
            ],
            'quantity' => [
                'type' => 'INT',
                'unsigned' => true,
                'null' => false
            ],
            'finalPrice' => [
                'type' => 'INT',
                'null' => false
            ],
            'customer' => [
                'type' => 'BIGINT',
                'null' => false
            ],
            'supplier' => [
                'type' => 'BIGINT',
                'null' => false
            ],
            'product' => [
                'type' => 'BIGINT',
                'null' => false
            ],
            'status' => [
                'type' => "ENUM('PENDING', 'PROGRESSING', 'AUTHORIZED', 'CONCLUDED', 'DELIVERED')",
                'default' => 'PENDING'
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('customer', 'customers', 'id', 'NO ACTION', 'NO ACTION');
        $this->forge->addForeignKey('supplier', 'suppliers', 'id', 'NO ACTION', 'NO ACTION');
        $this->forge->addForeignKey('product', 'products', 'id', 'NO ACTION', 'NO ACTION');
        $this->forge->createTable('budgets');
    }

    public function down()
    {
        $this->forge->dropTable('budgets');
    }
}