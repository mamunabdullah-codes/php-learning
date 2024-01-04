<?php
date_default_timezone_set('Asia/Dhaka');
echo date("F-d-Y h:i:s A");
echo "<br>";

//mktime (hour, minute, second, month, day, year)
$myBirthday = mktime(0, 0, 0, 10, 27, 2024);
echo date("F-d-Y h:i:s A l", $myBirthday) . "<br/>";

//strtotime
$myBirthday2 = ("27 October 2024");
echo date("F-d-Y h:i:s A l", strtotime($myBirthday2)) . "<br/>";

$myStrTime = strtotime("Tomorrow");
echo date("F-d-Y h:i:s A l", $myStrTime) . "<br/>";

$mystrTime2 = strtotime("next sunday");
echo date("F-d-Y h:i:s A l", $mystrTime2) . "<br/>";

$mystrTime3 = strtotime("+2 months");
echo date("F-d-Y h:i:s A l", $mystrTime3) . "<br/>";

$mystrTime4 = strtotime("+2 years + 3 months + 5 days");
echo date("F-d-Y h:i:s A l", $mystrTime4) . "<br/>";

// next 7 fridays
$startDate = strtotime("next friday");
$endDate = strtotime("+6 weeks", $startDate);
while ($startDate <= $endDate) {
    echo date("F-d-Y /l;", $startDate) . "<br>";
    $startDate = strtotime("+1 Weeks", $startDate);
}

//filter
$myVar = 123;
print_r(filter_var($myVar, FILTER_VALIDATE_EMAIL));

echo "<br>";
