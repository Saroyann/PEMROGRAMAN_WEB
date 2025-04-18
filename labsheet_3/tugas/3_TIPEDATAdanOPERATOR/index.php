<?php
$integer = 10;
$float = 3.14;
$string = "Hello, World!";
$boolean = true;
$array = [1, 2, 3];
$null = null;

echo "<h2>Tipe Data</h2>";
echo "Integer: $integer (Tipe: " . gettype($integer) . ")<br>";
echo "Float: $float (Tipe: " . gettype($float) . ")<br>";
echo "String: $string (Tipe: " . gettype($string) . ")<br>";
echo "Boolean: " . ($boolean ? 'true' : 'false') . " (Tipe: " . gettype($boolean) . ")<br>";
echo "Array: " . implode(", ", $array) . " (Tipe: " . gettype($array) . ")<br>";
echo "Null: " . var_export($null, true) . " (Tipe: " . gettype($null) . ")<br>";

$num1 = 15;
$num2 = 4;

echo "<h2>Operator Aritmatika</h2>";
echo "$num1 + $num2 = " . ($num1 + $num2) . "<br>";
echo "$num1 - $num2 = " . ($num1 - $num2) . "<br>";
echo "$num1 * $num2 = " . ($num1 * $num2) . "<br>";
echo "$num1 / $num2 = " . ($num1 / $num2) . "<br>";
echo "$num1 % $num2 = " . ($num1 % $num2) . "<br>";

echo "<h2>Operator Perbandingan</h2>";
echo "$num1 == $num2: " . var_export($num1 == $num2, true) . "<br>";
echo "$num1 != $num2: " . var_export($num1 != $num2, true) . "<br>";
echo "$num1 > $num2: " . var_export($num1 > $num2, true) . "<br>";
echo "$num1 < $num2: " . var_export($num1 < $num2, true) . "<br>";
echo "$num1 >= $num2: " . var_export($num1 >= $num2, true) . "<br>";
echo "$num1 <= $num2: " . var_export($num1 <= $num2, true) . "<br>";
?>