<?php 
    // if there is some products 
    $products = $_SESSION['cart']['products'];
    $total = 0;
    if(isset($products) && is_array($products)&& count($products)){
        // show them
        foreach($products as $id => $val){
            // get all products
            $all_product = new Products(PRODUCTS);
            $all_product = $all_product->getProducts();
            $sort = [
                'id' => $id
            ];
            // get product quantity
            $quantity = $_SESSION['cart']['products'][$id];
            // find product by id
            $product = getOnlySortedData( $all_product,$sort);
            $total += $product[0]['price'] * $quantity;
            require TEMPLATES . 'productInCart.php';
        }
        require TOTAL_CART;
    }else{
        $textError = 'Your cart is free!';
        require_once ERROR;
    }