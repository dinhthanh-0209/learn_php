<?php
echo "Abstract: <br>";
//Tạo một class trừu tượng "Shape" (Hình dạng) có một phương thức trừu tượng là "calculateArea". 
//Tạo các lớp con "Circle" (Hình tròn) và "Rectangle" (Hình chữ nhật) kế thừa từ lớp Shape và triển khai phương thức calculateArea cho từng hình.
abstract class Shape {
    abstract public function calculateArea();
}
class Circle extends Shape{
    protected $radius;
    public function __construct($radius){
        $this->radius = $radius;
    }
    public function calculateArea(){
        return 3.14 *pow($this->radius, 2);
    }

}
class Rectangle extends Shape{
    protected $length;
    protected $width;

    public function __construct($length,$width){
        $this->length = $length;
        $this->width = $width;
    }
    public function calculateArea(){
        return $this->length * $this->width;
    }

}
$circle = new Circle(3);
echo "Area of circle: " . $circle->calculateArea() . "<br>";
$rectangle = new Rectangle(2,3);
echo "Area of rectangle: ". $rectangle->calculateArea() . "<br>";
echo "-----------------------.<br>";
//Tạo một abstract class "Animal" (Động vật) với một phương thức trừu tượng là "makeSound". 
//Tạo các lớp con "Dog" (Chó) và "Cat" (Mèo) kế thừa từ lớp Animal và triển khai phương thức makeSound theo cách riêng của từng loại động vật.
abstract class Animal{
    abstract public function makeSound();
}
class Dog extends Animal{
    public function makeSound(){
        echo "Woof!";
    }
}
class Cat extends Animal{
    public function makeSound(){
        echo "Moew!";
    }
}
$dog = new Dog();
echo "Sound of dog " . $dog->makeSound() . "<br>";
$cat = new Cat();
echo "Sound of cat " . $cat->makeSound() . "<br>";
echo "-----------------------.<br>";
//Tạo một abstract class "Employee" (Nhân viên) với các thuộc tính trừu tượng như "name" (tên) và "salary" (mức lương), có một phương thức trừu tượng là "getInformation". 
//Tạo các lớp con "Manager" (Quản lý) và "Staff" (Nhân viên) kế thừa từ lớp Employee và triển khai các thuộc tính và phương thức theo cách riêng của từng lớp.
abstract class Employee{
    protected $name;
    protected $salary;
    abstract public function getInformation();
}
class Manager extends Employee{
    public function __construct($name, $salary){
        $this->name = $name;
        $this->salary = $salary;
    }
    public function getInformation(){
        echo $this->name;
        echo $this->salary;
    }
}
class Staff extends Employee{
    public function __construct($name, $salary){
        $this->name = $name;
        $this->salary = $salary;
    }
    public function getInformation(){
        echo $this->name;
        echo $this->salary;
    }
}
$manager = new Manager("thanh ","5tr");
echo $manager->getInformation() . "<br>";
$staff = new Staff("thanh ","5tr");
echo $staff->getInformation() . "<br>";
echo "-----------------------.<br>";
//Tạo một abstract class "Vehicle" (Phương tiện) với một phương thức trừu tượng là "start". 
//Tạo các lớp con "Car" (Xe hơi) và "Motorcycle" (Xe máy) kế thừa từ lớp Vehicle và triển khai phương thức start theo cách riêng của từng loại phương tiện.
abstract class Vehicle{
    abstract public function start();
}
class Car extends Vehicle{
    public function start(){
        echo "Starting with car";
    }
}
class Motorcycle extends Vehicle{
    public function start(){
        echo "Starting with motorcycle";
    }
}
$car = new Car();
echo $car->start() . "<br>";
$motor = new Motorcycle();
echo $motor->start() . "<br>";
echo "-----------------------.<br>";


// Tạo một abstract class "Database" (Cơ sở dữ liệu) với các phương thức trừu tượng như "connect", "query" và "disconnect". 
// Tạo các lớp con "MySQLDatabase" và "PostgreSQLDatabase" kế thừa từ lớp Database và triển khai các phương thức theo cách riêng của từng loại cơ sở dữ liệu.
abstract class Database {
    abstract public function connect();
    abstract public function query($query, $params = []);
    abstract public function disconnect();
}
class MySQLDatabase extends Database {
	
        public	$isConn;
        protected	$datab;
        
