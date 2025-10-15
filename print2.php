<?php
$orders = [[
    "id" => 1,
    "code" => "AB-2025-01-02",
    "date" => "2025-01-02 08:17:11",
    "amount" => 56000,
    "status" => "payment",

], [
    "id" => 2,
    "code" => "AC-2025-01-02",
    "date" => "2025-01-02 08:50:33",
    "amount" => 7000,
    "status" => "payment",

], [
    "id" => 3,
    "code" => "AD-2025-01-02",
    "date" => "2025-01-02 10:50:33",
    "amount" => null,
    "status" => "order",

], [
    "id" => 4,
    "code" => "AE-2025-01-02",
    "date" => "2025-01-02 15:30:33",
    "amount" => 40000,
    "status" => "payment",

], [
    "id" => 5,
    "code" => "AF-2025-01-02",
    "date" => "2025-01-04 15:30:33",
    "amount" => null,
    "status" => "order",

]];
$order_details = [[
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
// -----------------------------------------------------------
// SELECT * FROM orders WHERE id = $_GET['idPint]
$resultOrder = array_filter($orders, function ($order) {
    return $order['id'] == $_GET['idPrint'];
});
$index = array_search($_GET['idPrint'], array_column($orders, 'id'));
// var_dump($resultOrder[$index]['code']);
// -----------------------------------------------------------

// SELECT * FROM order_details WHERE order_id = $_GET['idPint]
$resultOrdDet = array_filter($order_details, function ($ordet) {
    return $ordet['order_id'] == $_GET['idPrint'];
});
$indexOrDet = array_search($_GET['idPrint'], array_column($order_details, 'order_id'));
// var_dump($resultOrDet[$indexOrDet]['']);
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
        <p class="text-center">Restoran Apik</p>
        <p>-------------------------------------</p>
        <p>Order Code :<?php echo $resultOrder[$index]['code'] ?>
        </p>
        <p>Tanggal :<?php echo $resultOrder[$index]['date'] ?></p>
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
                <?php
                foreach ($resultOrdDet as $value) {
                ?>
                    <tr>
                        <td><?php echo $value['product_name'] ?></td>
                        <td class="text-right">(<?php echo $value['qty'] ?>)</td>
                        <td class="text-right"><?php echo $value['order_price'] ?></td>
                        <td class="text-right"><?php echo $value['order_subtotal'] ?></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
        <p>-------------------------------------</p>
        <div class="text-center">
            <pre>Total:     Rp. </pre>
            <pre>Bayar:     Rp. </pre>
            <pre>Kembalian  Rp. </pre>
        </div>
        <p>-------------------------------------</p>
        <p class="text-center text-bold">Maturnuwun Sedulur Wis Tuku Nang Ndi :D</p>
    </div>
    <script>
        window.print();
    </script>
</body>

</html>