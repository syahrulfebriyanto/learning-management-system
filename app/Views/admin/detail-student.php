<?= $this->extend('templates/index'); ?>
<?= $this->section('content'); ?>
<!-- Page Heading -->
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Detail Peserta Didik</h1>
    </div>

    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-12 col-md-12 mb-12">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row my-3">
                        <div class="col-md-2">
                            <span>NIS</span>
                        </div>
                        <div class="col-md-10">
                            <?= $student['nis']; ?>
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-md-2">
                            <span>Nama</span>
                        </div>
                        <div class="col-md-10">
                            <?= $student['nama'] ?>
                        </div>
                    </div>
                    <hr>
                    <div class="row my-3">
                        <div class="col-md-2">
                            <span>Jenis Kelamin</span>
                        </div>
                        <div class="col-md-10">
                            <?= $student['jenis_kelamin']; ?>
                        </div>
                    </div>
                    <hr>
                    <div class="row my-3">
                        <div class="col-md-2">
                            <span>Tempat Lahir</span>
                        </div>
                        <div class="col-md-10">
                            <?= $student['tempat_lahir']; ?>
                        </div>
                    </div>
                    <hr>
                    <div class="row my-3">
                        <div class="col-md-2">
                            <span>Tanggal Lahir</span>
                        </div>
                        <div class="col-md-10">
                            <?= $student['tanggal_lahir']; ?>
                        </div>
                    </div>
                    <hr>
                    <div class="row my-3">
                        <div class="col-md-2">
                            <span>Agama</span>
                        </div>
                        <div class="col-md-10">
                            <?= $student['agama']; ?>
                        </div>
                    </div>
                    <hr>
                    <div class="row my-3">
                        <div class="col-md-2">
                            <span>Alamat</span>
                        </div>
                        <div class="col-md-10">
                            <?= $student['alamat']; ?>
                        </div>
                    </div>
                    <hr>
                    <div class="row my-3">
                        <div class="col-md-2">
                            <span>Tahun Masuk</span>
                        </div>
                        <div class="col-md-10">
                            <?= $student['tahun_masuk']; ?>
                        </div>
                    </div>
                    <hr>
                    <div class="row my-3">
                        <div class="col-md-2">
                            <span>Foto</span>
                        </div>
                        <div class="col-sm-2">
                            <img src="/assets/template/img/<?= $student['foto']; ?>" class="img-thumbnail img-preview">
                        </div>
                        <div class="col-md-10">
                            <?= $student['foto']; ?>
                        </div>
                    </div>
                    <hr>
                    <div class="row my-3">
                        <div class="col-md-2">
                            <span>Status</span>
                        </div>
                        <div class="col-md-10">
                            <?= $student['status_id']; ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12">
                            <a href="<?= base_url() ?>/admin/student" class="btn btn-primary float-left">Kembali</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

</div>
<?= $this->endSection(); ?>