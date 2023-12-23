<?php
// loop
// start point
// end point
// increment / decrement

//while loop
$x = 0;
while ($x <= 10) {
    echo "The number is: $x , ";
    $x++;
}
echo "<br>";

//do while loop
$y = 35;
do {
    echo $y . ", ";
    $y++;
} while ($y < 10);
echo "<br>";

// for loop
for ($i = 1; $i < 100; $i++) {
    if ($i == 36) {
        continue;
    }
    if ($i % 6 == 0) {
        echo $i . ", ";
    }
    if ($i > 60) {
        break;
    }
}
echo "<br>";

//foreach loop
$colors = ["red", "green", "blue", "yellow", "orange"];
foreach ($colors as $value) {
    echo $value . ", ";
}
echo "<br>";

// Tables

$ghor = 8;
for ($i = 1; $i <= 10; $i++) {
    echo $ghor . " x " . $i . " = " . $ghor * $i . "<br>";
}
