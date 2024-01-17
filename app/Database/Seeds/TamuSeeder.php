<?php

namespace App\Database\Seeds;

use App\Models\TamuModel;
use CodeIgniter\Database\Seeder;

class TamuSeeder extends Seeder
{
    public function run()
    {
        $tamuModel = new TamuModel();

        $tamuModel->save([
            'nama_tamu' => 'Ahmad Irvandi',
            'asal_instansi' => 'Unila',
            'no_telepon' => '0895621851690',
            'tanggal_waktu' => '2024-01-15 11:00:00',
        ]);

        $tamuModel->save([
            'nama_tamu' => 'Nurul Fadilah',
            'asal_instansi' => 'Unila',
            'no_telepon' => '082235284028',
            'tanggal_waktu' => '2024-01-15 10:30:00',
        ]);

        $tamuModel->save([
            'nama_tamu' => 'Aninda Revi Oktaviani',
            'asal_instansi' => 'Unila',
            'no_telepon' => '085838734104',
            'tanggal_waktu' => '2024-01-15 11:00:00',
        ]);
    }
}
