 <?php

    abstract class base
    {
        public $name;
        abstract protected function calc();
    }
    class drived extends base
    {
        public function calc(){

        // echo $x + $y;
        echo "hello"; 
        }
    }

    $text = new drived();

    $text->calc();


    // abstract class Bike{
    //     public $name;
    //     function __construct($name)
    //     {
    //         $this->name = $name;
    //     }
    //     abstract public function intro() : string;
    // }
    // //child class
    // class Mt15 extends Bike{
    //   public function intro() : string {
    //     return "choose your bike $this->name";

    //     }
    // }
    // class R15 extends Bike{
    //   public function intro() : string {
    //         return "choose your bike $this->name";
    //     }
    // }
    // $mt = new Mt15("Yamaha mt15");
    // echo $mt->intro();
    // echo "<br>";

    // $R1 = new R15("Yahama R15");
    // echo $R1->intro();
    ?>
 

<?php
// abstract class Parentclass{
//     abstract public function Prefixname($name);
// }
// class Childname extends Parentclass {
//     public function Prefixname($name)
//     {
//         if ($name == "Shiva Diwaker") {
//             $prefix = "Mr.";
//     }
//     elseif ($name == "Riya Diwaker") {
//         $prefix = "Mrs.";
//       } else {
//         $prefix = "";
//       }
//       return "{$prefix} {$name}";
// }
// }
// $class = new Childname;
// echo $class->Prefixname("Shiva Diwaker");
// echo "<br>";
// echo $class->Prefixname("Riya Diwaker")
?>