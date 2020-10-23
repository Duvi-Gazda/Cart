<?php 
    // if there is some products 

    if(isset($products) && is_array($products)&& count($products)){
        // show them
        foreach($products as $product){
            require_once TEMPLATES . 'productInArchive.php';
        }
    }else{
        $textError = 'There is no products! Sorry =(';
    }