<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php
// variables
$color = "red";
$color2 = "green";
$q = "5";
$w = "10";
$e = "15";
$f = "20";
$x = "yes";
$y = "no";
$ar = array("$q","$w","$e");

// code output
echo "my car should be " . $color . "<br>";
echo "Hello World!" . "<br>";

echo "<br>";
echo $x;
echo "<br>";
echo $y;
echo "<br>";
var_dump($ar);


?>

<?php
// PHP String
// A string is a sequence of characters, like "Hello world!".

// A string can be any text inside quotes. You can use single or double quotes:
$x = "Hello world!";
$y = 'Hello world!';

echo "<br>";
echo $x;
echo "<br>";
echo $y;
echo "<br>";
var_dump($x, $y);


?>


<?php
// PHP integer
$x = 5985;
echo "<br>";
var_dump($x);
?>

<?php
// PHP Integer
$r = 10.365;
echo "<br>";
var_dump($r);
?>


<?php
// boolean
$a = true;
$b = false;
echo "<br>";
var_dump($a,$b)
?>


<?php
// PHP array

$j = "juice";
$hot_drinks = array("coffee", "tea", "hot chocolate", "room temp beer");
$juices = array("appje $j", "orange $j", "tomato $j");
echo "<br>";
var_dump($juices);
?>


<?php
// PHP object
echo "<br>";
class drink {
    public $type;
    public $size;
    public function __construct($type, $size) {
      $this->type = $type;
      $this->size = $size;
    }
    public function message() {
      return "drink selected -  " . $this->type . " " . $this->size . "!";
    }
  }
  echo "<br>";
  $drink = new drink("large", "frappuchino");
  echo $drink -> message();
  echo "<br>";
  $drink = new drink("small", "soy latte");
  echo $drink -> message("thankyou for your order");
  ?>


<?php
// php constant
define("THANKYOU", "Thankyou for your order!");
define("CHECKOUT", "continue to checkout");
echo "<br>";
echo THANKYOU;
echo "<br>";
echo CHECKOUT;
?>

<?php
// PHP Constant Arrays
define("DRINKS", [
    "Soy latte",
    "Iced Americano",
    "pumpkin spice latte",
    "Iced coffee - Russian Style (contains vodka)"
]);
define("FOODS", [
    "Pizza", 
    "fied unions",
    "french fries",
    "kids meal (does not include kids)",
    "single slice of tomato",
    "some hamburger"
]);
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo DRINKS[0];
echo "<br>";
echo DRINKS[1];
echo "<br>";
echo DRINKS[2];
echo "<br>";
echo DRINKS[3];
echo "<br>";
echo FOODS[0];
echo "<br>";
echo FOODS[1];
echo "<br>";
echo FOODS[2];
echo "<br>";
echo FOODS[3];
echo "<br>";
echo FOODS[4];
echo "<br>";
echo FOODS[5];

?>


<!-- data types:
String
Integer
Float (floating point numbers - also called double)
Boolean
Array
Object
NULL
Resource -->
<!-- php integer: number between -2,147,483,648 and 2,147,483,647. -->
<!-- php float: A float (floating point number) is a number with a decimal point or a number in exponential form. -->


</body>
</html>
