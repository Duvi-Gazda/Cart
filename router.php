<?php
    // if there are some post data
    if (isset($_POST['name'])){
        // start session to work vith it
        session_start();
        // write name of header and its value
        $name = $_POST['name'];
        switch ($name){
            case 'cart-product-add':{
                // if $name == 'cart-product-add' we have to add or create in arrayproduct quantity
                $id = $_POST['data'];
                $_SESSION['cart']['products'][$id] += 1;
                $product = getOnlySortedData(getALLProducts(),['id'=>$id]);
                $textMessage = $product[0]['name'].' is added to ' .makeHtmlLink('cart','cart.php').'!';
                require MESSAGE;
            break;
            }
            case 'cart-product-change':{
                // if $name == 'cart-product-add' we have to add or create in arrayproduct quantity
                $id = $_POST['id'];
                $quantity = $_POST['quantity'];
                $_SESSION['cart']['products'][$id] = $quantity;
                //echo $_SESSION['cart']['products'][$id];
                //echo $id;
                if($quantity <= 0){
                   unset($_SESSION['cart']['products'][$id]);
                }
                $textMessage = 'Your product quantity is changed!';
                require MESSAGE;
            break;
            }
            case 'clear-cart':{
                    foreach($_SESSION['cart']['products'] as $name=>$data){
                        unset($_SESSION['cart']['products'][$name]);
                    }
            break;
            }
        }
    }
    else{
    }
