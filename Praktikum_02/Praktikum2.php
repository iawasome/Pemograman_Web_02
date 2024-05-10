<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Form Belanja Online</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <!-- Form Column -->
            <div class="col-md-6">
                <form method="POST" action="Praktikum2.php">
                    <h1>Belanja Online</h1>
                    <hr>
                    <div class="form-group row">
                        <label for="name" class="col-4 col-form-label">Costumer :</label>
                        <div class="col-8">
                            <input id="name" name="name" placeholder="Nama Costumer" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4">Produk :</label>
                        <div class="col-8">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="televisi"> 
                                <label for="produk_0" class="custom-control-label">TV</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="kulkas"> 
                                <label for="produk_1" class="custom-control-label">Kulkas</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="mesin"> 
                                <label for="produk_2" class="custom-control-label">Mesin Cuci</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jumlah" class="col-4 col-form-label">Jumlah :</label> 
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
                if(isset($_POST["submit"])){
                    $nama_costumer = $_POST["name"];
                    $produk_dipesan = $_POST["produk"];
                    $jumlah_dipesan = $_POST["jumlah"];

                    // Daftar harga produk
                    $harga_produk = array(
                        "televisi" => 4200000,
                        "kulkas" => 3100000,
                        "mesin" => 3800000
                    );

                    // Menghitung harga barang
                    $harga_barang = isset($harga_produk[$produk_dipesan]) ? $harga_produk[$produk_dipesan] : 0;

                    // Menghitung harga total
                    $harga_total = $harga_barang * $jumlah_dipesan;

                    // Output hasil
                    echo "<h2>Detail Pembelian</h2>";
                    echo "<p><strong>Nama Costumer:</strong> $nama_costumer</p>";
                    echo "<p><strong>Produk yang Dipilih:</strong> $produk_dipesan</p>";
                    echo "<p><strong>Jumlah Produk yang Dipesan:</strong> $jumlah_dipesan</p>";
                    echo "<p><strong>Total Harga:</strong> Rp. " . number_format($harga_total, 0, ',', '.') . "</p>";
                }
                ?>
            </div>

            <!-- Table Column -->
            <div class="col-md-6">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Daftar Harga Produk</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>TV : Rp. 4.200.000</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Kulkas : Rp. 3.100.000</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Mesin Cuci : Rp. 3.800.000</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>
