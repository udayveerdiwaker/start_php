
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <table align = "center" border = "2" cellpadding = "5" cellspacing = "0">  
<tr>  
<td>Value</td>  
<td>Multipication</td>  
</tr> -->

<?php

$b=9;
for($a=1; $a<=10; $a++){
    echo "<tr>";
    echo "<td> $b * $a = </td>";
    echo "<td>".$b*$a."</td>";
    echo "<br>";
    echo "</tr>";
}

// $a = 1;

// while($a < 10){
//     $a++;
//     if($a == 5) continue;
//     echo $a;
//     echo "<br>";

//}

// function testa() {
//     for ($x = "A"; $x <"Z"; $x++) {
//         echo  "$x  " ;
//       }
      
// };

// testa();


// $l = "Deepak";
// echo "hello $l";
// echo "<br>";
// $s = 'HELLo SHIVAM KYA HAAL HAI';
// echo str_replace('HAI','Amit', $s);
// echo "<br>";


// $d = "We are the so-called \nVikings from the north.";
// $a = "Shiva";
// echo "<input value='" . trim($d) . "'>";
// echo "<br>";
// $Z = explode(" ",$d);
// print_r ($Z);
// $z = $d ." ". $a;
// echo $d;

// $j = "9353634.84589";
// $int_cast = (int)$j;
// echo $int_cast;
// $a = 5;
// $b = 45.6;
// $c = "25 kilometers"; 
// $d = "23 kilometers"; 
// $e = "5647.2";
// $f = true;
// $g = NULL;

// $a =(object)$a;
// $b =(object)$b;
// $c =(object)$c;
// $d =(object)$d;
// $e =(object)$e;
// $f =(object)$f;
// $g =(object)$g;

// var_dump($a);
// var_dump($b);
// var_dump($c);
// var_dump($d);
// var_dump($e);
// var_dump($f);
// var_dump($g);

// $a = array("Sumit"=>"50","Amit"=>"53","Rohit"=>"54");
// $a = array("BMW","Mahindra","Toyota");

// $a =(object) $a;
// $b =(object) $b;

// var_dump($a);
// var_dump($b);

// $a = 20;
// if($a < 12){
//     echo "Good Morning ";
// }else{
//     echo "Good Night ";
// }

// $a = 10;
// if ($a > 15){
//     echo "all";
// } 
// elseif($a > 9){
//    echo "good morning";

// }
   
// else {
//     echo "some";
// }

// $a = 10;
// if (0) {
//     print "all";

// }
//  else {

//     print "some ";


//  }

//  $num=50;  
//  if ($num%5==0){  
//  echo "$num is even number";  
//  echo "<br>";
//  }
//  else{  
//  echo "$num is odd number ";  
//  echo "<br>";
//  } 
// $names = ["Fname"=>"Rohit","Lname"=>"Diwaker","Contact"=>9750064088,"Address"=>"Ram jhula","House No."=>524];

// foreach($names as $s => $a){
//     if($s =="Address");

    
// }
// var_dump($names);



// class Name {
//     public $Fname;
//     public $Lname;
//     public function __construct($Fname, $Lname) {
//       $this->Fname = $Fname;
//       $this->Lname = $Lname;
//     }
//   }
//   $myname = new Name("Shivam", "Diwaker");
  
//   foreach ($myname as $x => $y) {
//     echo "$x: $y<br>";
//   }
// for($a=1; $a<=10; $a++){
//     echo "5 * $a =  <br>";
// }

// function Add(&$value){
//    $value *=20;
// }
// $sum =50;
// Add($sum);
// echo $sum;

// function fname($Fname, ...$Lname){
//     $check = "";
//     $count =count($Lname);
//     for($a =0; $a < $count; $a++){
//         $check = $check."Hi, $Lname[$a] $Fname.<br>";
//     }
//     return $check;
    
// }
// $d = fname("Diwaker","Rohan","Raj","Kisan");
// echo $d;

// $myarray = array("Fname"=>"Udayveer","Lname"=> "Diwaker","Contact"=>9650064800);
// foreach($myarray as $a=>$b){
//     echo"$a:$b<br   >";
// }
for($i=1; $i<=5; $i++)
  {
    for($j=5; $j>$i; $j--)
    {
      echo(" &nbsp ");
    }
    for($k=1; $k<=((2*$i)-1); $k++)
    {
       echo("*");
    }
    echo("<br>");
  }
?>
<script>
//     let x = prompt('Enter The Name');

// for(let s=1; s<=10; s++)
//     {
//         document.write(x + " * "+s+" = "+" "+ x * s+"<br>")
//     }

for(i=1; i<=5; i++)
  {
    for(k=1; k<=((2*i)-1); k++)
    {
        document.write("*")
    }
    document.write("<br>");
  }

</script>
</table>

</body>
</html>