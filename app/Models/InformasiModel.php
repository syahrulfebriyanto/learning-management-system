<?php

namespace App\Models;

use CodeIgniter\Model;

class InformasiModel extends Model
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
		// jika slugnya  kosong cari semua data
		if ($slug == false) {
			return $this->findAll();
		}
		return $this->where(['slug' => $slug])->first();
	}
}
