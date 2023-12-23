<?php
// aritmatic operators
/**
 * + Addition
 * - Subtraction
 * * Multiplication
 * / Division
 * % Modulus
 * ** Exponent
 * ++ Increment
 * -- Decrement
 */

// logical operators
/**
 * && AND
 * || OR
 *! NOT
 * xor XOR
 */

$num1 = 40;
$num2 = 20;

// and if both condition are true then it will return true
if ($num1 > $num2 && $num1 != $num2) {
    echo "$num1 is greater than $num2";
}
echo "<br>";

//or if any one of the condition is true thn it will return true
if ($num1 > $num2 || $num1 == $num2) {
    echo "$num1 is greater than $num2";
}

//xor if any one of the condition is true thn it will return true
echo "<br>";
if ($num1 > $num2 xor $num1 !== $num2) {
    echo "$num1 is greater than $num2";
}

echo "<br>";

// comparison operators
/**
 * == Equal
 * === Identical
 * != Not Equal
 * <> Not Equal
 * !== Not Identical
 * > Greater Than
 * < Less Than
 * >= Greater Than or Equal
 * <= Less Than or Equal
 * <=> Spaceship
 */

if ($num1 !== $num2) {
    echo "true";
}
echo "<br>";
// assignment operators
/**
 * = equal
 * += Addition and Assignment
 * -= Subtraction and Assignment
 * *= Multiplication and Assignment
 * /= Division and Assignment
 * %= Modulus and Assignment
 * **= Exponent and Assignment
 * ++ Increment
 * -- Decrement
 * .= Concatenation
 */

$age = 25;
echo $age;
echo "<br>";
$age += 5;
echo $age;

echo "<br>";

$fname = "Mamun";
$lname = "Abdullah";
$fullName = $fname . " " . $lname;
echo $fullName;
