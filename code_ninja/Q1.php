<?php
class NINJA {
    public $str1;
    public $str2;
    
    public function __construct($str1, $str2) {
        $this->str1 = $str1;
        $this->str2 = $str2;
    }
    
    public function render() {
        echo $this->str1."の".$this->str2;
    }
}

$ninja = new NINJA('PHPの問題集', 'スタート！');
$ninja->render();
?>
