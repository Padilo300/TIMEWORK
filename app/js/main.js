$( document ).ready(function() {

    // откроет меню
    function openNav(){
        $('.mobilBar').toggleClass("openNav");
        $('#nav').toggleClass('showNav');
    }

    $('.mobilBar').on('click',function(){
        openNav();
    });

    // Плавные переходы к якорям
    $("a.scrollto").click(function() {
        var elementClick = $(this).attr("href")
        var destination = $(elementClick).offset().top;
        jQuery("html:not(:animated),body:not(:animated)").animate({
          scrollTop: destination
        }, 800);
        return false;
      });


    // Кнопка вверх CSS нахолдится в файле NativeStyle.css (19.08.2018) 
    $('body').append('<a href="#" id="go-top" title="Вверх">&#9650;</a>');
    $(function() {
    $.fn.scrollToTop = function() {
        $(this).hide().removeAttr("href");
        if ($(window).scrollTop() >= "250") $(this).fadeIn("slow")
        var scrollDiv = $(this);
        $(window).scroll(function() {
        if ($(window).scrollTop() <= "250") $(scrollDiv).fadeOut("slow")
        else $(scrollDiv).fadeIn("slow")
        });
        $(this).click(function() {
        $("html, body").animate({scrollTop: 0}, "slow")
        })
    }
    });
    
    $(function() {
    $("#go-top").scrollToTop();
    });

    // отправка заявки на почту и передача вакансии
    var jobVacancy = "Вакансия не выбрана. (Отправленно из формы захвата.)"

    
    $('.vacancies_cart_cart .mainButton').on('click', function(){
        jobVacancy = $(this).siblings("h3").text();
        $('#hideenValuer').val(jobVacancy);
    });
   

    $("#ModalSendMail").submit(function() {
        var form_data = $(this).serialize();
        $.ajax({
            type: "POST",
            url: "/php/sendMail.php",
            data: form_data,
            success: function () {
                $('#modalForm').modal('hide');
                $('#modalFuncYou').modal('show');
                $('#ModalSendMail').trigger('reset');
            },
            error: function (data) {
                console.log(data);
            }
        });
       
        return false;
    });

    $("#send_mail_top").submit(function() {
        var form_data = $(this).serialize();
        $.ajax({
            type: "POST",
            url: "/php/sendMail.php",
            data: form_data,
            success: function () {
                
                $('#modalForm').modal('hide');
                $('#modalFuncYou').modal('show');
                $('#send_mail_top').trigger('reset');
            },
            error: function (data) {
                console.log(data);
            }
        });
       
        return false;
    });

});
