<?php
echo "Bai 1: <br>";
class Rectangel {
   protected $length;
   protected $width;
   
   public function __construct($length, $width){
      $this->length = $length;
      $this->width = $width;
   }

   public function calArea() {
      return $this->length * $this->width;
   }

   public function calPerimeter(){
      return ($this->length + $this->width) *2;
   }
}

$length = 12;
$width = 6;
$rectangel = new Rectangel($length, $width);
echo "Area of rectangel: " . $rectangel->calArea()."<br>";
echo "\nPerimeter of rectangel: " . $rectangel->calPerimeter()."<br>";
echo "-------------------------------.<br>";


echo "Bai 2: <br>";
class Point2D {
   protected $x,$y;
   protected $x1,$y1;
   
   public function __construct($x, $y, $x1, $y1){
      $this->x= $x;
      $this->y = $y;
      $this->x1= $x1;
      $this->y1 = $y1;
   }

   public function calDistance() {
      return sqrt(($this->x1 - $this->x)*($this->x1 - $this->x)+($this->y1 - $this->y)*($this->y1 - $this->y));
   }
   }
$x = 9;
$y = 8;
$x1 = 1;
$y1 = 2;
$distance = new Point2D($x, $y, $x1, $y1);
echo "Distance of points: ".$distance->calDistance()."<br>";
echo "-------------------------------.<br>";


echo "Bai 3: <br>";
class integerArray {
   protected $intArr;
   public function __construct($intArr){
       $this->intArr = $intArr;
   }
   public function calSum(){
       $sum = 0;
       foreach($this->intArr as $intArr)
           $sum += $intArr;
       return $sum;
   }
   public function calAvg(){
       $sum = 0;
       $count = 0;
       foreach($this->intArr as $intArr){
           $sum += $intArr;
           $count++;
       }
       return $sum/$count;
   }
   public function calMax(){
       $max = $this->intArr[0];
       foreach($this->intArr as $intArr){
           if($max < $intArr)
               $max = $intArr;
   }
   return $max;
   }
}
$array = [3,5,2,5,6,3,4,8];
$intArr = new integerArray ($array);
echo "Sum: " . $intArr->calSum() . "<br>";
echo "Average: " . $intArr->calAvg() . "<br>";
echo "Max: " . $intArr->calMax()."<br>" ;
echo "-------------------------------.<br>";


echo "Bai 4: <br>";
class Watch {
   protected $hours;
   protected $mins;
   protected $secs;
   public function __contruct($hour, $mins, $secs){
      $this->hours= $hours;
      $this->mins = $mins;
      $this->secs= $secs;
   }
   public function showTime(){
      
      echo sprintf("%02d", $this->hours) . ":" .sprintf("%02d",$this->mins) . ":" . sprintf("%02d",$this->secs);
   }
   public function increaseTime(){
   $this->secs++;
      if ($this->secs >= 60){
         $this->secs == 00;
         $this->mins++;
         if ($this->mins >= 60){
          $this->hous == 00;
          $this->hours++;
            if ($this->hours >= 24){
             $this->hours == 00;
            }
         }
      }
   }
}
   
$show = new Watch(15,37,40);
echo "Now:";
$show->showTime();
echo "<br>";
echo "Next:";
$show->increaseTime();
$show->showTime();

echo "<br>-------------------------------.<br>";


echo "Bai 5: <br>";
class Student{
   protected $code, $fullName, $list;
   public function __construct(){
       $this->list = [];
   }
   public function addNewStudent($code, $fullName){
       $this->list[$code] = $fullName; 
   }
   public function showList(){
       return $this->list;
   }
}
$student = new Student();
$student->addNewStudent("20D191032", "Đinh Thị Thanh");
$student->addNewStudent("20D191001", "Nguyễn Văn A");
echo "<i>Student List: <br></i>";
foreach($student->showList() as $key=>$value)
   echo "ID: " . $key . " <br>" . "Full Name: " . $value . "</br>";
echo "-------------------------------.<br>";


echo "Bai 6 <br>";
class Car{
   private $brand, $color, $year;
   private $list;
   public function __construct($brand, $color, $year){
       $this->brand = $brand;
       $this->color = $color;
       $this->year = $year;
   }
   public function brand(){
       return $this->brand;
   }
   public function color(){
       return $this->color;
   }
   public function year(){
       return $this->year;
   }
}
$car = new Car("BMW", "Black", "1924");
echo "Brand: " . $car->brand() . "<br>";
echo "Color: " . $car->color() . "<br>";
echo "Year: " . $car->year() . "<br>";
echo "-------------------------------.<br>";


