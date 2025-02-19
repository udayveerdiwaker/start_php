<?php
class car{
    public $name;
    public $color;
    function __construct($name,$color)
    {
        $this->name =$name;
        $this->color =$color;
    }
    function __destruct()
    {
     echo "this is {$this->name} and this car color is {$this->color}"  ; 
    }
}
$thar = new car("thar","red");
print_r($thar);
?>