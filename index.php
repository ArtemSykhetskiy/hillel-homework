<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Http\Controllers\{
    Admin\DashboardController,
    Admin\OrdersController,
    Helpers\ImageHelper,
    MainController
};
use Models\{
    Order,
    Product,
    User
};


$test = new User();