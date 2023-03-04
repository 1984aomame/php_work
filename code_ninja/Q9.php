<?php 
//これはこれで残す。複数条件で文字列を変換したいとき
$text = '{"text1":"忍者", "text2":"CODE","text3":"無料問題集" }';
$target = array('{', '}' );
$replace = array('[', ']' );
$replace_text = str_replace($target, $replace, $text);
var_dump($replace_text); //string(61) "["text1":"忍者", "text2":"CODE","text3":"無料問題集" ]
//解答
$text_a = '{"text1":"忍者", "text2":"CODE","text3":"無料問題集" }';
$text_array = json_decode($text_a, true);
foreach ($text_array as $key => $val) {
    echo $key.':'.$val."\n";
}
//
foreach (json_decode($text_a) as $key => $val) {
    echo $key.':'.$val."\n";
}
?>