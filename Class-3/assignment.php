<?php
//01. Electric Bill Calculation

$unitConsumed = 350;
if ($unitConsumed <= 50) {
    echo "Your electric bill for $unitConsumed unit is" . " " . $unitConsumed * 3.5;
} elseif ($unitConsumed > 50 && $unitConsumed <= 150) {
    echo "Your electric bill for $unitConsumed unit is" . " " . (50 * 3.5 + ($unitConsumed - 50) * 4);
} elseif ($unitConsumed > 150 && $unitConsumed <= 250) {
    echo "Your electric bill for $unitConsumed unit is" . " " . (50 * 3.5 + 100 * 4 + ($unitConsumed - 150) * 5.2);
} else {
    echo "Your electric bill for $unitConsumed unit is" . " " . (50 * 3.5 + 100 * 4 + 100 * 5.2 + ($unitConsumed - 250) * 6.5);
}

echo "<br>";
echo "<br>";

//02. A PHP calculator using switch case (Addition, Subtraction, Multiplication, Division)
$num1 = 10;
$num2 = 20;
$operator = "+";

switch ($operator) {
    case "+":
        echo "The summation result is" . " " . $num1 + $num2;
        break;
    case "-":
        echo "The subtraction result is" . " " . $num1 - $num2;
        break;
    case "*":
        echo "The multiplication result is" . " " . $num1 * $num2;
        break;
    case "/":
        echo "The division result is" . " " . $num1 / $num2;
        break;
    default:
        echo "Invalid operator";
}
echo "<br>";
echo "<br>";

//03. Check if a person is eligible to vote by age
$age = 18;
if ($age >= 18) {
    echo "You are eligible to vote";
} else {
    echo "You are not eligible to vote";
}
echo "<br>";
echo "<br>";

//04. Check if a person is eligible for marriage in BD by gender
$gender = "Male";
$age = 23;
if ($gender == "Male" && $age >= 21) {
    echo "You are Male and eligible for marriage";
} elseif ($gender == "Female" && $age >= 18) {
    echo "You are Female and eligible for marriage";
} else {
    echo "You are not eligible for marriage";
}
echo "<br>";
echo "<br>";

//05. Check if number is positive or negative
$num = -20;
if ($num > 0) {
    echo "The number $num is a <strong>Positive</strong> number";
} elseif ($num < 0) {
    echo "The number $num is a <strong>Negative</strong> number";
} else {
    echo "The number is <strong>Zero</strong>";
}
echo "<br>";
echo "<br>";

//06. Check if number is odd or even
$num = 10;
if ($num % 2 == 0) {
    echo "The number $num is an <strong>Even</strong> number";
} else {
    echo "The number $num is an <strong>Odd</strong> number";
}
echo "<br>";
echo "<br>";

//07. Check if data is integer or string
$data = 10;
if (is_int($data)) {
    echo "The data $data is an <strong>Integer</strong>";
} else {
    echo "The data $data is a <strong>String</strong>";
}
