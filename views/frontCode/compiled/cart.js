$('.quantityProduct').on('input', function () {
    var vars = 'name=cart-product-change&id=' + this.id + '&quantity=' + $(this).val();
    //alert(vars);
    sentDataToServer(vars);
});
