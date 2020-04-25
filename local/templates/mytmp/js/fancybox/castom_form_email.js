$(document).ready(function() {

    $(document).on('submit', 'form[name="callbackform"]', function (e) {
        e.preventDefault();             //отменяет стандартное действие.

        // var name=$(this).find('.name').val();
        // var phone=$(this).find('.phone.req').val();




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
                        // err
                    }
                }
            });

        } else {

        // err
    })
});

