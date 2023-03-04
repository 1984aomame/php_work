<?php
    $text = ['P','H','P','を','学','ぶ'];
    for ($i=0; $i<=5; $i++ ) {
        echo $text[$i];
    }

    //配列の数はcount関数を使用する
    $text = ['P','H','P','を','学','ぶ'];
    for ($i=0; $i<count($text); $i++ ) {
        echo $text[$i];
    }
?>