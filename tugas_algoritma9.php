<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celcius Fahrenheit Converter</title>
</head>

<body>
    <h1> Celcius Fahrenheit</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="celcius">Enter</label>
        <input type="number" name="celcius" id="celcius" required>
        <br>
        <button type="submit" name="submit">submit</button>
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $celcius = (float) $_POST['celcius'];
        $fahrenheit = $celcius * 1.8 + 32;
        echo "<p><b>$celcius celcius to  $fahrenheit fahrenheit.</b></p>";
    }
    ?>
</body>

</html>