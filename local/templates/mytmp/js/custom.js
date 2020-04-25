$(document).ready(function() {
    
        var phone = $("input.phone.req").mask("+9(999)999-99-99");
        $(document).on('submit', 'form[name="callbackform"]', function (e) {
        e.preventDefault();             //отменяет стандартное действие.
            console.log(123);

        var name=$(this).find('.name').val();
        var phone=$(this).find('.phone.req').val();
        const re = /^(\+)?(\(\d{2,3}\) ?\d|\d)(([ \-]?\d)|( ?\(\d{2,3}\) ?)){5,12}\d$/;                 // егулярка на формат +7(925)118-95-81 и похожие
        var var_res_reg = re.test(phone);                       //роверяем на регулярку

        if(var_res_reg) {         // если проверка на рег-ку вернет true  - запускаем ajax
            $.ajax({
                type: "POST",
                url: "/ajax/add_clients.php",
                data: {name: name, phone: phone},
                success: function(response){
                    //при успешной отправки и записи вывожу итоговый попап
                    var res = JSON.parse(response);
                    if(res['status'] == "ok") {
                        $('.popup.m_1').addClass('active').fadeIn(300);
                    } else {
                        console.log(res['error']);
                        $('.err_text_phone').remove();       // даляем предыдущее сообщение об ошибке
                        $('.input.phone.req').addClass('err');   //  подкрашимаем крамным поле ввода с неверно введенными данными
                        $('.input.phone.req.err').parent().append('<p class="err_text_phone">Введите правильный формат. Например "+7(925)118-95-81"</p>').css('font-size', 16);
                    }
                }
            });

        } else {
            $('.err_text_phone').remove();       // даляем предыдущее сообщение об ошибке
            $('.input.phone.req').addClass('err');   //  подкрашимаем крамным поле ввода с неверно введенными данными
            $('.input.phone.req.err').parent().append('<p class="err_text_phone">Введите правильный формат. Например "+7(925)118-95-81"</p>').css('font-size', 16);     //  добавляю текст с объяснением ошибки и примером
        }
    })




//  показать больше товаров на транице каталога

    $(document).on('click','#but_more', function (e) {
        e.preventDefault();
        var countItem = parseInt($('.catalog-items').attr('data-count'))+3;
        $.ajax({
            url: '/catalog/',
            type: 'post',
            data: {'countItem': countItem},
            success: function (data) {

                // var dataData = $(data).find('div.catalog-items-block').html();
                // $('.catalog-items-block').html(dataData);
                // $('.catalog-items').attr('data-count', countItem);

                $('div.catalog-items-block').html(data);
                $('.catalog-items').attr('data-count', countItem);

            }
        });
    });







});

