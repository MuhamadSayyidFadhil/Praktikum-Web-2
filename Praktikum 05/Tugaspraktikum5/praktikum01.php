<?php
require_once 'header.php';
require_once 'sidebar.php';

$nilai1 = ["id" => 1, "nama" => "Agus", "uts" => 75, "uas" => 80, "tugas" => 78];
$nilai2 = ["id" => 2, "nama" => "Bowo", "uts" => 70, "uas" => 85, "tugas" => 88];
$nilai3 = ["id" => 3, "nama" => "Mulki", "uts" => 80, "uas" => 75, "tugas" => 70];
$nilai4 = ["id" => 4, "nama" => "Kemal", "uts" => 85, "uas" => 95, "tugas" => 80];

// Buat array multidimensi
$kumpulan_nilai = [$nilai1, $nilai2, $nilai3, $nilai4];
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Tugas Praktikum</h1>
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
                            <h3 class="card-title">Tugas Praktikum 01</h3>

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
                            <h1>Table Nilai Mahasiswa</h1>
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">NAMA</th>
                                        <th scope="col">UTS</th>
                                        <th scope="col">UAS</th>
                                        <th scope="col">Tugas</th>
                                        <th scope="col">Nilai Akhir</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($kumpulan_nilai as $key => $nilai) : ?>
                                        <tr <?php echo $key % 2 == 0 ? 'class="table-primary"' : 'class="table-info"'; ?>>
                                            <?php $nilai_akhir = ($nilai["uts"] + $nilai["uas"] + $nilai["tugas"]) / 3; ?>
                                            <td><?= $nilai["id"] ?></td>
                                            <td><?= $nilai["nama"] ?></td>
                                            <td><?= $nilai["uts"] ?></td>
                                            <td><?= $nilai["uas"] ?></td>
                                            <td><?= $nilai["tugas"] ?></td>
                                            <td><?= number_format($nilai_akhir, 2, ",", ".")  ?></td>

                                        </tr>

                                    <?php endforeach; ?>
                                </tbody>
                            </table>
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