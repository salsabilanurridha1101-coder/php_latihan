<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    

    <table border="1" >
        <?php
        for ($i = 1; $i <= 5; $i++) {
            ?>
            <tr>
                <?php
                for ($j = 1; $j <= 5; $j++) {
                    if (($i + $j) % 2 == 0) {
                        $warna = "blue";
                    } else {
                        $warna = "black";
                    } 
                    ?>
                    <td style="background-color: <?php echo $warna; ?>; width:40px; height:40px;" >look</td>
                <?php
                }
                ?>
        <tr>
            <?php
             }
            ?>
        </tr>

    </table>
</body>

</html>