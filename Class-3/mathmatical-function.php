<?php
// math function
$x = 5.6;
echo round($x) . "<br>";
echo ceil($x) . "<br>";
echo floor($x) . "<br>";
echo sqrt($x) . "<br>";
echo pow($x, 2) . "<br>";
echo min(25, 10, 30, 20, 15) . "<br>";
echo max(25, 10, 30, 20, 15) . "<br>";
echo abs(-25.64) . "<br>";

// get two value after decimal point
$y = 12.3456789;
echo round($y, 2) . "<br>";
echo round($y, 3) . "<br>";
echo number_format($y, 2) . "<br>";

echo "<br>";
echo rand() . "<br>";
echo rand(1, 100) . "<br>";
echo uniqid() . "<br>";
