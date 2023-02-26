<?php

class Cat {
    
    //プロパティの宣言
    public $name = 'ミー';

    public function cry() {
        return "ニャー";
    }
}


// インスタンス作成
$cat = new Cat();
//プロパティ呼び出し
print "Name of cat :".$cat->name."<br />";
//メソッドよびだし
print "Cry of cat :".$cat->cry()."<br />";

?>