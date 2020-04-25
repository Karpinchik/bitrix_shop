$(document).ready(function() {

    $(document).on('submit', 'form[name="subscr"]', function (e) {
        // при нажатии кнопки отменяем все события и кастомизируем отправку письма с валидацией email
        e.preventDefault();
        $('.err_text_checkbox').remove();               // чистим записи об ошибках если они есть
        $('.check').removeClass('err');

        if($('#ch_box').prop('checked') == true){           // проверка на нажатый чекбокс

            var name = $(this).find('.input.sub').val();
            var email = $(this).find('.input.email.req').val();
            var reg = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;
            var res_email = reg.test(email);        // валидация адреса

                if(res_email) {               // если валидация проходит то переходим на ajax
                    $.ajax({
                        type: "POST",
                        url: "/ajax/subscription.php",
                        data: {name: name, email: email},
                        success: function(response){
                            var res = JSON.parse(response);
                            if(res['status'] == "ok") {
                                $('.popup-message__title').text('Спасибо, Вы подписаны на рассалку.')
                                $('.popup.m_1').addClass('active').fadeIn(300);
                            } else {
                                $('.form-body-button').append('<p>Вы уже подписаны на рассылку</p>');
                            }
                        }
                    })
                } else {
                    // ошибка если не прошла валидация email
                    $('.input.email.req').addClass('err');
                    // $(this).parent().find('.form__error animated').remove();
                }
        } else {
            //  показываем ошибку что пользователь не согласился с условиями
            // $('.check').append('<p class="err_text_checkbox">Вы не согласились с условиями</p>').css('font-size', 16);       // можно добавить параграф с описанием ошибки
            $('.check').addClass('err');
        }
    })
});

