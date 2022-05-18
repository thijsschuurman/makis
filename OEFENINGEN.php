<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>blok 2 PHP</h1>
<?php
echo "PHP syntax<br>";
echo "first syntax<br>";
?>

<?php
$color = "red";
echo "a firetruck is " . $color . "<br>";
echo "instead of a green apple, mine is " . $color . "<br>";
echo "stock color of a ferrari is  " . $color . "<br>";
echo "after sunbathing my skin turns  " . $color . "<br>";
?>
<?php
# this is a comment
// this is also a comment
?>
<h2>variables</h2>
<?php
// variables
$txt2 = "good";
$txt = "calculation pending";
$x = 5;
$y = 10.5;

echo "$x + $y" . "<br>";
echo "$txt" . "<br>";

echo "you did a " . $txt2 . " job" . "!";
?>

<?php
echo "<h3>echo and print</h3>";
echo "I am learning statements<br>";
echo "this " , "string ", "was ", "made ", "with multiple parameters.";
?>

<?php
$x = 5985;
echo var_dump($x);
?>

</body>
</html>