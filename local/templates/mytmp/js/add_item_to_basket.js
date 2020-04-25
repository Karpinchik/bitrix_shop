$(document).ready(function(){

    $(document).on('click', '#id_item_basket', function(e) {
        e.preventDefault();

        var id_item = $('#id_item_basket').attr('data-id-product');

        $.ajax({
            type: "GET",
            url: "/ajax/add_to_basket.php",
            data: {ID_item: id_item},
            success: function(response){
                var arResult = JSON.parse(response);
                if(arResult['status'] == 'ok'){
                    console.log(arResult['status']);
                    $('.popup-incart').fadeIn(300).delay(300).addClass('active');
                } else {
                    console.log(arResult['error']);
                }
            }
        })

    });

});



// выводит попап добавления в карзину
//     if($(this).hasClass('incart')){
//         $('.popup-incart').fadeIn(300).delay(300).addClass('active');
//     }
