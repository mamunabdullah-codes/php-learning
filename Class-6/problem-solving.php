<?php
// i. find maximum number from an array of numbers
$numbers = [93, 23, 12, 45, 67, 89, 10, 43, 56, 78, 90, 93, 40, 90, 85, 19, 93];
$maxNumber = max($numbers);
echo "The maximum number is " . $maxNumber;
echo "<br>";

// ii. Find 2nd maximum number from an array
// rsort : sorts an array in reverse order (highest to lowest).
rsort($numbers);
$uniqueNumbers = array_values(array_unique($numbers));
// $max2 = array_values($uniqueNumbers, 1, 1);
echo ("The second maximum number is " . $uniqueNumbers[1]);
echo "<br>";

// iii. Sort array from min to max
$sortNumber = sort($numbers);
echo "The sorted array is " . implode(", ", $numbers);
echo "<br>";

// iv. Calculate average number of an array
$sum = array_sum($numbers);
$average = $sum / count($numbers);
echo "The average number is " . $average;
echo "<br>";

// v. Merging 2 different types of array together
$array1 = [1, 2, 3, 4, 5];
$array2 = [6, 7, 8, 9, 10, "Mamun", true, null];
$array3 = array_merge($array1, $array2);
echo "The merged array is " . implode(", ", $array3);
echo "<br>";

//vi. Search data from an array
$array = ["red", "green", "blue", "yellow", "orange", "pink"];
$search = "yellow";
$result = array_search($search, $array);
if ($result === false) {
    echo "The value is not in the array";
} else {
    echo "The value is in the array at index " . $result;
}
echo "<br>";

// other way
if (in_array($search, $array)) {
    echo "The value is in the array";
} else {
    echo "The value is not in the array";
}
echo "<br>";

// vii. Show array data in lowercase and uppercase
$array = ["Red", "Green", "Blue", "Yellow", "Orange", "Pink"];
$array = array_map('strtolower', $array);
echo "The array in lowercase is " . implode(", ", $array);
echo "<br>";

$array = ["Red", "Green", "Blue", "Yellow", "Orange", "Pink"];
$array = array_map('strtoupper', $array);
echo "The array in uppercase is " . implode(", ", $array);
echo "<br>";

// viii. Get unique values
$array = ["Red", "Green", "Blue", "Yellow", "Orange", "Pink", "Red", "Green", "Blue"];
$array = array_unique($array);
echo "The unique values are " . implode(", ", $array);
echo "<br>";

//ix. Remove duplicate values from array
$array = [95, 23, 65, 90, 23, 90, 65, 20, "Red", "Green", "Blue", "Yellow", "Orange", "Pink", "Red", "Green", "Blue", "Yellow"];
$array = array_unique($array);
echo "The unique values are " . implode(", ", $array);
echo "<br>";

// x. check if email address is unique
$email = "example@example.com";
$existingEmails = ["user1@example.com", "user2@example.com", "user3@example.com"];
$isUnique = !in_array($email, $existingEmails);
echo $isUnique ? "The email address is unique" : "The email already exists";
echo "<br>";

//  Check if email address is valid
$email = "<almamuneco@gmail.com>";
$email = strtolower($email);
$email = str_replace(" ", "", $email);
$email = explode("@", $email);
$email = $email[1] ?? null;
$email = explode(".", $email);
$email = $email[0] ?? null;
$email = $email . "@gmail.com";
$email = filter_var($email, FILTER_VALIDATE_EMAIL);
if ($email === false) {
    echo "The email address is not valid";
} else {
    echo "The email address is valid";
}
echo "<br>";

// xi. Check unique username from an array
$username = "mamun";
$existingUserNames = ["mamun", "akram", "mahmoud", "mamun", "akram", "mahmoud"];
$isUniqueUser = !in_array($username, $existingUserNames);
echo $isUniqueUser ? "The username is unique" : "The username already exists";
echo "<br>";

// xii. Merge 2 comma separated lists with unique value only
$list1 = "red, green, blue, yellow, orange, pink";
$list2 = "red, green, blue, yellow, orange, pink, mamun, akram, mahmoud";
$mergedList1 = implode(", ", array_unique(array_merge(explode(", ", $list1), explode(", ", $list2))));
// $mergedList = array_merge(explode(",", $list1), explode(",", $list2));
// $mergedList = array_unique($mergedList);
echo "xii. The merged list is: " . $mergedList1;
echo "<br>";

/*************************************************************************
 * XIII. DIFFERENCE BETWEEN 2 MULTI-DIMENSIONAL ARRAYS => NOT UNDERSTOOD *
 *************************************************************************/
$array1 = array('a' => 1, 'b' => 2, 'c' => 3);
$array2 = array('b' => 2, 'c' => 3, 'd' => 4);
$diff = array_diff_assoc($array1, $array2);
print_r($diff);
echo "<br>";
$array1 = ["red", "green", "blue", "yellow", "orange", "pink", 25, 65, true, null];
$array2 = ["mamun", "Abdullah", "red", 95, 35, 60, "green", "blue"];
$array3 = array_diff($array1, $array2);
echo "The difference between the 2 arrays is " . implode(", ", $array3);
echo "<br>";

//xiv. Check if all values are string or not
$array = [1, 2, 3, 4, 5, "Mamun", "Akram", "Mahmoud", true, null];
$allString = true;
foreach ($array as $value) {
    if (!is_string($value)) {
        $allString = false;
        break;
    }
}

if ($allString) {
    echo "All values are string";
} else {
    echo "All values are not string";
}
;
echo "<br>";

// XV. UNION OF 2 ARRAYS

$array1 = ["red", "green", "blue", "yellow", "orange", "pink"];
$array2 = ["mamun", "Abdullah", "red", 95, 35, 60, "blue"];
$array3 = array_unique(array_merge($array1, $array2));
echo "The union of the 2 arrays is " . implode(", ", $array3);
echo "<br>";

/***************************************************************************
 *   XVI. FILTER OUT ARRAY DATA WITH SOME SPECIFIC KEYS => NOT UNDERSTOOD  *
 ***************************************************************************/
$data = array('name' => 'Mamun', 'age' => 35, 'city' => 'Khulna');
$allowedKeys = array('name', 'city');
$filterData = array_intersect_key($data, array_flip($allowedKeys));
print_r($filterData);
