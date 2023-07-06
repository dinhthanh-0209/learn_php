<?php

require_once '../product/pdo.php';
require_once '../product/helper.php';

create(['name' => $_POST['name']]);
create($product);
redirectProductHome();