
<?php
abstract class Connection{
    protected $conn,
    $DB_TYPE ,
    $DB_HOST,
    $DB_NAME ,
    $DB_USER ,
    $DB_PASS ;
    public function __construct(){
        $this->DB_TYPE = 'mysql';
        $this->DB_HOST = 'localhost';
        $this->DB_NAME = 'products';
        $this->DB_USER = 'root';
        $this->DB_PASS = '';
        $this->conn = $this->connect();
    }
    public function connect(){
        try{
            $conn = new PDO("mysql:host=$this->DB_HOST;dbname=$this->DB_NAME",$this->DB_USER, $this->DB_PASS);
            $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            return $conn;
        }
        catch (Exception $e) {
            die($e->getMessage());     
        }
    }
    public function prepareSQL($sql){
        return $this->conn->prepare($sql);
    }
}
class ProductQuery extends Connection{
    public function getData(){
        $sql = "SELECT * FROM products";
        $select = $this->prepareSQL($sql);
        $select->execute();
        return $select->fetchAll();
    }
    public function getOneData($data){
        $sql = "SELECT * FROM products WHERE id = :id";
        $select = $this->prepareSQL($sql);
        $select->execute($data);
        return $select->fetchAll();
    }
    public function createNewData($data){
        $sql = "INSERT INTO products (name) VALUES (:name)";
        $create = $this->prepareSQL($sql);
        $create->execute($data);
    }
    public function updateData($data){
        $sql = "UPDATE products SET name = :name WHERE id = :id";
        $update = $this->prepareSQL($sql);
        $update->execute($data);
    }
    public function deleteData($data){
        $sql = "DELETE FROM products WHERE id = :id";
        $update = $this->prepareSQL($sql);
        $update->execute($data);
    }
}
?>