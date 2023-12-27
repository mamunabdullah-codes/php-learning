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
foreach ($studentData as $key => $value) {
    echo "<div style='color:red; padding:5px'>" . ucfirst($key) . " : " . $value . "</div>";
}

// multidimensional array
$students = [
    ["Rahim", 25, "Male", "Dhaka"],
    ["Karim", 23, "Male", "Khulna"],
    ["Rafique", 22, "Male", "Chittagong"],
    ["Jabbar", 21, "Male", "Rajshahi"],
    ["Mamun", 24, "Male", "Sylhet"],
];
echo "<br>";
echo print_r($students);
echo "<br>";
echo $students[3][3] . "<br/>";
echo "<br>";

foreach ($students as $student) {
    foreach ($student as $value) {
        echo $value . ", ";
    }
    echo "<br>";
}
echo "<br>";

foreach ($students as $student) {
    foreach ($student as $key => $value) {
        if ($key == count($student) - 1) {
            echo $value;
        } else {
            echo $value . ", ";
        }
    }
    echo "<br>";
}
?>
<?php
/**
 * Array containing names of districts in Bangladesh.
 */

$districts = [
    "Barishal", "Barguna", "Bhola", "Jhalokati", "Patuakhali", "Pirojpur", "Bandarban", "Brahmanbaria", "Chandpur", "Chittagong", "Comilla", "Cox's Bazar", "Feni", "Khagrachhari", "Lakshmipur", "Noakhali", "Rangamati", "Dhaka", "Faridpur", "Gazipur", "Gopalganj", "Kishoreganj", "Madaripur", "Manikganj", "Munshiganj", "Narayanganj", "Narsingdi", "Rajbari", "Shariatpur", "Tangail", "Bagerhat", "Chuadanga", "Jessore", "Jhenaidah", "Khulna", "Kushtia", "Magura", "Meherpur", "Narail", "Satkhira", "Jamalpur", "Jessore", "Netrokona", "Sherpur", "Tangail", "Bogura", "Joypurhat", "Naogaon", "Natore",
];

//Loop through the list of districts and display the district name in form
//of a list item.
foreach ($districts as $district) {
    echo "<li>$district</li>";
}
echo "<br>";
?>



<form action="">
    <select>
        <option>--Select City--</option>
        <option value="Dhaka">Dhaka</option>
        <option value="Khulna">Khulna</option>
        <option value="Chittagong">Chittagong</option>
        <option value="Rajshahi">Rajshahi</option>

    </select>
</form>
</body>
</html>