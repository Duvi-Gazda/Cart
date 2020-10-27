<div class="cart_product" id="<?= $product[0]['id']?>">

<?php
    // Print cart and settings. Script needs array $product, that contains data about product. And $quantity that contains product quantity 
    echo $product[0]['name'].' '.  $product[0]['price'] . ' x ' ;
    ?>
<input type="number" name="number" class="quantityProduct" value="<?= $quantity?>" min="1">
<?php 
  echo ' = ' . $product[0]['price'] * $quantity . '$';
?>
<div class="delete">
  <span class="closebtn unselectable">×</span>
</div>
</div>
