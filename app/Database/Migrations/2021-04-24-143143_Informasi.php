<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Informasi extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				// agar nilainya positif semua unsigned nya di isi dengan true
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'judul'       => [
				'type'       => 'VARCHAR',
				'constraint' => '255',
			],
			'slug'       => [
				'type'       => 'VARCHAR',
				'constraint' => '255',
			],
			'konten' => [
				'type'       => 'TEXT',

			],
			'created_at' => [
				'type'       => 'DATETIME',
				'null' => TRUE
			],
			'updated_at' => [
				'type'       => 'DATETIME',
				'null' => TRUE
			],
		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('informasi');
	}

	public function down()
	{
		$this->forge->dropTable('informasi');
	}
}
