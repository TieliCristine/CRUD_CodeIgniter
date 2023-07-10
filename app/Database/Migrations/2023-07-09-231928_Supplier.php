<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Supplier extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'BIGINT',
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'corporative_name' => [
                'type' => 'VARCHAR',
                'constraint' => 225,
                'null' => 'false'
            ],
            'sales_representative' => [
                'type' => 'VARCHAR',
                'constraint' => 225,
                'null' => 'false'
            ],
            'address' => [
                // foreign key
            ],
            'personal_data' => [
                // foreign key
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('suppliers');
    }

    public function down()
    {
        $this->forge->dropTable('suppliers');
    }
}
