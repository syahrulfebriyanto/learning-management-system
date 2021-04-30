<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Student extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_student'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				// agar nilainya positif semua unsigned nya di isi dengan true
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'nis'       => [
				'type'       => 'VARCHAR',
				'constraint' => '45',
				'null' => TRUE
			],
			'nama'       => [
				'type'       => 'VARCHAR',
				'constraint' => '255',
			],
			'jenis_kelamin' => [
				'type'       => 'ENUM',
				'constraint' => ['Laki-laki', 'Perempuan'],
			],
			'tempat_lahir' => [
				'type'       => 'VARCHAR',
				'constraint' => '255',
			],
			'tanggal_lahir' => [
				'type'       => 'DATE',
				'null' => TRUE
			],
			'agama' => [
				'type'       => 'VARCHAR',
				'constraint' => '50',
			],
			'alamat' => [
				'type'       => 'TEXT',
			],
			'tahun_masuk' => [
				'type'       => 'YEAR',
			],
			'foto' => [
				'type'       => 'VARCHAR',
				'constraint' => '255',
				'default' => 'default.png',
			],
			'status_id' => [
				'type'       => 'TINYINT',
				'constraint' => '1',
				'default' => '0',
			],
		]);
		$this->forge->addKey('id_student', true);
		$this->forge->createTable('student');
	}

	public function down()
	{
		$this->forge->dropTable('student');
	}
}
