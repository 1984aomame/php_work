<?php
    echo "<a href="."https://tech.pjin.jp/blog/2019/03/25/php-%E3%83%97%E3%83%AD%E3%82%B0%E3%83%A9%E3%83%A0%E6%BC%94%E7%BF%92%E5%95%8F%E9%A1%8C%EF%BC%91%EF%BC%92/".">出題元「PHP プログラム演習問題１２」に移動します。</a><br>";
    $array = ["aaa", "bbb", "ccc"];
    $cont_array = count($array);
    $num = 0;
    for ($i=0; $i<$cont_array; $i++) {
        echo $array[$num].",";
        $num++; //これよりこっち↓
    }
    
    echo "<br>";
    for ($i=0; $i<count($array); $i++) {
        echo $array[$i].",";
    }

    echo "<br>";
    foreach ($array as $val) {
        echo $val.",";
    }

    echo "<br>";
    foreach ($array as $key => $val) {
        echo $array[$key].",";
    }
?>