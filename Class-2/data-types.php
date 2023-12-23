<?php
/**************
 * DATA TYPES *
 **************/
//string
$personName = "Akram Khan";
var_dump($personName);
echo "<br>";
//integer
$age = 25;
var_dump($age);
echo "<br>";
//float
$height = 1.75;
var_dump($height);
echo "<br>";
//boolean
$isMarried = true;
var_dump($isMarried);
echo "<br>";
//array
$cars = ["Volvo", 123, true, null];
var_dump($cars);
echo "<br>";
//object
$person = new stdClass();
$person->name = "MAMUN ABDULLAH";
$person->age = 25;
$person->height = 1.75;
$person->isMarried = true;

echo "<br>";

class personInfo
{
    public $personName = "Mamun Abdullah";
    public $personAge = 25;
    public $personHeight = 1.75;
    public $personMarried = true;
}
$obj = new personInfo;
var_dump($obj);

echo "<br>";

//null
$person = null;
var_dump($person);

echo "<br>";

//resource
$personName = fopen("data-types.php", "r");
var_dump($personName);

/************
 * COMMENTS *
 ************/

//single line comment
# this is also a single line comment
/*
this is a
multi line comment
 */

/**
 * this is a php doc comment
 * this is also a doc block comment
 */

/***************************
 * SHORT HAND FOR COMMENTS *
 ***************************/

// ctrl + / for single line comment

// ctrl + shift + / for multi line comment
/****************************
 *         THIS IS          *
 *         A MULTI          *
 *       LINE COMMENT       *
 * DONE BY USING SHORT HAND *
 ****************************/

// alt + shift + a for muulti line comment
/* THIS IS
A MULTI
LINE COMMENT
DONE BY USING SHORT HAND */

echo "<br>";

/************
 * CONSTANT *
 ************/
define("PI", 3.14);
define("y", 123);
echo y;

echo "<br>";
?>
<?php

?>
