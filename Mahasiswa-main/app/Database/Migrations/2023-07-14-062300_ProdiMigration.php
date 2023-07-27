<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ProdiMigration extends Migration
{
    public function up()
    {
        $this->forge->addField(
            [
                'prodi_id' => [
                    'type' => 'INT',
                    'constraint' => 5,
                    'unsigned' => true,
                    'auto_increment' => true,
                ],
                'nama_prodi' => [
                    'type' => 'VARCHAR',
                    'constraint' => 255
                ]
            ]
        );
        $this->forge->addKey('prodi_id', true);
        $this->forge->createTable('prodi');
    }

    public function down()
    {
        $this->forge->dropTable('prodi');
    }
}
