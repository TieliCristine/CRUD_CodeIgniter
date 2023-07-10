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
                'auto_increment' => true,
            ],
            'quantity' => [
                'type' => 'INT',
                'null' => 'false'
            ],
            'finalPrice' => [
                'type' => 'INT',
                'null' => 'false'
            ],
            'customer' => [
                // foreign key
            ],
            'supplier' => [
                // foreign key
            ],
            'product' => [
                // foreign key
            ],
            'status' => [
                // foreign key
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('budgets');
    }

    public function down()
    {
        $this->forge->dropTable('budgets');
    }
}