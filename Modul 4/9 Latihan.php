<?php
    $arrwarna =array("blue","black","red","yellow","green");

    echo "Menampilkan isi array dengan for : <br>";
    for ($i=0; $i<count($arrwarna);$i++){
        echo "Do you  like <font color=$arrwarna[$i]>".$arrwarna[$i]."</font> ?<br>";
    }

    echo "<br>Menampilkan isi array dengan foreach : <br>";
    foreach ($arrwarna as $warna){
        echo "Do you like <font color=$warna>".$warna."</font>?<br>";
    }
    ?>