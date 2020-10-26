<?php
    // check if there is some action
    if(isset($_GET['action'])){
        // if it is find its type
        $action = $_GET['action'];
        switch($action){
            // if we need to add product 
            case 'add-product':{
                //check if there is set product id
                if(isset($_GET['prid'])){
                    // add product id
                    $product_id = $_GET['prid'];
                    $_SESSION['cart']['products'][$product_id] +=  1;
                }
                header("Location: /cart.php");
            }
        }
    }