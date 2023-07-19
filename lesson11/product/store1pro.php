<?php
    require_once 'pdopro.php';
    $pro1 = new ProductQuery();
    $id = ['id' => $_GET['id']];
    $name = $_POST['name'];
    $data = [
        'id' => $id['id'],
        'name' => $name
    ];
    $pro1->updateData($data);
    header("Location: indexpro.php");