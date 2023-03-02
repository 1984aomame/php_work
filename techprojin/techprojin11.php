<?php
    echo "<a href="."https://tech.pjin.jp/blog/2019/03/25/php-%E3%83%97%E3%83%AD%E3%82%B0%E3%83%A9%E3%83%A0%E6%BC%94%E7%BF%92%E5%95%8F%E9%A1%8C%EF%BC%91%EF%BC%92/".">出題元「PHP プログラム演習問題１２」に移動します。</a><br>";
    $array = [];
    $num = rand(1,10);
    for ($i=0; $i<3; $i++) {
        $num = $array[$i];   //これだとエラーになる 5 = $array[1] 中身がないから
        $array[$i] = $num;
        echo('<pre>');
        var_dump($array);   //内側に書くと配列が３つできてしまう
        echo('<pre>');
    }
    //正解
    $arr = array();
    for($i = 0; $i < 3; $i++){
        $arr[$i] = rand(1,10);
    }
    print_r($arr);


    //やり直し

?>