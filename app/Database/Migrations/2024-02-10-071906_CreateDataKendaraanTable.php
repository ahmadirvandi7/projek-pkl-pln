<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateDataKendaraanTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'nopol_kendaraan' => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
            ],
            'merk' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'created_at' => [
                'type'          => 'DATETIME',
                'null'          => true,
            ],
            'updated_at' => [
                'type'          => 'DATETIME',
                'null'          => true,
            ],
            'deleted_at' => [
                'type'          => 'DATETIME',
                'null'          => true,
            ],
        ]);
        $this->forge->addKey('nopol', true);
        $this->forge->createTable('kendaraan');
    }

    public function down()
    {
        $this->forge->dropTable('kendaraan');
    }
}
