<?php 
// data type
//string
$personName = "Mamun Abdullah";
var_dump($personName) . "<br/>";
echo "<br/>";
echo "<br/>";

//integer
$personAge = 23;
var_dump($personAge);
echo "<br/><br/>";

//float
$personHeight = 5.8;
var_dump($personHeight);
echo "<br/><br/>";

//boolean
$personIsMale = true;
var_dump($personIsMale);
echo "<br/><br/>";

//array
$personHobbies = ["readings", "watching Movies", "Programming",25, true ];
var_dump($personHobbies);
echo "<br/><br/>";

//object
class personInfo {
  public $personName = "Mamun";
}

$obj = new personInfo;
var_dump($obj);
echo "<br/> <br/>";

//null
$personName = null;
var_dump($personName);
echo "<br/><br/>";

// resource
/* $personName = fopen("data-type.php","R");
var_dump($personName);
echo "<br/> <br/>"; */


//COMMENTS
//single line comment
#this is also a single line comment
/*
This
is a 
multi line comment*/
/**
 * This is also
 * a multi line
 * comments
 */
/* Multiline comment shortcut
alt shift a */
  

// constant 
define("y", 321);
echo y;
?>