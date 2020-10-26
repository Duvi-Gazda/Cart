<?php 
    // if there is some products 
    $products = $_SESSION['cart']['products'];
    //var_dump($products);
    //exit;
    if(isset($products) && is_array($products)&& count($products)){
        // show them
        foreach($products as $id => $val){
            // get all products
            $all_product = getALLProducts();
            $sort = [
                'id' => $id
            ];
            // get product quantity
            $quantity = $_SESSION['cart']['products'][$id];
            // find product by id
            $product = getOnlySortedData( $all_product,$sort);
            require TEMPLATES . 'productInCart.php';
        }
    }else{
        $textError = 'Your cart is free!';
        require_once ERROR;
    }