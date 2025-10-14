<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celcius Fahrenheit Converter</title>
</head>

<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <input type="number" name="celcius" id="celcius" required>
        <br>
        <button type="submit" name="submit">submit</button>
    </form>
    <?php
    ?>
</body>

</html>