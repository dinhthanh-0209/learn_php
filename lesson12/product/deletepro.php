<?php

require_once 'pdopro.php';
$pro1 = new ProductQuery();
    $id = ['id' => $_POST['id']];
    $pro1->deleteData($id);
    header("Location: indexpro.php");
?>