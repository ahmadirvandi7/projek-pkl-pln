<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateDaftarPemesananTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_driver' => [
                'type'       => 'VARCHAR',
                'constraint'   => '255',
            ],
            'nomor_polisi' => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
            ],
            'tanggal_berangkat' => [
                'type'       => 'DATE',
            ],
            'tanggal_kedatangan' => [
                'type'       => 'DATE',
            ],
            'asal' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'tujuan' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'keperluan' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'status'  => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
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
        $this->forge->createTable('daftar_pemesanan');
    }

    public function down()
    {
        $this->forge->dropTable('daftar_pemesanan');
    }
}
