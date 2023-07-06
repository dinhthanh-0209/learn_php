<?php

require_once '../product/pdo.php';
require_once '../product/helper.php';


        $request = $_POST;
        $product = [
            'name' => $request['name'],
            'id' => $request['id']
        ];

        update($product);

redirectProductHome();