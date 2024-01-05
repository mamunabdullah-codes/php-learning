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
echo "<br>";

// regex pattern matching (regular expression)
// [] - character classes
$mobile = "01712345678";
$pattern = "/^01[0-9]{9}$/";
echo preg_match($pattern, $mobile);
echo "<br>";

// regex strong password with spacial characters
$password = "Abcd@12300";
// $pattern = "/^[a-zA-Z0-9@#%.]{8,}$/"; // matches only these characters if found then return true
$pattern = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*]).{8,}$/"; // use , at {} to use at least method
echo preg_match($pattern, $password);
echo "<br>";

// regex email validation
$email = "kuddus@boyati.com";
$pattern = "/^[a-zA-Z0-9._-]+@[a-zA-Z0-9]+\.[a-zA-Z.]{2,5}$/";
echo preg_match($pattern, $email);
