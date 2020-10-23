<?php if (is_array($products)&& count($products) > 0):?>
    <ul>
        <?php foreach ($products as $id => $product):?>
            <?=sprintf("%s (%01.2f usd)", $product['name'], $product['price']) ?>
            <br>
            
        <?php endforeach?>
    </ul>
<?php else: ?>
    <p>NO products in your cart</p>
<?php endif ?>