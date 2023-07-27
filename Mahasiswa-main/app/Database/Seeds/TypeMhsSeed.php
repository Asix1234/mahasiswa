<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TypeMhsSeed extends Seeder
{
    public function run()
    {
       $data = [
            [
                'type_id' => 11,
                'type_mhs' => 'reguler'
            ],
            [
                'type_id' => 12,
                'type_mhs' => 'kipk'
            ],
            [
                'type_id' => 13,
                'type_mhs' => 'tahfidz'
            ],
            [
                'type_id' => 14,
                'type_mhs' => 'flsp'
            ],
        ];
        $this->db->table('typemhs')->insertBatch($data);
    }
}
