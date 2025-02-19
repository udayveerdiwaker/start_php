<?php
class Person
{
    public $name;
    public $age;

    function __construct($name = "no name", $age = 0)
    {
        $this->name = $name;                    
        $this->age = $age;
    }
 function show() {
    echo $this->name . " - ". $this->age ,"<br>";
    
 }
}
$p1 = new Person("Shiva Diwaker" , 19);
$p2 = new Person("Udayveer Diwaker" , 19);
$p3 = new Person("Soina Diwaker" , 19);
$p4 = new Person("Aditya Diwaker" , 19);
// $p1->name = "shiva diwaker";
// $p1->age = 19;

$p1->show();
$p2->show();
$p3->show();
$p4->show();
