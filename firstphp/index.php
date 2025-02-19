<?php

include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Form</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
<body >

<?php
// $_SESSION["favfood"]= "momos";
// $_SESSION["favcolor"]= "red";
// $_SESSION["favbike"]= "MT15";
// echo "Favorite bike is ".$_SESSION['favbike']. "<br>";
// echo "Favorite color is ".$_SESSION['favcolor']. "<br>";
// echo "Favorite bike is ".$_SESSION['favfood'].".";

class Bike {
  public $Name;
  public $Color;
  public $Rate;

  function __construct($name,$color,$rate){
  $this->Name = $name;    
  $this->Color = $color;    
  $this->Rate = $rate;    
  }
  // function __destruct(){
  //   echo "The bike name is {$this->name} and color is {$this->color} and price is {$this->rate}";
  // }
}
$bike = new Bike ("<b>MT15</b>","<b>Red & Black</b>","<b>2,00,000</b>");
foreach ($bike as $a=>$b){
  echo "$a : $b <br>";
}
// print_r($bike);


// for($c=1;$c <=10; $c++){
// if($c == 8)break;
// echo "this is a number $c <br>";
// }


?>
</body>
</html>

