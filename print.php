<?php
$idP = $_GET['idPrint'] ?? null;
$students = [[
    "Id" => 1,
    "Order_Code" => "AB-2025-01--02",
    "Order_Date" => "2025-01-02 08:17:11",
    "Order_Amount" => "Rp. 56000",
    "Order_Status" => "Payment",
    "Actions" => "PRINT STRUK",
], [
    "Id" => 2,
    "Order_Code" => "AC-2025-01--02",
    "Order_Date" => "2025-01-02 08:50:33",
    "Order_Amount" => "Rp. 70000",
    "Order_Status" => "Payment",
    "Actions" => "PRINT STRUK",
], [
    "Id" => 3,
    "Order_Code" => "AD-2025-01--02",
    "Order_Date" => "2025-01-02 10:50:13",
    "Order_Amount" => "Rp. 0",
    "Order_Status" => "Order",
    "Actions" => "PRINT STRUK",
], [
    "Id" => 4,
    "Order_Code" => "AD-2025-01--02",
    "Order_Date" => "2025-01-02 15:30:11",
    "Order_Amount" => "Rp. 40000",
    "Order_Status" => "Payment",
    "Actions" => "PRINT STRUK",
], [
    "Id" => 5,
    "Order_Code" => "AE-2025-01--02",
    "Order_Date" => "2025-01-02 15:20:11",
    "Order_Amount" => "Rp. 0",
    "Order_Status" => "Order",
    "Actions" => "PRINT STRUK",
]];
$student_details = [[
    "id" => 1,
    "order_id" => 1,
    "product_name" => "Bakmie Jawa Jawa Jawa",
    "qty" => 1,
    "order_price" => 25000,
    "order_subtotal" => 25000
], [
    "id" => 2,
    "order_id" => 1,
    "product_name" => "Teh Botol",
    "qty" => 1,
    "order_price" => 31000,
    "order_subtotal" => 31000
], [
    "id" => 3,
    "order_id" => 2,
    "product_name" => "Nasi Goreng",
    "qty" => 1,
    "order_price" => 30000,
    "order_subtotal" => 30000
], [
    "id" => 4,
    "order_id" => 2,
    "product_name" => "Kopi",
    "qty" => 1,
    "order_price" => 30000,
    "order_subtotal" => 30000
], [
    "id" => 5,
    "order_id" => 2,
    "product_name" => "Kue",
    "qty" => 1,
    "order_price" => 10000,
    "order_subtotal" => 10000
], [
    "id" => 6,
    "order_id" => 3,
    "product_name" => "Ketoprak",
    "qty" => 1,
    "order_price" => 20000,
    "order_subtotal" => 20000
], [
    "id" => 7,
    "order_id" => 3,
    "product_name" => "Teh Botol",
    "qty" => 1,
    "order_price" => 31000,
    "order_subtotal" => 31000
], [
    "id" => 8,
    "order_id" => 4,
    "product_name" => "Air Mineral",
    "qty" => 1,
    "order_price" => 40000,
    "order_subtotal" => 40000
], [
    "id" => 9,
    "order_id" => 5,
    "product_name" => "Air Tajin",
    "qty" => 1,
    "order_price" => 7000,
    "order_subtotal" => 7000
]];
//---------------------------------------------------------------------
// select * from students where id='$_GET`[idPrint]'
$result = array_filter($students, function ($student) use ($idP) {
    return $student['Id'] == $idP;
});
$index = array_search($_GET['idPrint'], array_column($student_details, 'id'));
//var_dump($resulTSrudent[$index] ['order_code']);
//--------------------------------------------------------------------- 
// select * from student_details where order_id='$_GET`[idPrint]'
$resultstuOrDet = array_filter($student_details, function ($stuOrDet) {
    return $stuOrDet['order_id'] == $_GET['idPrint'];
});
$indexOrDet = array_search($_GET['idPrint'], array_column($student_details, 'order_id'));
//var_dump($result_details);
//---------------------------------------------------------------------
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @media print {
            body {
                font-family: 'Courier New', Courier, monospace;
                font-size: 12px;
            }

            .table-bordered,
            .table th,
            .table td {
                display: none;
            }

            #receipt-container {
                display: block;
                width: 58mm;
                margin: 0;
                padding: 5px;
            }

            #receipt-container * {
                visibility: visible;
            }

            #receipt-container table {
                width: 100%;
                border-collapse: collapse;
            }

            #receipt-container th,
            #receipt-container td {
                padding: 1px 0;
                border: none !important;
            }

            #receipt-container h5,
            #receipt-container p {
                text-align: center;
                margin: 0;
            }

            .text-center {
                text-align: center;
            }

            .text-right {
                text-align: right;
            }

            .text-bold {
                font-weight: bold;
            }
        }
    </style>
</head>

<body>

    <div class="receipt-container">
        <h5 class="text-center">Receipt</h5>
        <p class="text-center">Resto Chrispy</p>
        <p>-------------------------------------</p>
        <p>Order Code :<?php echo $result[$index]['Order_Code'] ?></p>
        <p>Tanggal : <?php echo $result[$index]['Order_Date'] ?></p>
        <p>-------------------------------------</p>
        <table>
            <thead>
                <tr>
                    <th>Item</th>
                    <th>Qty</th>
                    <th>Price</th>
                    <th>Subtotal</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td class="text-right"></td>
                    <td class="text-right"></td>
                    <td class="text-right"></td>
                </tr>
            </tbody>
        </table>
        <p>-------------------------------------</p>
        <div class="text-center">
            <pre>Total:     Rp. </pre>
            <pre>Bayar:     Rp. </pre>
            <pre>Kembalian  Rp. </pre>
        </div>
        <p>-------------------------------------</p>
        <p class="text-center text-bold">Terimakasih Telah Berbelanja!</p>
    </div>
    <script>
        window.print();
    </script>
</body>

</html>