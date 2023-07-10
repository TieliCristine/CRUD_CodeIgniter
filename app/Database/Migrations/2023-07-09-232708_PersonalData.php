<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PersonalData extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'BIGINT',
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'cpf' => [
                'type' => 'VARCHAR',
                'unsigned' => true,
                'constraint' => 11,
                'null' => 'false'
            ],
            'cnpj' => [
                'type' => 'VARCHAR',
                'unsigned' => true,
                'constraint' => 14,
                'null' => 'false'
            ],
            'phone' => [
                'type' => 'VARCHAR',
                'null' => 'false'
            ],
            'email' => [
                'type' => 'VARCHAR',
                'null' => 'false'
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('personal_data');
    }

    public function down()
    {
        $this->forge->dropTable('personal_data');
    }
}
