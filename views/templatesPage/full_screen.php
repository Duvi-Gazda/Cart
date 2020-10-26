<?php
    // Script input data in between header and footer (run script). Script need name of other script to run it (value $filler)
    $products = getALLProducts();
    require_once PAGES . $filler;

?>
