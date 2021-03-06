<?= $this->extend('templates/index'); ?>
<?= $this->section('content'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Informasi</h1>
    <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('pesan'); ?>
        </div>
    <?php endif; ?>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="<?= base_url() ?>/admin/informasi/tambah">
                <button class="btn btn-primary"> <i class="fas fa-plus-square"></i> Buat Informasi</button>
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($data_informasi as $i) : ?>
                            <tr>
                                <th scope="row"><?= $no++; ?></th>
                                <td><?= $i['judul']; ?></td>
                                <td class="float-right"><a href="<?= base_url() ?>/admin/informasi/<?= $i['slug']; ?>" class="btn btn-success"><i class="fas fa-search-plus"></i> Detail</a> <a href="<?= base_url() ?>/admin/informasi/ubah/<?= $i['slug']; ?>" class="btn btn-warning"><i class="fas fa-edit"></i> Ubah</a>
                                    <form action="/admin/informasi/hapus/<?= $i['id']; ?>" method="POST" class="d-inline">
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