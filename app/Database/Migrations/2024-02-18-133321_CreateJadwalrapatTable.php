<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateJadwalrapatTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'tanggal' => [
                'type' => 'DATE',
            ],
            'mulai' => [
                'type' => 'TIME',
            ],
            'selesai' => [
                'type' => 'TIME',
            ],
            'agenda' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'ruangan' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'bidang' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'jumlah_peserta' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
            ],
            'vendor' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'status_ruangan' => [
                'type' => 'ENUM',
                'constraint' => ['Tersedia', 'Sedang Digunakan'],
                'default' => 'Tersedia',
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('jadwalrapat');
    }

    public function down()
    {
        $this->forge->dropTable('jadwalrapat');
    }
}
