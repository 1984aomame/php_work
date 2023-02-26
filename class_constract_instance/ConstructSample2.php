<?php

class ConstructSample {

    public $id; //1 
    public $name;
    
    public function __construct($id, $name) {
       $this->id = $id; //変数を使用するために
       $this->name = $name;
    }

    public function output()
    {
        print $this->id.".".$this->name;
    }
}

/*
https://www.youtube.com/watch?v=LpfzAudxiuQ&list=PLhFoWnF68aPSKd0aW7QCIXe8ciQlkdZqX&index=18

コンストラクタに引数を渡す
*/

$obj = new ConstructSample("1", "名前");
$obj->output();