<?= $this->extend('templates/index'); ?>
<?= $this->section('content'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Peserta Didik</h1>
    <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('pesan'); ?>
        </div>
    <?php endif; ?>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="<?= base_url() ?>/admin/student/tambah">
                <button class="btn btn-primary"> <i class="fas fa-plus-square"></i> Tambah Peserta Didik</button>
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Informasi Peserta Didik</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Informasi Peserta Didik</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php foreach ($data_student as $s) : ?>
                            <tr>
                                <td><?= $s['id_student']; ?></td>
                                <td><img style="height:40px;width:40px; margin-right: 10px;" src="/assets/template/img/<?= $s['foto']; ?>" class="polaroid img-circle pull-left" alt=""><b><?= $s['nama']; ?> </b> <span class="text-muted">(<?= $s['nis']; ?>)</span>
                                    <br>
                                    <?= $s['jenis_kelamin']; ?>, <?= $s['agama']; ?>
                                </td>
                                <td>
                                    <a href="<?= base_url() ?>/admin/student/<?= $s['id_student']; ?>" class="btn btn-success"><i class="fas fa-search-plus"></i> Detail</a> <a href="<?= base_url() ?>/admin/student/ubah/<?= $s['id_student']; ?>" class="btn btn-warning"><i class="fas fa-edit"></i> Ubah</a>
                                    <form action="<?= base_url() ?>/admin/student/hapus/<?= $s['id_student']; ?>" method="POST" class="d-inline">
                                        <?= csrf_field(); ?>
                                        <input type="hidden" name="_method" value="DELETE">
                                        <!-- onclick merupakan java script untuk menampilkan pesan konfirmasi -->
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data?')"><i class="fas fa-trash-alt"></i> Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
<?= $this->endSection(); ?>