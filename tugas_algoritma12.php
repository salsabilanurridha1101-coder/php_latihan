<?php  ?>
<main class="w-full">
    <?php
    $input1 = $_POST['number_1'] ?? 0;
    $input2 = $_POST['number_2'] ?? 0;
    $input3 = $_POST['number_3'] ?? 0;



    ?>
    <form method="post">
        <label for="number_1">
            <input class="border " type="text" name="number_1" placeholder="Number 1">
        </label>
        <label for="number_2">
            <input class="border " type="text" name="number_2" placeholder="Number 2">
        </label>
        <label for="number_3">
            <input class="border " type="text" name="number_3" placeholder="Number 3">
        </label>

        <button type="submit" name="send">Kirim</button>
    </form>

    <?php
    if ($input1 >= $input2 && $input1 >= $input3) {
        echo "<p>Number 1 : $input1 </p>";
    } else if ($input2 >= $input1 && $input2 >= $input3) {
        echo "<p>Number 2 : $input2 </p>";
    } else {
        echo "<p>Number 3 : $input3 </p>";
    }
    ?>
</main>