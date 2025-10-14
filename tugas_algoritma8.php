<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kilometers to Miles Converter</title>
</head>

<body>
    <h1>Kilometer to Mills</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="kilometers">Enter kilometers:</label>
        <input type="number" name="kilometers" id="kilometers" required>
        <br>
        <button type="submit" name="submit">submit</button>
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $kilometers = (float) $_POST['kilometers'];
        $miles = $kilometers * 0.621371;
        echo "<p><b>$kilometers Kilometer to  $miles miles.</b></p>";
    }
    ?>
</body>

</html>