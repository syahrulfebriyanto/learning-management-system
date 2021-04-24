<?= $this->extend('templates/index'); ?>
<?= $this->section('content'); ?>
<!-- Page Heading -->
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Informasi</h1>
    </div>

    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-12 col-md-12 mb-12">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <form action="<?= base_url() ?>/admin/informasi/simpan" method="POST">
                        <?= csrf_field(); ?>
                        <div class="form-group row">
                            <label for="judul" class="col-sm-2 col-form-label">Judul <sup class="text-danger">*</sup></label>
                            <div class="col-sm-10">
                                <input name="judul" type="text" class="form-control <?= ($validation->hasError('judul')) ? 'is-invalid' : ''; ?>" id="judul">
                                <div class="invalid-feedback"><?= $validation->getError('judul'); ?></div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="judul" class="col-sm-2 col-form-label">Konten <sup class="text-danger">*</sup></label>
                            <div class="col-sm-10">
                                <textarea class="form-control <?= ($validation->hasError('konten')) ? 'is-invalid' : ''; ?>" name="konten" id="editor1" rows="10" cols="80">
                                </textarea>
                                <div class="invalid-feedback"><?= $validation->getError('konten'); ?></div>
                            </div>
                        </div>
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
<?= $this->section('script'); ?>
<script src="//cdn.ckeditor.com/4.16.0/full/ckeditor.js"></script>
<script>
    // Replace the <textarea id="editor1"> with a CKEditor 4
    // instance, using default configuration.
    CKEDITOR.replace('editor1');
</script>
<?= $this->endSection(); ?>