<?php

class ConstructSample {
    
    public function __construct() {
        print "コンストラクタがオブジェクトの生成と同時に動く<br />";
    }

    public function __destruct() {
        print "デストラクタがオブジェクト消滅する際に動く<br />";
    }

    public function test()
    {
        print "テストメソッドが動く<br />";
    }
}

/*
https://www.youtube.com/watch?v=LpfzAudxiuQ&list=PLhFoWnF68aPSKd0aW7QCIXe8ciQlkdZqX&index=18

クラスの生成
・newキーワードを使用しクラスのオブジェクトを作成する　＝　newする
・newしたタイミングで動くメソッド　コンストラクタ __construct　メソッドを使用
    →オブジェクト仕様前にする必要な初期化処理がかける
・newしたオブジェクトが消滅するときに動くメソッド　デストラクタ__destruct メソッド
    →後始末の処理がかける

*/

$obj = new ConstructSample;
$obj->test();