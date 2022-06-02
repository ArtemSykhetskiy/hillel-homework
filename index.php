<?php

spl_autoload_register(function($class_name){
    $class_name = '/' . str_replace('\\', '/', $class_name);
    $file =  __DIR__ . $class_name . ".php";
    if(file_exists($file)){
        require_once $file;
    }
    else{
        echo 'Такого файла нет';
    }
});
use App\Http\Controllers\{
    Admin\DashboardController,
    Admin\OrdersController,
    Helpers\ImageHelper,
    MainController
};

use App\Models\{
    Order,
    Product,
    User
};


$test = new ImageHelper();