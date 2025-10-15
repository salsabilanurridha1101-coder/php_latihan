<?php
$idP = $_GET['IdPrint'] ?? null;
$students = [[
    "Id" => 1,
    "Order Code" => "AB-2025-01--02",
    "Order Date" => "2025-01-02 08:17:11",
    "Order Amount" => "Rp. 56000",
    "Order Status" => "Payment",
    "Actions" => "PRINT STRUK",
], [
    "Id" => 2,
    "Order Code" => "AC-2025-01--02",
    "Order Date" => "2025-01-02 08:50:33",
    "Order Amount" => "Rp. 70000",
    "Order Status" => "Payment",
    "Actions" => "PRINT STRUK",
], [
    "Id" => 3,
    "Order Code" => "AD-2025-01--02",
    "Order Date" => "2025-01-02 10:50:13",
    "Order Amount" => "Rp. 0",
    "Order Status" => "Order",
    "Actions" => "PRINT STRUK",
], [
    "Id" => 4,
    "Order Code" => "AD-2025-01--02",
    "Order Date" => "2025-01-02 15:30:11",
    "Order Amount" => "Rp. 40000",
    "Order Status" => "Payment",
    "Actions" => "PRINT STRUK",
], [
    "Id" => 5,
    "Order Code" => "AE-2025-01--02",
    "Order Date" => "2025-01-02 15:20:11",
    "Order Amount" => "Rp. 0",
    "Order Status" => "Order",
    "Actions" => "PRINT STRUK",
]];
//select * from students where id='$idP'
// $result = array_filter($students, function ($student) use ($idP) {
//     return $student['Id'] == $_GET ['Id'];
// });
// $index = array_search($_GET ['Id'], array_column($students, 'Id'));
// //var_dump($resulTSrudent[$index] ['order_code']);
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
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Order Code</th>
                                    <th>Order Date</th>
                                    <th>Order Amount</th>
                                    <th style="width: 50px; height: 50px;">Order Status</th>
                                    <th style="width: 50px; height: 50px;">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($students as $student) {
                                    echo "<tr>";
                                    echo "<td>" . $no++ . "</td>";
                                    echo "<td>" . $student['Order Code'] . "</td>";
                                    echo "<td>" . $student['Order Date'] . "</td>";
                                    echo "<td>" . $student['Order Amount'] . "</td>";
                                    if ($student['Order Status'] == "Payment") {
                                        echo "<td style='background-color: green; color: white;'>" . $student['Order Status'] . "</td>";
                                    } else {
                                        echo "<td style='background-color: yellow; color: black;'>" . $student['Order Status'] . "</td>";
                                    }
                                    echo "<td>
                                        <a href='print.php?idPrint=" . $student['Id'] . "' class='btn btn-danger' target='_blank'>Print</a>
                                    </td>";

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