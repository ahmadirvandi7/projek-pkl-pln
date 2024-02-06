<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateDataTamuTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'          => 'INT',
                'constraint'    => 5,
                'unsigned'      => true,
                'auto_increment'=> true,
            ],
            'nama_tamu' => [
                'type'          => 'VARCHAR',
                'constraint'    => '255',
            ],
            'tanggal_waktu' => [
                'type'          => 'DATETIME',
                'null'          => true,
            ],
            'asal_instansi' => [
                'type'          => 'VARCHAR',
                'constraint'    => '255',
                'null'          => true,
            ],
            'no_telepon' => [
                'type'          => 'VARCHAR',
                'constraint'    => '20',
                'null'          => true,
            ],
            'tujuan' => [
                'type'          => 'TEXT',
                'null'          => true,
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

        $this->forge->addKey('id', true);
        $this->forge->createTable('data_tamu');
    }

    public function down()
    {
        $this->forge->dropTable('tamu');
    }
}
