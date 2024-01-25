<?php
//задание 1
function square($a, $b){
    return $a*$b;
};

echo square(3,6);
echo "<br/>";

// задание 2
echo cal_days_in_month(CAL_GREGORIAN, 2, 2024);
echo "<br/>";

//задание 3
function myPrint($callback, $value) {
    $callback($value);
}
myPrint("print_r", 123);
echo "<br/>";

//задание 4,5
function diff($dateOne, $dateTwo){
    return floor(($dateTwo - $dateOne)/(60*60*24));
}
$timestamp = time();
$newYearTimeStamp = mktime(0, 0, 0, 1, 1, 2025);
echo diff($timestamp, $newYearTimeStamp);
echo "<br/>";

$dateOne = mktime(0, 0, 0, 3, 6, 2030);
$dateTwo = mktime(0, 0, 0, 7, 8, 2035);
echo diff($dateOne, $dateTwo);