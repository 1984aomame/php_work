<?php

class NumPrint {
    // プロパティ
    public $num = 0;
    // staticプロパティ
    public static $staticNum = 0;
    public function addNum() {
        // プロパティを加算
        $this->num++;
        // staticプロパティを加算
        self::$staticNum++;
    }
}

$numPrint = new NumPrint();
$numPrint->addNum();

print "プロパティの値".$numPrint->num;  //つかわなくなたら消滅するので↓ではまた初期化される
print ", staticプロパティの値".NumPrint::$staticNum;

$numPrint2 = new NumPrint();
$numPrint2->addNum();

print "<br />プロパティの値".$numPrint->num;    //
print ", staticプロパティの値".NumPrint::$staticNum;    //一度生成されたから初回アクセスで初期化

/*
https://medium-company.com/php-static/
・static
・クラスのプロパティやメソッドにstaticをつけると
インスタンスを生成せずにアクセスできる
・　::スコープ定義演算子
・ クラスのオブジェクト生成に関係なく作成され static変数に最初にアクセスしたタイミングで作られる
・クラスのオブジェクトに関係なく共通で１つの変数が作成される

*/
?>




