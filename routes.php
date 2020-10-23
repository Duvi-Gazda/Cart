<php
$defaultAction = 'index';
    $actionPage = $defaultAction;
    if (isset($_GET['action'])){
        $getAction = trim($_GET['action']);
        switch($getAction){
            case 'cart':
                $actionPage = "cart";
        }
    }