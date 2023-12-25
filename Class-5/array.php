<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
//indexed array
$colors = array("red", "green", "blue", "yellow", "orange");
$studentName = ["Rahim", "Karim", "Rafique", "Jabbar"];
$studentInfo = ["Rahim", 25, true, null];
echo "<pre>";
var_dump($studentInfo);
print_r($studentInfo);
gettype($studentInfo);
echo "<pre>";

echo gettype($studentInfo) . "<br/>";
echo $studentInfo[1] . "<br/>";
echo "<br>";
for ($i = 0; $i < count($studentInfo); $i++) {
    echo $studentInfo[$i] . "<br/>";
}
echo "<br>";
foreach ($studentInfo as $value) {
    echo $value . "<br>";
}

//associative array
$studentData = [
    "name" => "Rahim",
    "age" => 25,
    "gender" => "Male",
    "address" => "Dhaka",
];
echo var_dump($studentData);
print_r($studentData);
echo "<pre>";
echo $studentData["name"] . "<br/>";

foreach ($studentData as $key => $value) {
    echo $key . " => " . $value . "<br/>";
}
echo "<br>";
foreach ($studentData as $value) {
    echo "<div style='color:red; padding:5px'> $value</div>";
}

?>
</body>
</html>