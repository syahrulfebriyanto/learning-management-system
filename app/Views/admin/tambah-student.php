<?= $this->extend('templates/index'); ?>
<?= $this->section('content'); ?>
<!-- Page Heading -->
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Peserta Didik</h1>
    </div>
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-12 col-md-12 mb-12">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <form action="<?= base_url() ?>/admin/student/simpan" method="POST" enctype="multipart/form-data">
                        <?= csrf_field(); ?>
                        <div class="form-group row">
                            <label for="nis" class="col-sm-2 col-form-label">NIS</label>
                            <div class="col-sm-3">
                                <input name="nis" type="text" class="form-control <?= ($validation->hasError('nis')) ? 'is-invalid' : ''; ?>" id="nis">
                                <div class="invalid-feedback"><?= $validation->getError('nis'); ?></div>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <label for="nama" class="col-sm-2 col-form-label">Nama <sup class="text-danger">*</sup></label>
                            <div class="col-sm-6">
                                <input name="nama" type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" id="nama">
                                <div class="invalid-feedback"><?= $validation->getError('nama'); ?></div>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <label for="jenis_kelamin" class="col-sm-2 col-form-label">Jenis Kelamin <sup class="text-danger">*</sup></label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input <?= ($validation->hasError('jenis_kelamin')) ? 'is-invalid' : ''; ?>" type="radio" name="jenis_kelamin" id="laki_laki" value="Laki-laki">
                                <label class="form-check-label" for="laki_laki">Laki-laki</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input <?= ($validation->hasError('jenis_kelamin')) ? 'is-invalid' : ''; ?>" type="radio" name="jenis_kelamin" id="perempuan" value="Perempuan">
                                <label class="form-check-label" for="perempuan">Perempuan</label>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <label for="tahun_masuk" class="col-sm-2 col-form-label">Tahun Masuk <sup class="text-danger">*</sup></label>
                            <div class="col-sm-2">
                                <input name="tahun_masuk" type="text" class="form-control <?= ($validation->hasError('tahun_masuk')) ? 'is-invalid' : ''; ?>" id="tahun_masuk">
                                <div class="invalid-feedback"><?= $validation->getError('tahun_masuk'); ?></div>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <label for="kelas" class="col-sm-2 col-form-label">Kelas <sup class="text-danger">*</sup></label>
                            <div class="col-sm-2">
                                <select class="form-control <?= ($validation->hasError('kelas')) ? 'is-invalid' : ''; ?>" id="kelas" name="kelas">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                            <div class="invalid-feedback"><?= $validation->getError('kelas'); ?></div>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <label for="tempat_lahir" class="col-sm-2 col-form-label">Tempat Lahir </label>
                            <div class="col-sm-6">
                                <input name="tempat_lahir" type="text" class="form-control <?= ($validation->hasError('tempat_lahir')) ? 'is-invalid' : ''; ?>" id="tempat_lahir">
                                <div class="invalid-feedback"><?= $validation->getError('tempat_lahir'); ?></div>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <label for="example-date-input" class="col-2 col-form-label">Tanggal Lahir</label>
                            <div class="col-3">
                                <input class="form-control <?= ($validation->hasError('tanggal_lahir')) ? 'is-invalid' : ''; ?>" type="date" value="1990-08-19" id="tanggal_lahir" name="tanggal_lahir">
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <label for="agama" class="col-sm-2 col-form-label">Agama</label>
                            <div class="col-sm-2">
                                <select class="form-control <?= ($validation->hasError('agama')) ? 'is-invalid' : ''; ?>" id="agama" name="agama">
                                    <option>>--Pilih--< </option>
                                    <option>ISLAM</option>
                                    <option>KRISTEN</option>
                                    <option>KATHOLIK</option>
                                    <option>BUDHA</option>
                                    <option>HINDU</option>
                                </select>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                            <div class="col-sm-6">
                                <input name="alamat" type="text" class="form-control <?= ($validation->hasError('alamat')) ? 'is-invalid' : ''; ?>" id="alamat">
                                <div class="invalid-feedback"><?= $validation->getError('alamat'); ?></div>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <label for="foto" class="col-sm-2 col-form-label">Foto</label>
                            <div class="col-sm-2">
                                <img src="/assets/template/img/default.png" class="img-thumbnail img-preview">
                            </div>
                            <div class="col-sm-6">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input <?= ($validation->hasError('foto')) ? 'is-invalid' : ''; ?>" id="foto" name="foto" onchange="previewImg()">
                                    <div id="validationServer03Feedback" class="invalid-feedback">
                                        <?= $validation->getError('foto'); ?>
                                    </div>
                                    <label class="custom-file-label" for="foto">Pilih Gambar</label>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <label for="status_id" class="col-sm-2 col-form-label">Status_id</label>
                            <div class="col-sm-6">
                                <input name="status_id" type="text" class="form-control <?= ($validation->hasError('status_id')) ? 'is-invalid' : ''; ?>" id="status_id">
                                <div class="invalid-feedback"><?= $validation->getError('status_id'); ?></div>
                            </div>
                        </div>
                        <hr>
                        <!-- <div class="form-group row">
                            <label for="username" class="col-sm-2 col-form-label">Username <sup class="text-danger">*</sup></label>
                            <div class="col-sm-6">
                                <input name="username" type="text" class="form-control " id="username">
                               
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <label for="password" class="col-sm-2 col-form-label">Password <sup class="text-danger">*</sup></label>
                            <div class="col-sm-6">
                                <input name="password" type="password" class="form-control " id="password">
                             
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <label for="password_confirm" class="col-sm-2 col-form-label">Konfirmasi Password<sup class="text-danger">*</sup></label>
                            <div class="col-sm-6">
                                <input name="password_confirm" type="password" class="form-control " id="password_confirm">
                               
                            </div>
                        </div>
                        <hr> -->
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <button class="btn btn-primary float-right" type="submit">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>