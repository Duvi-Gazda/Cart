$('.product').on('click', function () {
    var vars = 'name=cart-product-add&data=' + this.id;
    sentDataToServer(vars);
});
