<?php
// regex_match() pattern matching (regular expression)
$str = "Hello World";
$pattern = "/hello/i"; // i for case insensitive
$result = preg_match($pattern, $str);
echo $result;
echo "<br>";

// preg match all function
$str = "Hello World. Hello Bangladesh";
$pattern = "/hello/i";
echo preg_match_all($pattern, $str);
echo "<br>";

// preg_replace() function
$str = "Hello World. Hello Bangladesh";
$pattern = "/hello/i";
$replace = "Hi";
echo preg_replace($pattern, $replace, $str);
