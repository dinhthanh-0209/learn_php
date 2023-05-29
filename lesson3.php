<?php

//Viết chương trình PHP để kiểm tra xem một số có phải là số chẵn hay không.
echo "Bài 1:" ;
function checkNumber($number) {
    if ($number % 2 == 0) {
        return true;
    } else {
        return false;
    }
}
$number = 14;
if (checkNumber($number)) {
    echo " Số $number là số chẵn.";
} else {
    echo " Số $number không là số chẵn.";
}
 echo "<br>";
//Viết chương trình PHP để tính tổng của các số từ 1 đến n.
echo "Bài 2: ";
function total($number) {
      $sum = 0;
        for ($i = 0; $i <= $number; $i++) {
           $sum += $i;
}
        return $sum;
}
$number2 = 14;
$result2 = total(14);
echo "Tổng các số từ 1 đến $number2 là: $result2";
echo "<br>";
//3 Viết chương trình PHP để in ra bảng cửu chương từ 1 đến 10.
echo "Bài 3:" . "<br>";
function multiplicationTable(){
    for ($x=1; $x<=10; $x++){
        for ($y=1; $y <= 10; $y++){
            $total= $x * $y;
            echo "$x*$y= $total <br>";
        }
        echo "<br>";
    }
}
echo  multiplicationTable() ;
//4 Viết chương trình PHP để kiểm tra xem một chuỗi có chứa một từ cụ thể hay không.
echo "Bài 4:" ;
function checkString( $string, $word){
    if (strpos($string, $word) !== false) {
       echo " Chuỗi $string chứa từ " . $word ;
    } else {
        echo " Chuỗi $string không chứa từ " . $word ;
}
}
checkString("Hệ thống thông tin", "thống") ;
echo "<br>";   
//5 Viết chương trình PHP để tìm giá trị lớn nhất và nhỏ nhất trong một mảng.
echo "Bài 5:" . "<br>";
function findValue($array) {
     echo "Giá trị lớn nhất là: " . Max($array) . "<br>";
     echo "Giá trị nhỏ nhất là: " . Min($array) ;
}
findValue($array = array(1,3,7,3,8,1,7,2,6,2,9,4,2,5,6,2,2,5,1,8));
echo "<br>";  
//6 Viết chương trình PHP để sắp xếp một mảng theo thứ tự tăng dần.
echo "Bài 6:" ;
function sortArray($array) {
    sort($array); 
    echo " Mảng sắp xếp theo thứ tự tăng dần là : " ;
      foreach( $array as $value) {
          echo $value .  "," ;
}
}
sortArray($array = $array = array(1,3,7,3,8,1,7,2,6,2,9,4,2,5,6,2,2,5,1,8));
echo "<br>" ;
//7 Viết chương trình PHP để tính giai thừa của một số nguyên dương.
echo "Bài 7:" ;
function factorialCalculation($number) {
        $factorial= 1;
        if ($number == 0 || $number == 1) {
            return $factorial;
        } 
        else {
            for($i = 2; $i <= $number; $i ++) {
                $factorial *= $i;
            }
            return $factorial;
        }
    }
$number = 8 ;
echo " Giai thừa của " . $number . " là: " . factorialCalculation( $number ) . "<br>";
//8 Viết chương trình PHP để tìm số nguyên tố trong một khoảng cho trước.
echo "Bài 8:" ;
function findPrime($number) {
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0){
            return false;
        }
    }
    return true;
}
    function showPrime($a, $b){
        echo " Số nguyên tố là: " ;
           for ($i = $a; $i <= $b; $i++){
              if(findPrime($i))
               echo $i, ",";
    }
}
showPPrime (10,20);
echo "<br>";
//9 Viết chương trình PHP để tính tổng của các số trong một mảng.
echo "Bài 9:" ;
function totalArray($array){
    $sum = 0;
    foreach ($array as $value){
        $sum += $value;
    }
    return $sum;
}
$array = array(1,3,7,3,8,1,7,2,6,2,9,4,2,5,6,2,2,5,1,8) ;
echo " Tổng của các số trong một mảng là: " . totalArray($array);
echo "<br>";
//10 Viết chương trình PHP để in ra các số Fibonacci trong một khoảng cho trước.
echo "Bài 10:" ;
function fibonacci($n) {
    if ($n < 0) {
        return - 1;
    } else if ($n == 0 || $n == 1) {
        return $n;
    } else {
        return fibonacci ( $n - 1 ) + fibonacci ( $n - 2 );
    }
} 
echo "Các số Fibonacci trong khoảng từ 0 đến 20 là: " ;
 for($i = 0; $i <= 20; $i ++) {
    echo (fibonacci ( $i ) . " ");}
