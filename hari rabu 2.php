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
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="containerfluid">
        <div class="row justify-content-center mt-3">
            <div class="col-9">
                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>ORDER CODE</th>
                            <th>ORDER DATE</th>
                            <th>ORDER AMOUNT</th>
                            <th>ORDER STATUS</th>
                            <th>ACTIONS</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($orders as $key => $order) {
                        ?>
                            <tr>
                                <td><?php echo $key + 1 ?></td>
                                <td><?php echo $order['code'] ?></td>
                                <td><?php echo $order['date'] ?></td>
                                <td class="text-start">Rp. <?php echo number_format($order['amount'], 2, ',', '.') ?></td>
                                <td
                                    class="bg-<?php echo $order['status'] == "order" ? 'warning' : 'success' ?> text-<?php echo $order['status'] == "order" ? 'black' : 'white' ?>">
                                    <?php echo $order['status'] ?></td>
                                <td><a href="print2.php?idPrint=<?php echo $order['id'] ?>" target="_blank"
                                        class="btn btn-danger">Print</a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.js">
    </script>
</body>

</html>