<?php
// convert PHP data into JSON data
$data = [
    'name' => 'Mamun Abdullah',
    'age' => 25,
    'address' => 'Dhaka',
    'phone' => '01711111111',
    'email' => 'almamuneco@gmail.com',
];

$json = json_encode($data);
echo $json;
echo "<br>";

// print JSON data into PHP data
$phpData = json_decode($json);
echo $phpData->name;
