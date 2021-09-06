<?php
    $arrnilai = array ("ani" => 80,"otim" => 90,"ana" =>75,"budi" =>85);

    echo "Menampilkan nilai array dengan foreach : <br>";
    foreach ($arrnilai as $nama => $nilai){
        echo "nilai $nama = $nilai<br>";
    }
    reset($arrnilai);
    echo "<br>menampilkan isi array dengan while dan list : <br>";
    while (list ($nama,$nilai)= each($arrnilai)){
        echo "nilai $nama = $nilai<br>";
    }
    ?>



