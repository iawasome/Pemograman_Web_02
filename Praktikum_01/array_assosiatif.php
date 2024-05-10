<?php
$dataMahasiswa = [
    "nama" => "Fajar Muhamad",
    "umur" => "21 Tahun",
    "alamat" => "Bogor"
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>Nama</th>
            <th>Umur</th>
            <th>Alamat</th>
        </tr>
        <tr>
            <td><?php echo $dataMahasiswa["nama"]; ?></td>
            <td><?php echo $dataMahasiswa["umur"]; ?></td>
            <td><?php echo $dataMahasiswa["alamat"]; ?></td>
        </tr>
    </table>
</body>
</html>
