<?php
// 車の基本クラス
class BaseCar 
{
    const MANUFACTURER = "norako自動車";
    public function printCar($price) {
        print("製造元は".self::MANUFACTURER."<br />");
        print("販売価格は$price 円<br />");
    }
}
// 新車クラス
class NewCar extends BaseCar 
{
    public function printNewCar($price) {
        print("新車です<br />");
        $this->printCar($price);
    }
}
// 中古クラス
class OldCar extends BaseCar 
{
    public function printOldCar($price) {
        print("中古車です<br />");
        $this->printCar($price);
    }
}

$price_new = 400;
$price_old = 100;
$newcar = new NewCar;
$oldcar = new OldCar;
$newcar->printNewCar($price_new);
$newcar->printCar($price_new);  //継承元が使用可能
$oldcar->printOldCar($price_old);
$oldcar->printCar($price_old);  //継承元が使用可能

/*
・同じ内容のソースコードをいろいろなところに書くと
修正する際に複数の箇所を直す必要があり保守性が悪い
・ただしやりすぎると"保守性"や"可読性"が悪くなる
*/
?>




