<?php

//Viết chương trình PHP để đảo ngược một chuỗi.
function revertString($string){
    return strrev($string);
}
echo revertString("Thanh");
echo "</br>";

//Viết chương trình PHP để tính số lượng phần tử trong một mảng.
$array = array(1,3,4,57,34,12);
$quantity = count($array);
echo "Số lượng phần tử của mảng $array là: ".$quantity;
echo "</br>";

//Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi Palindrome hay không.
function checkPalindromeString($string)   
{  
  if ($string == strrev($string))  
      echo "Đây là chuỗi Palindrome";  
  else  
  echo "Đây không phải là chuỗi Palindrome";  
}  
echo checkPalindromeString('Thanh')."<br>";


//Viết chương trình PHP để đếm số lần xuất hiện của một phần tử trong một mảng.
$array = array(1,3,7,3,8,1,7,2,6,2,9,4,2,5,6,2,2,5,1,8);
echo "số lần xuất hiện của: </br> ";
echo "<pre>";
print_r(array_count_values($array));
echo "</br>";

//Viết chương trình PHP để sắp xếp một mảng theo thứ tự giảm dần.
$array = array(1,3,7,3,8,1,7,2,6,2,9,4,2,5,6,2,2,5,1,8);
rsort($array);
foreach( $array as $c) {
    echo "$c ";
}
echo "</br>";

//Viết chương trình PHP để thêm một phần tử vào đầu hoặc cuối của một mảng.
function addElementToArray($array, $element, $position)
{
    if ($position === 'beginning') {
        array_unshift($array, $element);
    } elseif ($position === 'end') {
        $array[] = $element;
    }
    return $array;
}
$array = array(1,3,7,3,8,1,7,2,6,2,9,4,2,5,6,2,2,5,1,8);
$element = 10;
$position = 'end';
$resultArray = addElementToArray($array, $element, $position);
print_r($resultArray);

//Viết chương trình PHP để tìm số lớn thứ hai trong một mảng.
function findSecondLargestNumber($array)
{
    $count = count($array);
    if ($count < 2) {
        return "Không có số lớn thứ hai trong mảng.";
    }
    rsort($array);
    return $array[1];
}
$array = array(1,3,7,3,8,1,7,2,6,2,9,4,2,5,6,2,2,5,1,8);
$secondLargest = findSecondLargestNumber($array);
echo "Số lớn thứ hai trong mảng là: " . $secondLargest;
echo "<br>";

//Viết chương trình PHP để tìm ước số chung lớn nhất và bội số chung nhỏ nhất của hai số nguyên dương.
function findGCD($a, $b)
{
    while ($b != 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }

    return $a;
}

function findLCM($a, $b)
{
    $gcd = findGCD($a, $b);
    $lcm = ($a * $b) / $gcd;

    return $lcm;
}
$num1 = 8;
$num2 = 64;
$gcd = findGCD($num1, $num2);
$lcm = findLCM($num1, $num2);
echo "Ước số chung lớn nhất của $num1 và $num2 là: " . $gcd . "<br>";
echo "Bội số chung nhỏ nhất của $num1 và $num2 là: " . $lcm;
echo "<br>";

//Viết chương trình PHP để kiểm tra xem một số có phải là số hoàn hảo hay không.
function perfectNumber($number)
{
    if ($number <= 0) {
        return false;
    }
    $sum = 0;
    for ($i = 1; $i <= $number / 2; $i++) {
        if ($number % $i == 0) {
            $sum += $i;
        }
    }
    if ($sum == $number) {
        return true;
    } else {
        return false;
    }
}
$number = 28;
if (perfectNumber($number)) {
    echo "$number là số hoàn hảo.";
} else {
    echo "$number không phải là số hoàn hảo.";
}
    echo "<br>";

//Viết chương trình PHP để tìm số lẻ lớn nhất trong một mảng.
function findLargestOddNumber($arr)
{
    $largestOddNumber = null;
    foreach ($arr as $number) {
        if ($number % 2 != 0 && ($largestOddNumber === null || $number > $largestOddNumber)) {
            $largestOddNumber = $number;
        }
    }
    return $largestOddNumber;
}

$array = array(1,3,7,3,8,1,7,2,6,2,9,4,2,5,6,2,2,5,1,8);
$largestOdd = findLargestOddNumber($array);
if ($largestOdd !== null) {
    echo "Số lẻ lớn nhất trong mảng là: " . $largestOdd;
} else {
    echo "Không có số lẻ trong mảng.";
}
    echo "<br>";

//Viết chương trình PHP để kiểm tra xem một số có phải là số nguyên tố hay không.
function prime($number)
{
    if ($number < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}
$number = 9;
if (prime($number)) {
    echo "$number là số nguyên tố.";
} else {
    echo "$number không phải là số nguyên tố.";
}
echo "<br>";

//Viết chương trình PHP để tìm số dương lớn nhất trong một mảng.
function findLargestPositiveNumber($arr)
{
    $largestPositiveNumber = null;
    foreach ($arr as $number) {
        if ($number > 0 && ($largestPositiveNumber === null || $number > $largestPositiveNumber)) {
            $largestPositiveNumber = $number;
        }
    }
    return $largestPositiveNumber;
}

$array = [1,5,-1,4,-23,6,-74];
$largestPositive = findLargestPositiveNumber($array);
if ($largestPositive !== null) {
    echo "Số  lớn nhất trong mảng là: " . $largestPositive;
} else {
    echo "Không có số dương trong mảng.";
}
    echo "<br>";

//Viết chương trình PHP để tìm số âm lớn nhất trong một mảng.
function findLargestNegativeNumber($array)
{
    $largestNegativeNumber = null;
    foreach ($array as $number) {
        if ($number < 0 && ($largestNegativeNumber === null || $number > $largestNegativeNumber)) {
            $largestNegativeNumber = $number;
        }
    }
    return $largestNegativeNumber;
}

$array = [1,5,-1,4,-23,6,-74];
$largestNegative = findLargestNegativeNumber($array);
if ($largestNegative !== null) {
    echo "Số âm lớn nhất trong mảng là: " . $largestNegative;
} else {
    echo "Không có số âm trong mảng.";
}
    echo "<br>";

//Viết chương trình PHP để tính tổng các số lẻ từ 1 đến n.
function sumOfOddNumbers($n)
{
    $sum = 0;
    for ($i = 1; $i <= $n; $i++) {
        if ($i % 2 != 0) {
            $sum += $i;
        }
    }
    return $sum;
}
$n = 20;
$sum = sumOfOddNumbers($n);
echo "Tổng các số lẻ từ 1 đến $n là: " . $sum;
echo "<br>";

//Viết chương trình PHP để tìm số chính phương trong một khoảng cho trước.
function findPerfectSquares($start, $end)
{
    $perfectSquares = [];
    for ($i = $start; $i <= $end; $i++) {
        if (sqrt($i) == (int)sqrt($i)) {
            $perfectSquares[] = $i;
        }
    }
    return $perfectSquares;
}

$start = 50;
$end = 150;
$perfectSquares = findPerfectSquares($start, $end);
echo "Các số chính phương trong khoảng $start đến $end là: " . implode($perfectSquares);
echo "<br>";

//Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi con của một chuỗi khác hay không.
$findString = strpos("dinh thanh", "thanh");
   if ($findString == true) {
   echo "chuỗi chứa chuỗi con ";
   } else {
             echo "chuỗi không chứa chuỗi con";
   }



?>