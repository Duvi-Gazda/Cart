<?php
    $products = $_SESSION['cart']['products'];
    if(isset($products) && is_array($products)&& count($products) && $products !=null){
        if((isset($_GET['firstName'])&&(isset($_GET['lastName'])))){
            $date = getdate();
            $users = getFromJSON(USERS);
            $id = 0;
            if($users != null){
                foreach($users as $user){
                    var_dump($user);
                    echo "<br><br><br>";
                }
                $arr = [
                    'firstName' => $_GET['firstName'],
                    'lastName' => $_GET['lastName'],
                    'date' => $date,
                    'products' => $products
                ];
                array_push($users,$arr);
                setToJSON(USERS,$users);   
            }else{
                $users = array(
                    $arr = [
                        'firstName' => $_GET['firstName'],
                        'lastName' => $_GET['lastName'],
                        'date' => $date,
                        'products' => $products
                    ]
                );
                setToJSON($users,USERS);   
            }
        }
        require USERDATA;
    }