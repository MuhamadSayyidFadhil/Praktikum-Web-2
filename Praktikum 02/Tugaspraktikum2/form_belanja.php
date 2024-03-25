<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Belanja</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .form-container {
            margin-top: 20px;
        }

        .form-container .form-group label {
            font-weight: bold;
        }

        .form-container .btn-primary {
            margin-top: 10px;
        }

        .price-table {
            margin-top: 20px;
        }

        .price-table th,
        .price-table td {
            padding: 10px;
            text-align: left;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Belanja Online</h2>
        <div class="row">
            <div class="col-md-6 form-container">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                    <div class="form-group row">
                        <label for="costumer" class="col-4 col-form-label">Nama Customer</label>
                        <div class="col-8">
                            <input id="costumer" name="costumer" type="text" required="required" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4">Pilih Produk</label>
                        <div class="col-8">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="tv">
                                <label for="produk_0" class="custom-control-label">TV</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="kulkas">
                                <label for="produk_1" class="custom-control-label">Kulkas</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="mesincuci">
                                <label for="produk_2" class="custom-control-label">Mesin Cuci</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jumlah" class="col-4 col-form-label">Jumlah</label>
                        <div class="col-8">
                            <input id="jumlah" name="jumlah" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-4 col-8">
                            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>

                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    if (isset($_POST['costumer']) && isset($_POST['produk']) && isset($_POST['jumlah'])) {
                        $costumer = $_POST['costumer'];
                        $produk = $_POST['produk'];
                        $jumlah = $_POST['jumlah'];

                        $harga_barang = array(
                            "tv" => 4200000,
                            "kulkas" => 3100000,
                            "mesincuci" => 3800000
                        );

                        if (array_key_exists($produk, $harga_barang)) {
                            $total_harga = $harga_barang[$produk] * $jumlah;

                            echo "<h5>Terima kasih, $costumer, telah melakukan pembelian!</h5>";
                            echo "<p>Nama Costumer: $costumer</p>";
                            echo "<p>Produk Pilihan: $produk</p>";
                            echo "<p>Jumlah yang dibeli: $jumlah</p>";
                            echo "<p>Total harga: Rp " . number_format($total_harga, 0, ',', '.') . "</p>";
                        } else {
                            echo "<h2>Produk yang Anda pilih tidak tersedia.</h2>";
                        }
                    } else {
                        echo "<h2>Mohon lengkapi formulir dengan benar!</h2>";
                    }
                }
                ?>
            </div>
            <div class="col-md-6">
                <table class="price-table">
                    <thead>
                        <tr>
                            <th>Daftar Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>TV</td>
                            <td>4.200.000</td>
                        </tr>
                        <tr>
                            <td>Kulkas</td>
                            <td>3.100.000</td>
                        </tr>
                        <tr>
                            <td>Mesin Cuci</td>
                            <td>3.800.000</td>
                        </tr>
                        <tr>
                            <td><h5>Harga Dapat Berubah Setiap Saat</h5></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
=======
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Belanja</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .form-container {
            margin-top: 20px;
        }

        .form-container .form-group label {
            font-weight: bold;
        }

        .form-container .btn-primary {
            margin-top: 10px;
        }

        .price-table {
            margin-top: 20px;
        }

        .price-table th,
        .price-table td {
            padding: 10px;
            text-align: left;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Belanja Online</h2>
        <div class="row">
            <div class="col-md-6 form-container">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                    <div class="form-group row">
                        <label for="costumer" class="col-4 col-form-label">Nama Customer</label>
                        <div class="col-8">
                            <input id="costumer" name="costumer" type="text" required="required" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4">Pilih Produk</label>
                        <div class="col-8">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="tv">
                                <label for="produk_0" class="custom-control-label">TV</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="kulkas">
                                <label for="produk_1" class="custom-control-label">Kulkas</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="mesincuci">
                                <label for="produk_2" class="custom-control-label">Mesin Cuci</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jumlah" class="col-4 col-form-label">Jumlah</label>
                        <div class="col-8">
                            <input id="jumlah" name="jumlah" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-4 col-8">
                            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>

                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    if (isset($_POST['costumer']) && isset($_POST['produk']) && isset($_POST['jumlah'])) {
                        $costumer = $_POST['costumer'];
                        $produk = $_POST['produk'];
                        $jumlah = $_POST['jumlah'];

                        $harga_barang = array(
                            "tv" => 4200000,
                            "kulkas" => 3100000,
                            "mesincuci" => 3800000
                        );

                        if (array_key_exists($produk, $harga_barang)) {
                            $total_harga = $harga_barang[$produk] * $jumlah;

                            echo "<h5>Terima kasih, $costumer, telah melakukan pembelian!</h5>";
                            echo "<p>Nama Costumer: $costumer</p>";
                            echo "<p>Produk Pilihan: $produk</p>";
                            echo "<p>Jumlah yang dibeli: $jumlah</p>";
                            echo "<p>Total harga: Rp " . number_format($total_harga, 0, ',', '.') . "</p>";
                        } else {
                            echo "<h2>Produk yang Anda pilih tidak tersedia.</h2>";
                        }
                    } else {
                        echo "<h2>Mohon lengkapi formulir dengan benar!</h2>";
                    }
                }
                ?>
            </div>
            <div class="col-md-6">
                <table class="price-table">
                    <thead>
                        <tr>
                            <th>Daftar Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>TV</td>
                            <td>4.200.000</td>
                        </tr>
                        <tr>
                            <td>Kulkas</td>
                            <td>3.100.000</td>
                        </tr>
                        <tr>
                            <td>Mesin Cuci</td>
                            <td>3.800.000</td>
                        </tr>
                        <tr>
                            <td><h5>Harga Dapat Berubah Setiap Saat</h5></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
>>>>>>> d548c9de96ba5c81a0f60cb2ccf8d0feb78b1384
