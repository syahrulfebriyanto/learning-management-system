<?= $this->extend('templates/index'); ?>
<?= $this->section('content'); ?>
<!-- Page Heading -->
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Detail Informasi</h1>
    </div>

    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-12 col-md-12 mb-12">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row my-3">
                        <div class="col-md-2">
                            <span>Judul</span>
                        </div>
                        <div class="col-md-10">
                            <?= $informasi['judul']; ?>
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-md-2">
                            <span>Tanggal Buat</span>
                        </div>
                        <div class="col-md-10">
                            <?= $informasi['updated_at'] ?>
                        </div>
                    </div>
                    <hr>
                    <div class="row my-3">
                        <div class="col-md-2">
                            <span>Konten</span>
                        </div>
                        <div class="col-md-10">
                            <?= $informasi['konten']; ?>
                        </div>
                    </div>
                    <div class="form-group row">

                        <div class="col-sm-12">
                            <a href="<?= base_url() ?>/admin/informasi" class="btn btn-primary float-left">Kembali</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

</div>
<?= $this->endSection(); ?>