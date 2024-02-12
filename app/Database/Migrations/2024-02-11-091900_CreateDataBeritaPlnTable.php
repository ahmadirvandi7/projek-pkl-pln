<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateDataBeritaPlnTable extends Migration
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
            'kategori' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'tanggal' => [
                'type' => 'DATE',
            ],
            'media_pemberitaan' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'judul_pemberitaan' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'link_pemberitaan' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('berita_pln');
    }

    public function down()
    {
        $this->forge->dropTable('berita_pln');
    }
}
