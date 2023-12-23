<?php
//if statement
$age = 02;
if ($age >= 18) {
    echo "You are old enough to vote";
} else {
    echo "You are not old enough to vote";
}

echo "<br>";

if ($age <= 12) {
    echo "You are a child";
} elseif ($age <= 19) {
    echo "You are a teenager";
} elseif ($age <= 30) {
    echo "You are an adult";
} elseif ($age <= 50) {
    echo "You are an middle aged person";
} else {
    echo "You are an old person";
}

echo "<br>";

//switch statement
$day = "Saturday";
switch ($day) {
    case "Sunday":
        echo "Today is Sunday";
        break;
    case "Monday":
        echo "Today is Monday";
        break;
    case "Tuesday":
        echo "Today is Tuesday";
        break;
    case "Wednesday":
        echo "Today is Wednesday";
        break;
    case "Thursday":
        echo "Today is Thursday";
        break;
    case "Friday":
        echo "Today is Friday";
        break;
    case "Saturday":
        echo "Today is Saturday";
        break;
    default:
        echo "Invalid day";
        break;
}

echo "<br>";

$myName = "Karim";
switch ($myName) {
    case "Mamun":
        echo "My name is Mamun";
        break;
    case "Akram":
        echo "My name is Akram";
        break;
    case "Mahmoud":
        echo "My name is Mahmoud";
        break;
    default:
        echo "Your name is not in the list";
}
echo "<br>";

$myAge = 55;
switch ($myAge) {
    case ($myAge < 18):
        echo "I am not eligible for vote";
        break;
    default:
        echo "I am eligible for vote";
}
echo "<br>";

// Turnery operator
$myCity = "Dhaka";
if ($myCity == "Khulna") {
    echo "You are from Khulna";
} else {
    echo "You are not from Khulna";
}
echo "<br>";

echo ($myCity == "Khulna") ? "You are from Khulna" : "You are not from Khulna";
echo "<br>";

// Null coalescing operator ??
echo $country ?? "Bangladesh";
