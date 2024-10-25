<!DOCTYPE html>
<html>
<body>

<?php
$color  = "red" ;
ECHO "Hello World!.$color.<br>";
echo "Hello World!<br>";
EcHo "Hello World!<br>";

var_dump(5);
var_dump("John");
var_dump(3.14);
var_dump(true);
var_dump([2, 3, 56]);
var_dump(NULL);

 $x = $y = $z = "Fruit";
function printVariable(){
 global $y;
 echo $y;
 echo  $GLOBALS['z'];
}
printVariable();


function myTest() {
    static $x = 0;
    echo "<br>".$x;
    $x++;
  }
  
  myTest();
  myTest();
  myTest();
// echo $y;
echo("raj is a $y");
echo('raj is a '. $y);
$myNameInLower = "Rajkumar";

echo strtolower($myNameInLower);
echo strtoupper($myNameInLower);

$variable = " I think i can't do it ";

echo str_replace("can't","can",$variable);

$x = "Hello World!";
$y = explode(" ", $x);
var_dump( $y);
?>

</body>
</html>