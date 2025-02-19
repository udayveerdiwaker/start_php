<?php
class car{
    public $name;
    public $color;

    function __construct($name,$color)
    {
        $this->name =$name;
        $this->color =$color;
    }
    public function intro(){
        echo "This car name is {$this->name} and Color is {$this->color}";
    }
}
class thar extends car{
    public function message(){
        echo "I am a car ? <br> ";
    }
}
$thar = new thar("Thar","red");
$thar->message();
$thar->intro();
?>