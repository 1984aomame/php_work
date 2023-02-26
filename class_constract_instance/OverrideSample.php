<?php
// 親クラス
class BaseClass
{
    public function printItem() {
        print("親クラスです");
    }
}
// 子クラス
class ChildClass extends BaseClass 
{
    public function printItem() {     //同じメソッド名前と引数
        print("子クラスです<br />");
    }
}
/*
・オーバーライド
親クラスで定義されているメソッドを子クラスで書き換える
親クラスにあるメソッドと同じ名前同じ引数のメソッドを子クラスに記述する
*/
$child = new ChildClass();
$child->printItem();
?>




