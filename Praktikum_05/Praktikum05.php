<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Form Nilai Mahasiswa</title>
</head>
<body>
    <h1>Form Nilai Ujian</h1><hr>

    <form method="post">
        <div class="form-group row">
            <label for="nim" class="col-4 col-form-label">NIM :</label> 
            <div class="col-8">
                <input id="nim" name="nim" placeholder="Masukan NIM anda" type="text" class="form-control" required="required">
            </div>
        </div>
        <div class="form-group row">
            <label for="matakuliah" class="col-4 col-form-label">Mata Kuliah :</label> 
            <div class="col-8">
                <select id="matakuliah" name="matakuliah" class="custom-select" required="required">
                    <option value="statistika">Statistika</option>
                    <option value="basisdata">Basis Data</option>
                    <option value="inggris">Bahasa Inggris</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="nilai" class="col-4 col-form-label">Masukan Nilai :</label> 
            <div class="col-8">
                <input id="nilai" name="nilai" placeholder="Masukan Nilai Anda" type="text" class="form-control" required="required">
            </div>
        </div> 
        <div class="form-group row">
            <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>

    <?php
    if (isset($_POST["submit"])) {
        $nim = $_POST["nim"];
        $matakuliah = $_POST["matakuliah"];
        $nilai = $_POST["nilai"];

        // Calculate result based on grade
        if ($nilai >= 80) {
            $hasil_ujian = "A";
            $grade = "Lulus";
        } elseif ($nilai >= 70) {
            $hasil_ujian = "B";
            $grade = "Lulus";
        } elseif ($nilai >= 60) {
            $hasil_ujian = "C";
            $grade = "Lulus";
        } elseif ($nilai >= 50) {
            $hasil_ujian = "D";
            $grade = "Lulus";
        } else {
            $hasil_ujian = "E";
            $grade = "Tidak Lulus";
        }

        echo "<h2>Hasil Ujian</h2>";
        echo "<hr>";
        echo "<p>NIM: $nim</p>";
        echo "<p>Mata Kuliah: $matakuliah</p>";
        echo "<p>Nilai: $nilai</p>";
        echo "<p>Hasil Ujian: $hasil_ujian</p>";
        echo "<p>Status: $grade</p>";
    }
    ?>

    <!-- Optional JavaScript; choose one of the two! -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>
