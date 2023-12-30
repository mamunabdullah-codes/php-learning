<?php
// i. find maximum number from an array of numbers
$numbers = [93, 23, 12, 45, 67, 89, 10, 243, 56, 78, 90];
$maxNumber = max($numbers);
echo "The maximum number is " . $maxNumber;
echo "<br>";

// ii. Find 2nd maximum number from an array
// rsort : sorts an array in reverse order (highest to lowest).
$maxToLowNum = rsort($numbers);
echo ("The second maximum number is " . $numbers[2]);
echo "<br>";

// iii. Sort array from min to max
$sortNumber = sort($numbers);
echo "The sorted array is " . implode(", ", $numbers);
echo "<br>";

// iv. Calculate average number of an array
$sum = array_sum($numbers);
$average = $sum / count($numbers);
echo "The average number is " . $average;
echo "<br>";
