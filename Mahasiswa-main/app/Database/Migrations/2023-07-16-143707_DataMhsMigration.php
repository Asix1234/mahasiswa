<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DataMhsMigration extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'nim' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'nama' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'tgl_lahir' => [
                'type' => 'date',
            ],
            'angkatan' => [
                'type' => 'INT',
                'constraint' => 5,
            ],
            'prodi_id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
            ],
            'type_id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
            ],
            
        ]);
        $this->forge->addKey('nim',true);
        $this->forge->addForeignKey('prodi_id','prodi','prodi_id','CASCADE','CASCADE');
        $this->forge->addForeignKey('type_id','typemhs','type_id','CASCADE','CASCADE');
        $this->forge->createTable('datamhs');
    }

    public function down()
    {
        $this->forge->dropForeignKey('datamhs', 'datamhs_prodi_id_foreign');
        $this->forge->dropForeignKey('datamhs', 'datamhs_type_id_foreign');
        $this->forge->dropTable('datamhs');
    }
}
