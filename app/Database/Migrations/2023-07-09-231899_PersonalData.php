<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PersonalData extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'              => 'BIGINT',
                'unsigned'          => true,
                'auto_increment'    => true
            ],
            'cpf' => [
                'type'              => 'VARCHAR',
                'constraint'        => 11,
                'null'              => false
            ],
            'cnpj' => [
                'type'              => 'VARCHAR',
                'constraint'        => 14,
                'null'              => false
            ],
            'phone' => [
                'type'              => 'VARCHAR',
                'constraint'        => 12,
                'null'              => false
            ],
            'email' => [
                'type'              => 'VARCHAR',
                'constraint'        => 225,
                'null'              => false
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('personalData');
    }

    public function down()
    {
        $this->forge->dropTable('personalData');
    }
}
