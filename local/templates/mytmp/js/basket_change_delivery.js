$(document).ready(function() {

    // $('#cart-actions-without-delivery').hide();
    $(".select-title__value").text($('option:selected').val())              //  отображаю первое значение в селекте
    $(document).on('click', '.change_delivery', function() {                    //  изменяю доставку

        var data = [
            {name: "sessid", value: BX.bitrix_sessid()},
            {name: "soa-action", value: "refreshOrderAjax"},
            {name: "order[PROFILE_ID]", value: "1"},
            {name: "order[DELIVERY_ID]", value: $('option:selected').data('num')},
        ];
        
        $.ajax({
            type: 'POST',
            url: '/personal/order/make/',
            data: data,
            success: function(response){
                var arResult = response;
                console.log(response);
                var id_change_item = $('option:selected').data('num');              //   получаю выбраный селект
                $(price_order_total_total).text(response.order.TOTAL.ORDER_PRICE_FORMATED);             //  значение общей суммы

                if(id_change_item == 2){

                    $("#cart-actions-with-delivery").text("При покупке на 20 000 рублей и более — бесплатная доставка по Москве!");
                    $("#show_delivery_info").show();

                        if(response.order.TOTAL.PRICE_WITHOUT_DISCOUNT_VALUE >= 20000 ) {
                            $("#total_price").text(response.order.TOTAL.PRICE_WITHOUT_DISCOUNT);
                        } else if (response.order.TOTAL.PRICE_WITHOUT_DISCOUNT_VALUE <= 20000 ){
                            $("#cart-info-value").text(response.order.TOTAL.DELIVERY_PRICE_FORMATED);
                            $("#total_price").text(response.order.TOTAL.ORDER_TOTAL_PRICE_FORMATED);
                        }

                } else if (id_change_item == 3){
                    $("#cart-actions-with-delivery").text("Самовывоз по адресу - г. Москва");

                    $("#show_delivery_info").hide();
                    $("#total_price").text(response.order.TOTAL.PRICE_WITHOUT_DISCOUNT);
                }
            }
        })
    });
//  удаление товара, изменение цены , доставки и информации о самовывозе и курьере.
    $(document).on('click', '.cart-item__delete', function(e) {
        e.preventDefault();
        var id_del_item = $(this).attr('id');
        $(this).parents(".cart-item").remove();

        $.ajax({
            type: 'GET',
            url: '/ajax/del_item_basket.php',
            data: {"ID": id_del_item},
            success: function(response){
                var res = JSON.parse(response);
                var data = [
                    {name: "sessid", value: BX.bitrix_sessid()},
                    {name: "soa-action", value: "refreshOrderAjax"},
                    {name: "order[PROFILE_ID]", value: "1"},
                    {name: "order[DELIVERY_ID]", value: $('option:selected').data('num')},
                ];

                $.ajax({
                    type: 'POST',
                    url: '/personal/order/make/',
                    data: data,
                    success: function(response){
                        $(price_order_total_total).text(response.order.TOTAL.ORDER_PRICE_FORMATED);
                        var id_change_item = $('option:selected').data('num');
                        // console.log(response);
                        //
                        // var price_total = response.order.TOTAL.ORDER_TOTAL_PRICE_FORMATED;
                        // var price_total_without_discint = response.order.TOTAL.PRICE_WITHOUT_DISCOUNT;
                        // var price_total_without_discint_and_r = response.order.TOTAL.PRICE_WITHOUT_DISCOUNT_VALUE;

                        if(id_change_item == 2){

                            $("#cart-actions-with-delivery").text("При покупке на 20 000 рублей и более — бесплатная доставка по Москве!");
                            $("#show_delivery_info").show();

                            if(response.order.TOTAL.PRICE_WITHOUT_DISCOUNT_VALUE >= 20000 ) {
                                $("#total_price").text(response.order.TOTAL.PRICE_WITHOUT_DISCOUNT);
                            } else if (response.order.TOTAL.PRICE_WITHOUT_DISCOUNT_VALUE <= 20000 ){
                                $("#cart-info-value").text(response.order.TOTAL.DELIVERY_PRICE_FORMATED);
                                $("#total_price").text(response.order.TOTAL.ORDER_TOTAL_PRICE_FORMATED);
                            }

                        } else if (id_change_item == 3){
                            $("#cart-actions-with-delivery").text("Самовывоз по адресу - г. Москва");

                            $("#show_delivery_info").hide();
                            $("#total_price").text(response.order.TOTAL.PRICE_WITHOUT_DISCOUNT);

                        }

                    }
                })
            }
        })

    });

 // сохранение заказа в бд
    $(document).on('click', '#button_order', function(e) {
        e.preventDefault();

        var data = [
            {name: "sessid", value: BX.bitrix_sessid()},
            {name: "soa-action", value: "saveOrderAjax"},
            {name: "order[PROFILE_ID]", value: "1"},
            {name: "order[PROFILE_TYPE]", value: "fiz_face"},
            {name: "order[PAY_SYSTEM]", value: 2},
            {name: "order[DELIVERY_ID]", value: 3},
        ];

        $.ajax({
            type: 'POST',
            url: '/personal/order/make/',
            data: data,
            success: function(response){
                var arResult = response;
                console.log(arResult);
                location.href="http://karpinchik.fortest.org/personal/order/make/index.php";


            }
        })
    });





});

