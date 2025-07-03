<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DiskonSeeder extends Seeder
{
    public function run()
    {
        $tanggalAwal = date('Y-m-d');
        $now = date('Y-m-d H:i:s');

        for ($i = 0; $i < 10; $i++) {
            $data = [
                'tanggal'    => date('Y-m-d', strtotime("+$i day", strtotime($tanggalAwal))),
                'nominal'    => rand(50000, 150000),
                'created_at' => $now,
                'updated_at' => $now,
            ];
            $this->db->table('diskon')->insert($data);
        }
    }
}
