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
