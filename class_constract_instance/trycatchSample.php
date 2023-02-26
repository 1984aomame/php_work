<?php
/*
try {
    // 警告のエラーを発生させる（存在しないファイルを指定）
    $fd = fopen("c:/temp/abc.txt","r"); //ここでエラーを起こしてもcatchはできない
} catch (Exception $e) {
    echo "例外が発生しました。".$e->getMessage();   //動かない
}
*/

//以下で動かかす
set_error_handler(function($errno, $errstr, $errfile, $errline) {
    if(!(error_reporting() & $errno)) {
        return;
    }
    throw new ErrorException($errstr, $errno, 0, $errfile, $errline);
});

try {
    // 警告のエラーを発生させる（存在しないファイルを指定）
    $fd = fopen("c:/temp/abc.txt","r"); 
} catch (Exception $e) {
    echo "例外が発生しました。".$e->getMessage();   
}




/*
https://medium-company.com/php-%e3%82...

・例外
プログラム実行中に発生する予期せぬエラーのこと　Exception
例外を検知するためにtry catch finally
・try
tryの中に例外が発生しそうな処理を記述
・catch
tryで例外が発生したらcatch内の処理が動き
例外クラスのオブジェクトを受け取る
例外クラスのオブジェクトにはどんな例外がどこで発生したかの情報が格納

・finally
例外発生有無にかかわらず最後に実行する処理 必要なければ省略可能

phpはthrowされた例外しかcatchできない
ただのエラーcatchできない→set_error_handlerを使用する
*/
?>




