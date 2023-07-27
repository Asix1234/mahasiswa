<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DataMhsSeed extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nim' => 111,
                'nama' => 'sugeng',
                'tgl_lahir' => 20000724,
                'angkatan' => 21,
                'prodi_id' => 111,
                'type_id' => 11,
            ],
            [
                'nim' => 69,
                'nama' => 'yanto',
                'tgl_lahir' => 20021212,
                'angkatan' => 20,
                'prodi_id' => 112,
                'type_id' => 13,
            ]
        ];
        $this->db->table('datamhs')->insertBatch($data);
    }
}
