<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Beranda extends BaseController
{
	public function index()
	{
		$data = ['title' => 'Beranda'];
		return view('admin/index', $data);
	}
}
