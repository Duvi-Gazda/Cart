<?php 

ini_set('display_errors','On');
ini_set('display_startup_errors','On');
error_reporting(E_ALL);
session_start();
//require_once __DIR__ .'/products.php';

if(!isset($_SESSION['cart'])){
    $_SESSION['cart']=[
        'products' => [],
        ];
    }
require_once FUNCTIONS;
spl_autoload_register(function($className){
    $filePath = 'classes/'.$className.'.php';
    if(file_exists($filePath)){
        include_once $filePath;
    }
});