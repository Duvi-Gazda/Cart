<?php
    // Script input data in between header and footer (run script). Script need name of other script to run it (value $filler)
    $products = [
        1 => [
            'article' => 'dell-ins',
            'name' => "Dell Inspirion Z",
            'price' => 345.56,
            'img' => 'dell-inspirion.jpeg'
        ],
        2 => [
            'article' => 'dell-ins-2',
            'name' => "Dell Inspirion Z 2",
            'price' => 345.56,
            'img' => 'dell-inspirion-2.jpeg'
        ],
        3 => [
            'article' => 'dell-ins-2',
            'name' => "Dell Inspirion Z-2",
            'price' => 345.56,
            'img' => 'dell-inspirion.jpeg'
        ]
    ];
    require_once PAGES . $filler;

?>
