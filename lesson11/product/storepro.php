<?php

require_once '../pdopro.php';
require_once '../helperpro.php';

create(['name' => $_POST['name']]);
create($category);
redirectCategoryHome();