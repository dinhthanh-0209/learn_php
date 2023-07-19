
<?php
    require_once 'pdopro.php';
    $pro1 = new ProductQuery();
    $data = ['name' => $_POST['name']];
    $pro1->createNewData($data);
    header("Location: index.php");
?>
