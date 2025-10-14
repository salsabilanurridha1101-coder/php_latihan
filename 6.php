<!-- Function / fungsi
 blok kode yang diberi nama yang bisa dipanggi kapan saja untuk menjalankan tugas tertentu menghindari pengulangan kode (code reuse) , memecah logika menjadi bagian terkecil
 array_push()
  -->




<!-- array_push -->
<?php
$users = [[
  "id" => 2334,
  "name" => "bunny",
],[
  "id" => 3532,
  "name" => "kiki",
]];
array_push($users, [
  "id" => 1234,
  "name" => "udin",
]);
?>
<ul>
<?php
foreach ($users as $user) {
    ?>
    <li> ID USER; <?php echo $user['id'] ?></li>
    <li> NAME USER; <?php echo $user['name'] ?></li><br>
    <?php
}
?>
</ul>
<?php

// substr()= untuuk memotong kalimat dengan menggunakan lenght
$string = "Hello world, welcome to the universe.";
$substr = substr($string, 6,);
echo $substr;
//strlen()
$strlen = strlen($string);
echo $strlen; 
//str_word_count()
$str_word_count = str_word_count($string);
echo $str_word_count; 
//ucwords()
$ucwords = ucwords($string);
echo $ucwords;
$ucfirst = ucfirst($string);
echo $ucfirst;
?>