echo " <br> ";
//11 Viết chương trình PHP để kiểm tra xem một số có phải là số Armstrong hay không.
echo "Bài 11:" ;
function checkArmstrong($number){
        $sum = 0;
        $temp = $number;
        $number1 = strlen($number);
    
        while ($temp!= 0) {
            $remainder = $temp % 10;
            $sum += pow($remainder, $number1);
            $temp = (int)($temp/ 10);
        }
        if ($number == $sum) {
            return true;
        } else {
            return false;
        }
    }
    $number = 1407;
    if (checkArmstrong($number)) {
        echo $number . " là số Armstrong.";
       } 
    else {
       echo $number . " không là số Armstrong.";
       }
echo "<br>";
//12 Viết chương trình PHP để chèn một phần tử vào một mảng ở vị trí bất kỳ.
echo "Bài 12" ;
function insertElement($array, $element, $position) {
    array_splice($array, $position, 0, $element);
    return $array;
}
$array = array(1,3,7,3,8,1,7,2,6,2,9,4,2,5,6,2,2,5,1,8);
$element = 10;
$position = 20;
$newArray = insertElement($array, $element, $position);
echo " Mảng mới sau khi chèn phần tử " . $element . " vào vị trí " . $position . " là: ";
foreach ($newArray as $value) {
    echo $value . ",";
}
echo "<br>" ;
//13 Viết chương trình PHP để loại bỏ các phần tử trùng lặp trong một mảng.
echo "Bài 13: ";
function arrayUnique($array) {
    $array = array_unique($array);
    return $array;
}
$array = array(1,3,7,3,8,1,7,2,6,2,9,4,2,5,6,2,2,5,1,8);
$newArray = arrayUnique($array);
echo "Mảng sau khi loại bỏ các phần tử trùng lặp là: ";
foreach ($newArray as $value) {
    echo $value . " ";
}
echo "<br>";
//14 Viết chương trình PHP để tìm vị trí của một phần tử trong một mảng.
echo "Bài 14: ";
function findPosition($arr, $element) {
    $positions = [];
    foreach ($arr as $index => $value) {
        if ($value == $element) {
            $positions[] = $index;
        }
    }
    return $positions;
}
$array = array(1,3,7,3,8,1,7,2,6,2,9,4,2,5,6,2,2,5,1,8);
$element = 4;
$positions = findPosition($array, $element);
echo "Vị trí của số $element trong mảng là: " . implode(", ", $positions);
echo "<br>" ;

//Viết chương trình PHP để đảo ngược một chuỗi.
echo "Bài 15:" ;
function revertString($string){
    return strrev($string);
}
echo revertString("Thanh");
echo "</br>";

//Viết chương trình PHP để tính số lượng phần tử trong một mảng.
echo "Bài 16:" ;
$array = array(1,3,4,57,34,12);
$quantity = count($array);
echo "Số lượng phần tử của mảng $array là: ".$quantity;
echo "</br>";

//Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi Palindrome hay không.
echo "Bài 17:" ;
function checkPalindromeString($string)   
{  
  if ($string == strrev($string))  
      echo "Đây là chuỗi Palindrome";  
  else  
  echo "Đây không phải là chuỗi Palindrome";  
}  
echo checkPalindromeString('Thanh')."<br>";


//Viết chương trình PHP để đếm số lần xuất hiện của một phần tử trong một mảng.
echo "Bài 18:" ;
$array = array(1,3,7,3,8,1,7,2,6,2,9,4,2,5,6,2,2,5,1,8);
echo "số lần xuất hiện của: </br> ";
echo "<pre>";
print_r(array_count_values($array));
echo "</br>";

//Viết chương trình PHP để sắp xếp một mảng theo thứ tự giảm dần.
echo "Bài 19:" ;
$array = array(1,3,7,3,8,1,7,2,6,2,9,4,2,5,6,2,2,5,1,8);
rsort($array);
foreach( $array as $c) {
    echo "$c ";
}
echo "</br>";

//Viết chương trình PHP để thêm một phần tử vào đầu hoặc cuối của một mảng.
echo "Bài 20:" ;
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
echo "Bài 21:" ;
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
echo "Bài 22:" ;
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
echo "Bài 23:" ;
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
echo "Bài 24:" ;
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
echo "Bài 25:" ;
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
echo "Bài 26:" ;
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
echo "Bài 27:" ;
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
echo "Bài 28:" ;
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
echo "Bài 29:" ;
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
echo "Bài 30:" ;
$findString = strpos("dinh thanh", "thanh");
   if ($findString == true) {
   echo "chuỗi chứa chuỗi con ";
   } else {
             echo "chuỗi không chứa chuỗi con";
   }



?>