echo "Bai 7 <br>";
class Fraction{
   private $numerator, $denominator;
   public function __construct($numerator, $denominator){
       $this->numerator = $numerator;
       $this->denominator = $denominator;
   }
   public function numerator(){
       return $this->numerator;
   }
   public function denominator(){
       return $this->denominator;
   }
   public function reduce($newNumerator, $newDenominator){
       $gcd = 1;
       if($newNumerator>=$newDenominator) 
           $max = $newNumerator;
       else 
           $max = $newDenominator;
       for($i=1; $i<=$max; $i++)
           if($newNumerator%$i==0 && $newDenominator%$i==0)
               $gcd = $i;
       return $gcd;
   }
   public function showFraction($numerator, $denominator){
       if($denominator == 1)
           return $numerator;
       else if($numerator == 0)
           return 0;
       else return [$numerator,$denominator];
   }
   public function addition(Fraction $fraction){
       $newNumerator = ($this->numerator * $fraction->denominator)+($fraction->numerator * $this->denominator);
       $newDenominator = $this->denominator * $fraction->denominator;
       $gcd = $this->reduce($newNumerator, $newDenominator);
       $newNumerator = $newNumerator/$gcd;
       $newDenominator = $newDenominator/$gcd;
       return $this->showFraction($newNumerator,$newDenominator);
   }
   public function subtraction(Fraction $fraction){
       $newNumerator = ($this->numerator * $fraction->denominator)-($fraction->numerator * $this->denominator);
       $newDenominator = $this->denominator * $fraction->denominator;
       $gcd = $this->reduce($newNumerator, $newDenominator);
       $newNumerator = $newNumerator/$gcd;
       $newDenominator = $newDenominator/$gcd;
       return $this->showFraction($newNumerator,$newDenominator);
   }
   public function multiplication(Fraction $fraction){
       $newNumerator = $this->numerator * $fraction->numerator;
       $newDenominator = $this->denominator * $fraction->denominator;
       $gcd = $this->reduce($newNumerator, $newDenominator);
       $newNumerator = $newNumerator/$gcd;
       $newDenominator = $newDenominator/$gcd;
       return $this->showFraction($newNumerator,$newDenominator);
   }
   public function division(Fraction $fraction){
       $newNumerator = $this->numerator * $fraction->denominator;
       $newDenominator = $this->denominator * $fraction->numerator;
       $gcd = $this->reduce($newNumerator, $newDenominator);
       $newNumerator = $newNumerator/$gcd;
       $newDenominator = $newDenominator/$gcd;
       return $this->showFraction($newNumerator,$newDenominator);
   }
}
$fraction1 = new Fraction(1,6);
$fraction2 = new Fraction(2,9);
$frac1 = $fraction1->showFraction($fraction1->numerator(),$fraction1->denominator());
if($frac1 === 1 || $frac1 === 0){
   echo "First fraction: " . $frac1;
}
else echo "First fraction: " . $frac1[0] . "/" . $frac1[1];
echo "<br>";
$frac2 = $fraction2->showFraction($fraction2->numerator(),$fraction2->denominator());
if($frac2 === 1 || $frac2 === 0){
   echo "Second fraction: " . $frac2;
}
else echo "Second fraction: " . $frac2[0] . "/" . $frac2[1];
echo "<br>";
$result = $fraction1->addition($fraction2);
if($result === 1 || $result === 0){
   echo "Sum of two fractions: " . $result;
}
else echo "Sum of two fractions: " . $result[0] . "/" . $result[1];
echo "<br>";
$result = $fraction1->subtraction($fraction2);
if($result === 1 || $result === 0){
   echo "Subtraction: " . $result;
}
else echo "Subtraction: " . $result[0] . "/" . $result[1];
echo "<br>";
$result = $fraction1->multiplication($fraction2);
if($result === 1 || $result === 0){
   echo "Multiplication: " . $result;
}
else echo "Multiplication: " . $result[0] . "/" . $result[1];
echo "<br>";
$result = $fraction1->division($fraction2);
if($result === 1 || $result === 0){
   echo "Division: " . $result;
}
else echo "Division: " . $result[0] . "/" . $result[1] . "<br>";
echo "-------------------------------.<br>";


echo "Bai 8 <br>";
class Person{
   private $name, $age, $address;
   
   public function __construct($name, $age, $address){
       $this->name = $name;
       $this->age = $age;
       $this->address = $address;
   }
   public function name(){
       return $this->name;
   }
   public function age(){
       return $this->age;
   }
   public function address(){
       return $this->address;
   }
}
$person = new Person("Thanh", 21, "Phú Thọ");
echo "Name: " . $person->name() . "<br>";
echo "Age: " . $person->age() . "<br>";
echo "Address: " . $person->address() . "<br>";
echo "-------------------------------.<br>";


echo "Bai 9 <br>";
class Product{
   private $name, $price, $des;
   public function __construct($name, $price, $des){
       $this->name = $name;
       $this->price = $price;
       $this->des = $des;
   }
   public function name(){
       return $this->name;
   }
   public function price(){
       return $this->price;
   }
   public function des(){
       return $this->des;
   }
}
$prod = new Product("T-shirt",55000,"Chanel");
echo "Product Name: " . $prod->name() . "<br>";
echo "Price: " . $prod->price() . "<br>";
echo "Description: " . $prod->des() . "<br>";
echo "-------------------------------.<br>";


echo "Bai 10 <br>";
class BookRoom{
   private $name, $arriveDay, $numNight, $price;
   public function __construct($name, $arriveDay, $numNight){
       $this->name = $name;
       $this->arriveDay = $arriveDay;
       $this->numNight = $numNight;
       $this->price = [
           101 => 200000,
           102 => 300000,
           103 => 400000
       ];
   }
   public function insertRoom($room, $price){
       $this->price[$room] = $price;
   }
   public function total(){
       return $this->price[$this->name] * $this->numNight;
   }
}
$book = new BookRoom(302,"14/07/2023", 7);
echo "Total: " . $book->total();
?>