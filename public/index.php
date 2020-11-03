<?php

require '../vendor/autoload.php';
require '../config/database.php';

$products = App\Entities\Product::get();
include "../resources/views/lists.php";