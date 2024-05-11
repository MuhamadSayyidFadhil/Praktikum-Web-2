<?php
require_once 'header.php';
require_once 'sidebar.php';

// Data profil
$nama = "Muhamad Sayyid Fadhil";
$tanggal_lahir = "02 Juli 2004";
$nim = "0110223061";
$jurusan = "Teknik Informatika 02";
$linkedin = "https://www.linkedin.com/in/muhamad-sayyid-fadhil-a63160293/";
// Informasi lainnya ...

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Dashboard Website Profile</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <!-- Default box -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Profile</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body text-center">
                            <img src="../dist/img/foto.jpg" class="img-squeare  elevation-2" alt="User Image" style="width: 150px;">
                            <!-- Informasi -->
                            <div class="text-left">
                                <p><strong>Nama:</strong> <?php echo $nama; ?></p>
                                <p><strong>Tanggal Lahir:</strong> <?php echo $tanggal_lahir; ?></p>
                                <p><strong>NIM:</strong> <?php echo $nim; ?></p>
                                <p><strong>Jurusan:</strong> <?php echo $jurusan; ?></p>
                                <p><strong>LinkedIn:</strong> <a href="<?php echo $linkedin; ?>">Klik disini</a></p>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            Footer
                        </div>
                        <!-- /.card-footer-->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php
require_once 'footer.php';
?>
