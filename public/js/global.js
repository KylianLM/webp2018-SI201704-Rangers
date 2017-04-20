(function () {
    $(document).ready(function () {
        $('form[name="contact"]').submit(function (e) {
            e.preventDefault();
            var body = $('#message').val(),
                subject = $('#subject').val(),
                email = $('#email').val(),
                name = $('#name').val(),
                callback = ($('#rappel').is(':checked'))?1:0,
                token = $('input[name="_token"]').attr('value'),
                time = $('#datetimepicker').val(),
                phone = $('#tel').val();
            console.log(token,body,subject,email,name,phone);

            if(body != "" && subject != "" && email != "" && name!="" && phone != "" && token != "") {
                console.log('kjj');
                $.ajax({
                    method: "POST",
                    url: "/admin/message/",
                    data: {
                        email: email,
                        phone: phone,
                        name: name,
                        subject: subject,
                        body: body,
                        _token : token,
                        time: time,
                        callback: callback
                    }
                }).done(function (msg) {
                    alert("Data Saved: " + msg);
                });
            }
        });

        $.datetimepicker.setLocale('fr_FR');
        $('#datetimepicker').datetimepicker({
            datepicker:false,
            format: 'H:i',
            lang: 'fr'
        });
        //scroll
        $('.scroll-to').click(function (event) {
            event.preventDefault();
            scrollTo($(this));
        });
        $('.header-mob').click(function(event){
            event.preventDefault();
            toggleBurger();
        });
        $(window).resize(closeBurger);
        $('.list-header .item_link').click(closeBurger);
        $(window).scroll(function(){
            $('.sct').each(function(){
                deltaTop($(this).attr('id'));
            });
        });
    });
    var scrollTo = function (ele) {
        var elemTarget = $('#' + $(ele).attr('href'));

        if ($(elemTarget).length > 0) {
            activedots(ele);
            $('html, body').stop().animate({
                scrollTop: $(elemTarget).offset().top - 42
            }, 400);
        }
        return false;
    };
    var activedots = function (x) {

        if(x == 'sct-number') x = 'sct-carousel';
        var items = $('.list-header .item'),
            xRef = '#' + $(x).attr('href');
        items.removeClass('item-active');
        items.each(function () {
            var href = $(this).find('a').attr('href');
            if (href.indexOf(x) != -1) {
                $(this).addClass('item-active');
            }
        });
    }
    var closeBurger = function(){
        var $header = $('header');
        if($header.hasClass('header-open')){
            $header.removeClass('header-open');
            $('body').removeClass('head-op');
        }
    }
    var toggleBurger = function(elem){
        if(!$('header').hasClass('header-open')){
            $('header').addClass('header-open');
            $('body').addClass('head-op');
        }else{
            $('header').removeClass('header-open');
            $('body').removeClass('head-op');
        }
    }
    var deltaTop = function (elem) {
        var elemTarget = $('#'+elem);
        if (elemTarget.length) {
            var elemTargetH = elemTarget.height() - 47,
                deltaIn = elemTarget.offset().top - 47,
                deltaOut = deltaIn + elemTargetH;

            if ($(window).scrollTop() > deltaIn && $(window).scrollTop() < deltaOut) {
                activedots(elem);
                return true;
            }

        }
        return false;
    };
}());