<?php
// array
$names = array("Kamal", "Jamal", "Rahman", "Mohammad", "Rahim", "Abdullah");
print_r($names);
echo "<br>";
// is array
$cities = ["Dhaka", "Magura", "Chittagong"];
var_dump(is_array($cities));
echo "<br>";

//in array
echo in_array("Kamal", $names);

//array marge
$nameAndCity = array_merge($names, $cities);
print_r($nameAndCity);
echo "<br>";

// array keys
$myInfo = [
    "Name" => "Mamun Abdullah",
    "Age" => 35,
    "Gender" => "Male",
    "City" => "Dhaka",
];

print_r(array_keys($myInfo));
echo "<br>";

//array key exist
echo array_key_exists("Name", $myInfo);
echo "<br>";

//array shift
array_shift($names);
print_r($names);
echo "<br>";

array_unshift($names, "Mamun", "Akmal");
print_r($names);
echo "<br>";

//array push
array_push($names, "Abdullah", "Kabul");
print_r($names);
echo "<br>";

//array_pop
array_pop($names);
print_r($names);
echo "<br>";

//array value
print_r(array_values($names));
echo "<br>";

//array map
array_map(function ($n) {
    echo $n . ", ";
}, $names);
echo "<br>";
//array unique
$person = ["Aslam", "Abdullah", "Mamun", "Abdullah"];
print_r(array_unique($person));
echo "<br>";

//array_slice
print_r(array_slice($person, 1, 3));
echo "<br>";

//array_diff
print_r(array_diff($names, $person));
echo "<br>";

//array_search
echo array_search("Abdullah", $names);
echo "<br>";

print_r(array_reverse($names));
