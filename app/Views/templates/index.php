<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $title; ?></title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url() ?>/assets/template/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url() ?>/assets/template/css/sb-admin-2.min.css" rel="stylesheet">
    <!-- Custom styles for this page -->
    <link href="<?= base_url() ?>/assets/template/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?= $this->include('templates/sidebar'); ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                <!-- topbar -->
                <?= $this->include('templates/topbar'); ?>

                <!-- Begin Page Content -->
                <?= $this->renderSection('content'); ?>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Syahrul Febriyanto <?= date('Y'); ?></span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="<?= base_url('logout') ?>">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url() ?>/assets/template/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url() ?>/assets/template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url() ?>/assets/template/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url() ?>/assets/template/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?= base_url() ?>/assets/template/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?= base_url() ?>/assets/template/js/demo/chart-area-demo.js"></script>
    <script src="<?= base_url() ?>/assets/template/js/demo/chart-pie-demo.js"></script>
    <!-- Page level plugins -->
    <script src="<?= base_url() ?>/assets/template/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url() ?>/assets/template/vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <!-- Page level custom scripts -->
    <script src="<?= base_url() ?>/assets/template/js/demo/datatables-demo.js"></script>

    <?= $this->renderSection('script'); ?>
    <script>
        function previewImg() {
            // JS FOR UPLOAD

            // file javascript untuk membuat user baru
            // untuk mengambil inputan sampul dengan mengambil element yang id nya #sampul
            const foto = document.querySelector('#foto');
            const fotoLabel = document.querySelector('.custom-file-label');
            const imgPreview = document.querySelector('.img-preview')

            // GANTI URL
            // untuk tulisan label sampul | textContent = isinya | files[0] = file yang di upload | .nama = ambil namanya
            fotoLabel.textContent = foto.files[0].name;

            // GANTI PREVIEW
            // untuk mengambil file yang di upload
            const fileFoto = new FileReader();
            // ambil alamat penyimpanannya lalu ambil nama filenya untuk disimpan di gambarnya
            fileFoto.readAsDataURL(foto.files[0]);

            // ketika file sampul ini onload. jalankan fungsi yang mengirimkan event si image preview. sorce nya di ganti dengan nama gambar baru di upload diambil dari e.targer.resiult
            fileFoto.onload = function(e) {
                imgPreview.src = e.target.result;
            }
        }
    </script>
</body>

</html>