<?php

require_once '../pdo.php';
require_once '../helper.php';

update(['name' => $_POST['name']]);

redirectCategoryHome();