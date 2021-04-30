<?php

namespace App\Models;

use CodeIgniter\Model;

class StudentModel extends Model
{
	protected $table                = 'student';
	protected $primaryKey           = 'id_student';
	protected $allowedFields        = ['nis', 'nama', 'jenis_kelamin', 'tempat_lahir', 'tanggal_lahir', 'agama', 'alamat', 'tahun_masuk', 'foto', 'status_id'];
	// Dates
	// protected $useTimestamps        = true;
	// protected $dateFormat           = 'datetime';
	// protected $createdField         = 'created_at';
	// protected $updatedField         = 'updated_at';
	// protected $deletedField         = 'deleted_at';
	public function getStudent($id_student = false)
	{
		if ($id_student == false) {
			return $this->findAll();
		}
		return $this->where(['id_student' => $id_student])->first();
	}
}
