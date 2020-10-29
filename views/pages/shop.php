<?php 
    $products = new Products(PRODUCTS);
    // if there is some products 
   // var_dump($produsts);
   if(isset($products) && is_array($products->getProducts())&& count($products->getProducts())){
        $productCopy = $products->getProducts();
        // show them
        //var_dump($productCopy);
        foreach($productCopy as $product){
            require TEMPLATES . 'productInArchive.php';
        }
    }else{
        $textError = 'There is no products! Sorry =(';
        require ERROR;
    }