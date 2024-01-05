<?php
function personInfo($name, $age, $city)
{
    echo "Name: $name, Age: $age, City: $city";
    echo "<br>";}
personInfo("John", 30, "New York");

function personInfo2($h = "Hi", $w = "World")
{
    // echo "Ha Ha Ha <br>";
    return "$h $w <br>";
    echo "ha ha ha";
};

echo personInfo2("Hello", "World");
echo personInfo2("Hello", "Universe");
echo personInfo2("Hello");
echo personInfo2(w: "Brother");
echo personInfo2();

// function personInfo3($parameter1 = "Hi", $parameter2 = "World")
// {
// echo "Parameter 1: $parameter1, Parameter 2: $parameter2";
// echo "<br>";
// };
// personInfo3($argument1, $argument2);
// parameter and arguments are same but when they are in function they are called parameter
// and when they are called at the function later the are called argument.
