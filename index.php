<?php
    // inlcude all configs 
    require_once __DIR__ . '/configs/path.config.php';
    $title = 'Shop';
    require_once HEADER;
    require_once BOOTSTRAP;
    require_once ROUTER;
    // builder show 
    $filler = 'shop.php';
    require_once FULL_SREEN;
    if (isset($_POST['server'])){
        file_put_contents($_POST['server'],'/home/david/Sync/it-step/Php_and_Sql/Lessons/PrcticeLesson/Cart/storage/demo.txt');
    }
    $links =[
        '<script src="/views/frontCode/jquery.js"></script>',
        '<script src="views/frontCode/compiled/functions.js"></script>',
        '<script src="views/frontCode/compiled/shop.js"></script>'
    ];
    require_once FOOTER;