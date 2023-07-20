
<?php
    require_once 'pdopro.php';
    $pro = new ProductQuery();
     $data = ['name' => $_POST['name']];
    $pro->createNewData($data);
    header("Location: indexpro.php");
?>
