<?php

require_once 'pdo.php';
$category1 = new CategoryQuery();
    $id = ['id' => $_POST['id']];
    $category1->deleteData($id);
    header("Location: index.php");
?>