        //CONNECT TO DB
        public	function connect($host = "localhost", $user = "root", $pass = "", $dbname = "deha", $options = [])
        {
            $this->isConn = TRUE;
            try {
                $this->datab = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass, $options);
                $this->datab->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $this->datab->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
            } catch (PDOException $e){
                throw new Exception($e->getMessage());
            }
        }
        
        public	function	disconnect()
        {
            $this->isConn = FALSE;
            $this->datab = NULL;
        }
        
        public	function	query($query, $params = [])
        {
            try {
                $stmt = $this->datab->prepare($query);
                $stmt->execute($params);
                return TRUE;
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
    }

$query = "INSERT INTO products (name, price, category_id) VALUES (:name, :price, :ca_id)";
$params = ['name'=>'Ao', 'price'=>'80.000', 'ca_id'=>1];
$var = new MySQLDatabase();
$var->connect($host = "localhost", $user = "root", $pass = "", $dbname = "deha", $options = []);
$var->query($query, $params) . "<br>";
$var->disconnect();
echo "-----------------------.<br>";





echo "Interface: <br>";
//Tạo một interface "Resizable" (Có thể điều chỉnh kích thước) với một phương thức là "resize". 
//Tạo một lớp "Rectangle" (Hình chữ nhật) và triển khai interface Resizable để thay đổi kích thước của hình chữ nhật.
interface Resizable {
    public function resize();
}
class Rectangle2 implements Resizable {
        protected $length;
        protected $width;
        public function __construct($length, $width) {
            $this->length = $length;
            $this->width = $width;
        }
        public function resize() {
            echo "resize length is: " . $this->length . "<br>";
            echo "resize width is: " . $this->width . "<br>";
        }
    }
$resize = new Rectangle2(1, 2);
echo $resize->resize();
echo "-----------------------.<br>";

//Tạo một interface "Logger" với các phương thức "logInfo", "logWarning" và "logError". 
//Tạo một lớp "FileLogger" (Ghi log vào file) và một lớp "DatabaseLogger" (Ghi log vào cơ sở dữ liệu) và triển khai interface Logger cho cả hai lớp.
interface Logger {
    public function logInfo();
    public function logWarning();
    public function logError();
}
class FileLogger implements Logger {
    protected $log;
    public function __construct($log) {
        $this->log = $log;
        $this->logInfo();
        $this->logWarning();
        $this->logError();
    }
    public function logInfo() {

    }
    public function logWarning() {
        
    }
    public function logError() {
        
    }
    
    
    public function getLog() {
        return $this->log;
    }
}
class DatabaseLogger implements Logger {
    protected $log;
    public function __construct($log) {
        $this->log = $log;
        $this->logInfo();
        $this->logWarning();
        $this->logError();
    }
    public function logInfo() {

    }
    public function logWarning() {
        
    }
    public function logError() {
        
    }
    
    
    public function getLog() {
        return $this->log;
    }
}
$bug = new FileLogger("bug...1");
$bug = new DatabaseLogger("bug...2");
echo $bug->getLog() . "<br>";
echo $bug->getLog() . "<br>";

//Tạo một interface "Drawable" (Có thể vẽ) với phương thức "draw". 
//Tạo một lớp "Circle" (Hình tròn) và một lớp "Square" (Hình vuông) kế thừa từ interface Drawable và triển khai phương thức draw cho mỗi hình.
interface Drawable {
    public function draw();
}
class Circle1 implements Drawable {
    public function draw() {
        return "Drawing a circle:...";
    }
}
class Square1 implements Drawable {
    public function draw() {
        return "Drawing a square:...";
    }
}
$circle = new Circle1();
$square = new Square1();
$draws = [$circle, $square];
foreach($draws as $draw)
echo $draw->draw(). "<br>";

//Tạo một interface "Sortable" với phương thức "sort". 
//Tạo một lớp "ArraySorter" (Sắp xếp mảng) và một lớp "LinkedListSorter" (Sắp xếp danh sách liên kết) và triển khai interface Sortable cho cả hai lớp.
interface Sortable {
    public function getSort();
}
class ArraySorter implements Sortable {
    protected $arr;
    public function __construct($arr) {
        $this->arr = $arr;
    }
    public function getSort() {
        sort($this->arr);
        return $this->arr;
    }
}
class LinkedListSorter implements Sortable {
    protected $arr;
    public function __construct($arr) {
        $this->arr = $arr;
    }
    public function getSort() {
        sort($this->arr);
        return $this->arr;
    }
}
$array1 = [5,6,4,1];
$array2 = ["Volvo", "BMW", "Toyota"];
$arrsorter = new ArraySorter($array1);
$listsorter = new LinkedListSorter($array2);
$result1 = $arrsorter->getSort();
$result2 = $listsorter->getSort();
echo implode(", ", $result1) . "<br>";
echo implode(", ", $result2) . "<br>";

//Tạo một interface "Encryptable" (Có thể mã hóa) với phương thức "encrypt" và "decrypt". 
//Tạo một lớp "AES" và một lớp "DES" kế thừa từ interface Encryptable và triển khai các phương thức theo thuật toán mã hóa tương ứng.
interface Encryptable{
    public function encrypt($message);
    public function decrypt($message);
}
class AES implements Encryptable {
    public function encrypt($message) {
        $encryptedMessage = "AES encrypted: " . $message;
        return $encryptedMessage;
    }
    public function decrypt($message) {
        $decryptedMessage = "AES encrypted: " . $message;
        return $decryptedMessage;
    }
}
class DES implements Encryptable {
    public function encrypt($message) {
        $encryptedMessage = "DES encrypted: " . $message;
        return $encryptedMessage;
    }
    public function decrypt($message) {
        $decryptedMessage = "DES encrypted: ". $message;
        return $decryptedMessage;
    }
}
$message = "Pass";
$aesEncryptor = new AES();
echo "AES:<br>";
echo "Encrypted: " . $aesEncryptor->encrypt($message) . "<br>";
echo "Decrypted: " . $aesEncryptor->decrypt($message) . "<br>";
$desEncryptor = new DES();
echo "DES:<br>";
echo "Encrypted: " . $desEncryptor->encrypt($message) . "<br>";
echo "Decrypted: " . $desEncryptor->decrypt($message) . "<br>";



?>