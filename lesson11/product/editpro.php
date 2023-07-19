<?php
   require_once 'pdopro.php';
    $pro1 = new ProductQuery();
?>



<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<body>
<div class="container pt-4">
<?php 
            $data = [
                'id' => $_GET['id']
            ];
            $product = $pro1->getOneData($data)['0'];
        ?>
    <h1>Edit product</h1>
    <a href="indexpro.php" class="btn btn-primary">Back</a>
    <form method="POST" action="store1.php?id=<?=$data['id'] ?>">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" placeholder="Update name ..." value="<?= $category['name'] ?>">
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>