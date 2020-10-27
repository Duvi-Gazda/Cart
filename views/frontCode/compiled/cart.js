$('.quantityProduct').change(function () {
    var val = $(this).val();
    if (val <= 0) {
        $(this).val(1);
    }
    else {
        var vars = 'name=cart-product-change&id=' + $(this).parent().attr('id') + '&quantity=' + val;
        sentDataToServer(vars);
        location.reload();
    }
});
$('.closebtn').on('click', function () {
    var vars = 'name=cart-product-change&id=' + $(this).parent().parent().attr('id') + '&quantity=' + 0;
    sentDataToServer(vars);
    $(this).parent().parent().remove();
    location.reload();
});
