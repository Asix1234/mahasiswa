<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class MahasiswaSeed extends Seeder
{
    public function run()
    {
        $data = [
            [
                'data_id' => 1,
                'nim' => 111,
                'type_id' => 11,
                'prodi_id' => 112
            ]
        ];
        $this->db->table('mahasiswas')->insertBatch($data);
    }
}
