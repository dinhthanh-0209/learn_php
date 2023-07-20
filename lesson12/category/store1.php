<?php
    require_once 'pdo.php';
    $category1 = new CategoryQuery();
    $id = ['id' => $_GET['id']];
    $name = $_POST['name'];
    $data = [
        'id' => $id['id'],
        'name' => $name
    ];
    $category1->updateData($data);
    header("Location: index.php");