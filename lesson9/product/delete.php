<?php

require_once '../product/pdo.php';
require_once '../product/helper.php';

delete(['id' => $_POST['id']]);

redirectProductHome();