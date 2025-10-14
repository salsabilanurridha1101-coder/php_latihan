<!-- Algoritma Kesebelas -->
<section>
    <h2>Algoritma Kesebelas</h2>
    <form method="post">
        <input type="number" name="angka11" placeholder="Masukkan sembarang angka" required>
        <button type="submit" name="cek_genap_ganjil">Cek Genap / Ganjil</button>
    </form>
    <?php
    if (isset($_POST['cek_genap_ganjil'])) {
        $angka11 = $_POST['angka11'];
        echo "<div class='result'>";
        echo "Input: $angka11 <br>";

        if ($angka11 % 2 == 0) {
            echo "<strong>$angka11 adalah Angka Genap</strong>";
        } else {
            echo "<strong>$angka11 adalah Angka Ganjil</strong>";
        }

        echo "</div>";
    }
    ?>
</section>

<!-- Algoritma Keduabelas -->
<section>
    <h2>Algoritma Keduabelas</h2>
    <form method="post">
        <input type="number" name="input1" placeholder="Masukkan Nilai 1" required>
        <input type="number" name="input2" placeholder="Masukkan Nilai 2" required>
        <input type="number" name="input3" placeholder="Masukkan Nilai 3" required>
        <button type="submit" name="cari_terbesar">Cari Angka Terbesar</button>
    </form>
    <?php
    if (isset($_POST['cari_terbesar'])) {
        $a = $_POST['input1'];
        $b = $_POST['input2'];
        $c = $_POST['input3'];

        if ($a >= $b && $a >= $c) {
            $terbesar = $a;
        } elseif ($b >= $a && $b >= $c) {
            $terbesar = $b;
        } else {
            $terbesar = $c;
        }

        echo "<div class='result'>";
        echo "Input 1: $a <br>Input 2: $b <br>Input 3: $c <br>";
        echo "<strong>Angka Terbesar adalah: $terbesar</strong>";
        echo "</div>";
    }
    ?>
</section>