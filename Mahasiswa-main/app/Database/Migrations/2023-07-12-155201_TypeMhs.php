<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use PHPUnit\Framework\Constraint\Constraint;

class TypeMhs extends Migration
{
    public function up()
    {
        $this->forge->addField(
            [
                'type_id' => [
                    'type' => 'INT',
                    'constraint' => 5,
                    'unsigned' => true,
                    'auto_increment' => true,
                ],
                'type_mhs' => [
                    'type' => 'VARCHAR',
                    'constraint' => 255
                ]
            ]
        );
        $this->forge->addKey('type_id', true);
        $this->forge->createTable('typemhs');
    }

    public function down()
    {
        $this->forge->dropTable('typemhs');
    }
}
