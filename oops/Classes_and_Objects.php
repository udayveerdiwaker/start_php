<?php
class Calculation{
    public $a, $b, $c;

    function sum(){
        $this->c = $this->a + $this->b;
        return $this->c;
    }
    function sub(){
        $this->c = $this->a - $this->b;
        return $this->c;
    }
}
$c1 = new Calculation();

$c1->a = 20;
$c1->b = 60;

$c2 = new Calculation();

$c2->a = 70;
$c2->b = 60;
 
echo "Sum value of c1 " . $c1->sum() . "<br>";

echo "Sub value of c2 " . $c2->sub() . "<br>";
echo "Sub value of c1 " . $c1->sub();
?>