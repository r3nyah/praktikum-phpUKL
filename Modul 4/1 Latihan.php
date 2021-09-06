<?php
    $angka_a= '10';
    $angka_b = '2';

    $kali = $angka_a * $angka_b;
    $bagi = $angka_a / $angka_b;
    $kurang = $angka_a - $angka_b;
    $tambahan = $angka_a + $angka_b;
    $mod = $angka_a % $angka_b;

    echo "<h3> Hasil operasi menggunakan operator aritmatika</h3>";
    echo "perkalian ".$angka_a. " * ".$angka_b. " = ".$kali. "<br>";
    echo "perbagian ".$angka_a. " / ".$angka_b. " = ".$bagi. "<br>";
    echo "perkurangan ".$angka_a. " - ".$angka_b. " = ".$kurang. "<br>";
    echo "pertambahan ".$angka_a. " + ".$angka_b. " = ".$tambahan. "<br>";
    echo "modulus atau hasil bagi ".$angka_a. " % ".$angka_a. " = ".$mod."<br>";
    ?>