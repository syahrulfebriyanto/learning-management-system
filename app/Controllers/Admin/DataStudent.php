<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\StudentModel;

class DataStudent extends BaseController
{
	protected $studentModel;
	public function __construct()
	{
		$this->studentModel = new StudentModel();
	}
	public function index()
	{
		$data = [
			'title' => 'Data Peserta Didik',
			'data_student' => $this->studentModel->findAll()
		];
		return view('admin/data-student', $data);
	}
	public function tambah()
	{
		$data = [
			'title' => 'Tambah Data Peserta Didik',
			'validation' => \Config\Services::validation(),
		];
		return view('admin/tambah-student', $data);
	}
	public function simpan()
	{
		if (!$this->validate([
			'nis' => [
				'rules' => 'required|is_unique[student.nis]',
				'errors' => [
					'required' => '{field} harus di isi',
					'is_unique' => '{field} Nis Sudah Terdaftar'
				]
			],
			'nama' => [
				'rules' => 'required',
				'errors' => [
					'required' => '{field} harus di isi',
				]
			],
			'jenis_kelamin' => [
				'rules' => 'required',
				'errors' => [
					'required' => '{field} harus di isi',
				]
			],
			'tempat_lahir' => [
				'rules' => 'required',
				'errors' => [
					'required' => '{field} harus di isi',
				]
			],
			'tanggal_lahir' => [
				'rules' => 'required',
				'errors' => [
					'required' => '{field} harus di isi',
				]
			],
			'agama' => [
				'rules' => 'required',
				'errors' => [
					'required' => '{field} harus di isi',
				]
			],
			'alamat' => [
				'rules' => 'required',
				'errors' => [
					'required' => '{field} harus di isi',
				]
			],
			'tahun_masuk' => [
				'rules' => 'required',
				'errors' => [
					'required' => '{field} harus di isi',
				]
			],
			'foto' => [
				'rules' => 'max_size[foto,1024]|is_image[foto]|mime_in[foto,image/jpg,image/jpeg,image/png]',
				'errors' => [
					'max_size' => 'Ukuran gambar terlalu besar',
					'is_image' => 'Yang anda pilih bukan gambar',
					'mime_in' => 'Yang anda pilih bukan gambar'
				]
			],
		])) {
			return redirect()->to('/admin/student/tambah')->withInput();
		}
		// ambil gambar sampul
		$filefoto = $this->request->getFile('foto');
		//Jika tidak ada gambar sampul
		if ($filefoto->getError() == 4) {
			$filenama = 'default.png';
		} else {
			//generate nama sampul random
			// ambil nama file sampul
			$filenama = $filefoto->getRandomName();
			// Pindahkan nama file ke folder img
			$filefoto->move('assets/template/img', $filenama);
		}
		$this->studentModel->save([
			'nis' => $this->request->getVar('nis'),
			'nama' => $this->request->getVar('nama'),
			'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
			'tempat_lahir' => $this->request->getVar('tempat_lahir'),
			'tanggal_lahir' => $this->request->getVar('tanggal_lahir'),
			'agama' => $this->request->getVar('agama'),
			'alamat' => $this->request->getVar('alamat'),
			'tahun_masuk' => $this->request->getVar('tahun_masuk'),
			'foto' => $filenama,
			'status_id' => $this->request->getVar('status_id'),
		]);
		session()->setFlashdata('pesan', 'Peserta Didik Berhasil Ditambahkan');
		return redirect()->to('/admin/student');
	}
	public function detail($id_student)
	{
		$data = [
			'title' => 'Detail Peserta Didik',
			'student' => $this->studentModel->getStudent($id_student)
		];
		if (empty($data['student'])) {
			throw new \CodeIgniter\Exceptions\PageNotFoundException('ID Peserta Didik ' . $id_student . ' tidak tersedia.');
		}
		return view('admin/detail-student', $data);
	}
	public function ubah($id_student)
	{
		$data = [
			'title' => 'Ubah Peserta Didik',
			'validation' => \config\Services::validation(),
			'student' => $this->studentModel->getStudent($id_student)
		];
		return view('admin/ubah-student', $data);
	}
	public function update($id_student)
	{
		if (!$this->validate([
			'nis' => [
				'rules' => 'required|is_unique[student.nis]',
				'errors' => [
					'required' => '{field} harus di isi',
					'is_unique' => '{field} Nis Sudah Terdaftar'
				]
			],
			'nama' => [
				'rules' => 'required',
				'errors' => [
					'required' => '{field} harus di isi',
				]
			],
			'jenis_kelamin' => [
				'rules' => 'required',
				'errors' => [
					'required' => '{field} harus di isi',
				]
			],
			'tempat_lahir' => [
				'rules' => 'required',
				'errors' => [
					'required' => '{field} harus di isi',
				]
			],
			'tanggal_lahir' => [
				'rules' => 'required',
				'errors' => [
					'required' => '{field} harus di isi',
				]
			],
			'agama' => [
				'rules' => 'required',
				'errors' => [
					'required' => '{field} harus di isi',
				]
			],
			'alamat' => [
				'rules' => 'required',
				'errors' => [
					'required' => '{field} harus di isi',
				]
			],
			'tahun_masuk' => [
				'rules' => 'required',
				'errors' => [
					'required' => '{field} harus di isi',
				]
			],
			'foto' => [
				'rules' => 'max_size[foto,1024]|is_image[foto]|mime_in[foto,image/jpg,image/jpeg,image/png]',
				'errors' => [
					'max_size' => 'Ukuran gambar terlalu besar',
					'is_image' => 'Yang anda pilih bukan gambar',
					'mime_in' => 'Yang anda pilih bukan gambar'
				]
			],
		])) {
			return redirect()->to('/admin/student/ubah/' . $this->request->getVar('id_student'))->withInput();
		}
		$this->studentModel->save([
			'nis' => $this->request->getVar('nis'),
			'nama' => $this->request->getVar('nama'),
			'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
			'tempat_lahir' => $this->request->getVar('tempat_lahir'),
			'tanggal_lahir' => $this->request->getVar('tanggal_lahir'),
			'agama' => $this->request->getVar('agama'),
			'alamat' => $this->request->getVar('alamat'),
			'tahun_masuk' => $this->request->getVar('tahun_masuk'),
			// 'foto' => $filenama,
			'status_id' => $this->request->getVar('status_id'),
		]);
		session()->setFlashdata('pesan', 'Data Peserta Didik Berhasil Diubah');
		return redirect()->to('/admin/student');
	}
	public function hapus($id_student)
	{
		// cari gambar berdasarkan id
		$student = $this->studentModel->find($id_student);
		if ($student['foto'] != 'default.png') {
			// menghapus gambar
			unlink('assets/template/img/' . $student['foto']);
		}
		$this->studentModel->delete($id_student);
		session()->setFlashdata('pesan', 'Data Peserta Didik Berhasil Dihapus');
		return redirect()->to('/admin/student');
	}
}
