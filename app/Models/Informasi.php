<?php

namespace App\Models;

use CodeIgniter\Model;

class Informasi extends Model
{
	protected $table                = 'informasi';
	protected $primaryKey           = 'id';

	protected $allowedFields        = ['judul', 'slug', 'konten'];

	// Dates
	protected $useTimestamps        = true;
	protected $dateFormat           = 'datetime';
	protected $createdField         = 'created_at';
	protected $updatedField         = 'updated_at';
	protected $deletedField         = 'deleted_at';

	public function getInformasi($slug = false)
	{
		if ($slug == false) {
			return $this->findAll();
		}
		return $this->where(['slug' => $slug])->first();
	}
}
