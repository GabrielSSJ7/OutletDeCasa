/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(document).ready(function () {

    $("#btn-enviar-ideia").on('click', function () {
        $('html, body').animate({scrollTop: $("#fancora").offset().top}, 500);
    });

    $("#nave-contato").on('click', function () {
        $('html, body').animate({scrollTop: $("#fancora").offset().top}, 500);
    });

    $("#toggle").click(function () {
        $(".nave").css({"background-color": "#01a8e9"});
        $('.meumenu').css({"position": "fixed", "background-color": "#01a8e9"});
    });

    if ($(window).scrollTop() > 100) {
        $('.nave').css({"position": "fixed", "background-color": "#01a8e9"});
        $('.meumenu').css({"position": "fixed", "background-color": "#01a8e9"});
    } else {
        $('.nave').css({"position": "absolute", "background-color": "transparent", "box-shadow": " 0px 0px 10px #000;"});

    }

    $(window).scroll(function () {

        var scrolltop = $(window).scrollTop();

        if (scrolltop > 100) {
            $('.nave').css({"position": "fixed", "background-color": "#01a8e9"});
            $('.meumenu').css({"position": "fixed", "background-color": "#01a8e9"});
        } else {
            $('.nave').css({"position": "absolute", "background-color": "transparent", "z-index": "99999", "box-shadow": " 0px 0px 10px #000;"});
            $('.meumenu').css({"position": "absolute", "background-color": "transparent", "box-shadow": " 0px 0px 10px #000;"});
        }


    });

    $("#btn-send-mail").click(function () {
        var user = $("#usr").val();
        var email = $("#e-mail").val();
        var comment = $("#comment").val();
        var tel = $("#tel").val();


        if (user != "" && email != "" && comment != "" & tel != "") {
            $.ajax({
                type: 'POST',
                dataType: 'html',
                url: 'form-email.php',
                data: {funct: 'checkMySubcats', usr: user, email: email, comment: comment, tel: tel},
                beforeSend: function () {
                    $(".alert").removeClass("alert-danger");
                    $(".alert").addClass("alert-success");
                    $(".alert").show();
                    $(".alert").html("<p>Enviando...</p>");
                    //  $("#text-modal").html("<p>Enviando...</p>");
                    // $("#warning-modal").modal('show');
                },
                success: function (msg) {

                    

                    $(".alert").html(msg);
                    //$("#text-modal").html(msg);
                    //$("#warning-modal").modal('show');
                    $("#usr").val('');
                    $("#e-mail").val('');
                    $("#comment").val('');
                },
                error: function () {
                    location.reload();
                }
            });
        } else {
            $(".alert").show();
            $(".alert").removeClass("alert-success");
            $(".alert").addClass("alert-danger");
            $(".alert").html("Você deixou de digitar algum dos campos.");
        }
        return false;

    });


    var $plan = $(".plan-animate-off");
    var $quemSomos = $(".quem-somos-animate-off");

    $plan.waypoint(function () {
        $plan.addClass('plan-animate-on');
        $quemSomos.addClass('quem-somos-animate-on');
    }, {offset: '50%'});

    $quemSomos.waypoint(function () {
        $quemSomos.addClass('quem-somos-animate-on');
    }, {offset: '50%'});




});
