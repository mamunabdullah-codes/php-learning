<?php
// i. find maximum number from an array of numbers
$numbers = [93, 23, 12, 45, 67, 89, 10, 243, 56, 78, 90];
$maxNumber = max($numbers);
echo "The maximum number is " . $maxNumber;
echo "<br>";

// ii. Find 2nd maximum number from an array
// rsort : sorts an array in reverse order (highest to lowest).
$maxToLowNum = rsort($numbers);
echo ("The second maximum number is " . $numbers[2]);
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

// x. Check if email address is unique
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
$usernames = ["mamun", "akram", "mahmoud", "mamun", "akram", "mahmoud"];
$usernames = array_unique($usernames);
echo "The unique usernames are " . implode(", ", $usernames);
echo "<br>";

// xii. Merge 2 comma separated lists with unique value only
$list1 = "red, green, blue, yellow, orange, pink";
$list2 = "red, green, blue, yellow, orange, pink, mamun, akram, mahmoud";
$list1 = explode(",", $list1);
$list2 = explode(",", $list2);
$list3 = array_merge($list1, $list2);
$list3 = array_unique($list3);
echo "The merged list is " . implode(", ", $list3);
echo "<br>";

/*************************************************************************
 * XIII. DIFFERENCE BETWEEN 2 MULTI-DIMENSIONAL ARRAYS => NOT UNDERSTOOD *
 *************************************************************************/

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

/***************************************************************************
 *   XVI. FILTER OUT ARRAY DATA WITH SOME SPECIFIC KEYS => NOT UNDERSTOOD  *
 ***************************************************************************/
