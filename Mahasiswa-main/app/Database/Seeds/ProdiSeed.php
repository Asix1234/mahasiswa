<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProdiSeed extends Seeder
{
    public function run()
    {
        $data = [
            [
                'prodi_id' => 111,
                'nama_prodi' => 'informatika'
            ],
            [
                'prodi_id' => 112,
                'nama_prodi' => 'teknik komputer'
            ],
            [
                'prodi_id' => 113,
                'nama_prodi' => 'teknik elektro'
            ],
            [
                'prodi_id' => 114,
                'nama_prodi' => 'farmasi'
            ],
            [
                'prodi_id' => 115,
                'nama_prodi' => 'pgsd'
            ],
            ];
            $this->db->table('prodi')->insertBatch($data);
    }
}
