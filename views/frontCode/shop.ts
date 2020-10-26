$('.product').on('click', function(){
    let vars = 'name=cart-product-add&data='+this.id;
    sentDataToServer(vars);
})