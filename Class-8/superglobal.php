<?php
// GLOBALS variable
/* if ($_SERVER[REQUEST_METHOD] !== 'POST') {
echo "Your are not allowed to visit this page";
}
; */

$personOne = "Abdullah";

function person()
{
    // echo $GLOBALS['personOne'];
    global $personOne;
    echo $personOne;
}
person();
echo "<br>";

// $_SERVER super global
echo $_SERVER['PHP_SELF'] . "<br>";
echo $_SERVER['SERVER_NAME'] . "<br>";
echo $_SERVER['SCRIPT_FILENAME'] . "<br>";
echo $_SERVER['SERVER_PORT'] . "<br>";
echo $_SERVER['REQUEST_URI'] . "<br>";
echo $_SERVER['SCRIPT_NAME'] . "<br>";
// echo $_SERVER['SERVER_USER'] . "<br>";
// echo $_SERVER['SERVER_PASSWORD'] . "<br>;
