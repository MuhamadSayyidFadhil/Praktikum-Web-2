<?php
require_once 'header.php';
require_once 'sidebar.php';

require '../dbkoneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    // Query untuk mengambil data dokter berdasarkan id
    $sql = "SELECT * FROM unit_kerja WHERE id = ?";
    $stmt = $dbh->prepare($sql);
    $stmt->execute([$id]);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
}

if (isset($_POST['submit'])) {
    $_unit_kerja_id = $_POST['unit_kerja'];
    $data = [$_unit_kerja_id, $id];

    $sql = "UPDATE unit_kerja SET nama = ? WHERE id = ?";
    $stmt = $dbh->prepare($sql);
    $stmt->execute($data);
    echo "<script>window.location.href = 'index_unit_kerja.php';</script>";
}
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Dashboard Website</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Default box -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Update Unit Kerja</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <h2 class="text-center">Update Unit Kerja</h2>
                            <form action="edit.php?id=<?= $row['id'] ?>" method="POST">
                                <div class="form-group row">
                                    <label for="unit_kerja" class="col-4 col-form-label">Unit Kerja</label>
                                    <div class="col-8">
                                        <input id="unit_kerja" name="unit_kerja" type="text" class="form-control" value="<?= $row['nama'] ?>">
                                    </div>
                                </div>
                                    <div class="form-group row">
                                        <div class="offset-4 col-8">
                                            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                            </form>

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