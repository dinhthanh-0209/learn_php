
<?php
    require_once 'pdo.php';
    $category = new CategoryQuery();
     $data = ['name' => $_POST['name']];
    $category->createNewData($data);
    header("Location: index.php");
?>
