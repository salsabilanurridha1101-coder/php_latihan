<!-- Algoritma Kesepuluh -->
<section>
    <h2>Algoritma Kesepuluh</h2>
    <form method="post">
        <input type="number" name="angka10" placeholder="Masukkan sembarang angka" required>
        <button type="submit" name="cek_positif">Cek Angka</button>
    </form>
    <?php
    if (isset($_POST['cek_positif'])) {
        $angka10 = $_POST['angka10'];
        echo "<div class='result'>";
        echo "Input: $angka10 <br>";

        if ($angka10 > 0) {
            echo "<strong>Angka Positif</strong>";
        } elseif ($angka10 == 0) {
            echo "<strong>Angka Nol</strong>";
        } else {
            echo "<strong>Angka Negatif</strong>";
        }

        echo "</div>";
    }
    ?>
</section>