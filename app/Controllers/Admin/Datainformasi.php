<?php

namespace App\Controllers\Admin;

use App\Models\Informasi;
use App\Controllers\BaseController;
use App\Models\InformasiModel;

class DataInformasi extends BaseController
{
	protected $informasiModel;
	public function __construct()
	{
		$this->informasiModel = new InformasiModel();
	}
	public function index()
	{
		$data = [
			'title' => 'Data Informasi',
			'data_informasi' => $this->informasiModel->findAll()
		];
		return view('admin/data-informasi', $data);
	}
	public function tambah()
	{
		$data = [
			'title' => 'Tambah Data Informasi',
			'validation' => \Config\Services::validation(),
		];
		return view('admin/tambah-informasi', $data);
	}
	public function simpan()
	{

		if (!$this->validate([
			'judul' => [
				'rules' => 'required',
				'errors' => [
					'required' => '{field} harus di isi',
				]
			],
			'konten' => [
				'rules' => 'required',
				'errors' => [
					'required' => '{field} harus di isi',
				]
			]
		])) {
			return redirect()->to('/admin/informasi/tambah')->withInput();
		}


		$slug = url_title($this->request->getVar('judul'), '-', true);
		$this->informasiModel->save([
			'judul' => $this->request->getVar('judul'),
			'slug' => $slug,
			'konten' => $this->request->getVar('konten'),
		]);
		session()->setFlashdata('pesan', 'Informasi Berhasil Ditambahkan');
		return redirect()->to('/admin/informasi');
	}
	public function detail($slug)
	{
		$data = [
			'title' => 'Detail Informasi',
			'informasi' => $this->informasiModel->getInformasi($slug)
		];
		if (empty($data['informasi'])) {
			throw new \CodeIgniter\Exceptions\PageNotFoundException('Judul informasi ' . $slug . ' tidak tersedia.');
		}
		return view('admin/detail-informasi', $data);
	}
	public function ubah($slug)
	{
		$data = [
			'title' => 'Ubah Informasi',
			'validation' => \config\Services::validation(),
			'informasi' => $this->informasiModel->getInformasi($slug)
		];
		return view('admin/ubah-informasi', $data);
	}
	public function update()
	{
		if (!$this->validate([
			'judul' => [
				'rules' => 'required',
				'errors' => [
					'required' => '{field} harus di isi',
				]
			],
			'konten' => [
				'rules' => 'required',
				'errors' => [
					'required' => '{field} harus di isi',
				]
			]
		])) {
			return redirect()->to('/admin/informasi/ubah/' . $this->request->getVar('slug'))->withInput();
		}
		$slug = url_title($this->request->getVar('judul'), '-', true);
		$this->informasiModel->save([
			'id' => $this->request->getVar('id'),
			'judul' => $this->request->getVar('judul'),
			'slug' => $slug,
			'konten' => $this->request->getVar('konten'),
		]);
		session()->setFlashdata('pesan', 'Informasi Berhasil Diubah');
		return redirect()->to('/admin/informasi');
	}
	public function hapus($id)
	{
		$this->informasiModel->delete($id);
		session()->setFlashdata('pesan', 'Informasi Berhasil Dihapus');
		return redirect()->to('/admin/informasi');
	}
}
