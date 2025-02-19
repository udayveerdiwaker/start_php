<?php
class base{
    private $name;
   public function __construct($n)
    {
        $this->name  = $n;
    }

    protected function show(){
        echo "Your Name : " . $this->name . "<br>"; 
    }
}

class drived extends base{
    public function get(){
        echo "Your Name : " . $this->name . "<br>"; 
    }
}
$N = new drived("Shiva Diwaker");
$N->name = "Diwaker Shiva";
$N->get();
?>