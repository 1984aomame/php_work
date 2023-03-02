<?php
    for ($i=1; $i <= 15; $i++) {
        echo $i."\n";
    }
    //ループの回数が決まっているとき
    foreach (range(1, 15) as $i) {
        echo $i."\n";
    }
?>