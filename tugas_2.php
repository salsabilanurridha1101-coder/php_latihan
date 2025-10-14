<?php
$students = [[
    "nama" => "nur ridha salsabila",
    "nim" => "202410101086",
    "uts" => 73,
    "alamat" => "jl.cendrawasih",
    "hobi" => "membaca",
    "file" => "download.jpg",
], [
    "nama" => "salsabila nur ridha",
    "nim" => "202410101087",
    "uts" => 90,
    "alamat" => "jl.cfd",
    "hobi" => "berenang",
    "file" => "download1.jpg",
], [
    "nama" => "fhushfaasf",
    "nim" => "202355678",
    "uts" => 44,
    "alamat" => "jl.cendrawasih",
    "hobi" => "membaca",
    "file" => "download2.jpg",
], [
    "nama" => "zuzuuuu",
    "nim" => "202355678",
    "uts" => 44,
    "alamat" => "jl.cendrawasih",
    "hobi" => "maain hape",
    "file" => "download2.jpg",
], [
    "nama" => "ridha nur salsabila",
    "nim" => "202410101088",
    "uts" => 60,
    "alamat" => "jl.cendrawasih",
    "hobi" => "membaca",
    "file" => "1.pdf",
]];
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <div class="card">
                    <div class="card-header">
                        <div class="card-tittle">DATA MAHASISWA</div>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>NIM</th>
                                    <th>ALAMAT</th>
                                    <th>HOBI</th>
                                    <th>file</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($students as $student) {
                                    echo "<tr>";
                                    echo "<td>" . $no++ . "</td>";
                                    echo "<td>" . $student['nama'] . "</td>";
                                    echo "<td>" . $student['nim'] . "</td>";
                                    echo "<td>" . $student['alamat'] . "</td>";
                                    echo "<td>" . $student['hobi'] . "</td>";
                                    echo "<td>";
                                    if (pathinfo($student['file'], PATHINFO_EXTENSION) == 'jpg' || pathinfo($student['file'], PATHINFO_EXTENSION) == 'png') {
                                        echo "<img src='img/" . $student['file'] . "' alt='foto' width='100'>";
                                    } else if (pathinfo($student['file'], PATHINFO_EXTENSION) == 'pdf') {
                                        echo "<a href='img/" . $student['file'] . "' target='_blank'>" . $student['file'] . "</a>";
                                    }
                                    echo "</td>";
                                    echo "</tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>