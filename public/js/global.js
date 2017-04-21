(function () {
    $(document).ready(function () {
        $('.date_row').hide();
        $('#rappel').change(function () {
            if ($(this).is(":checked")) {
                $('.date_row').show();
            } else {
                $('.date_row').hide();
            }
        });
        $('form[name="contact"]').submit(function (e) {
            e.preventDefault();
            $('.form_callback').remove();
            $('.form_input').removeClass('form_input_error');
            var body = $('#message').val(),
                subject = $('#subject').val(),
                email = $('#email').val(),
                name = $('#name').val(),
                callback = ($('#rappel').is(':checked')) ? 1 : 0,
                token = $('input[name="_token"]').attr('value'),
                time = (callback) ? $('#datetimepicker').val() : '',
                phone = $('#tel').val();

            $.ajax({
                method: "POST",
                url: "admin/message/",
                data: {
                    email: email,
                    phone: phone,
                    name: name,
                    subject: subject,
                    body: body,
                    _token: token,
                    time: time,
                    callback: callback
                }
            }).fail(function (msg) {
                console.log(msg);
                if (msg.status == '403') {
                    msg = 'Vous avez atteint le maximum de 3 messages à envoyer.';

                } else {
                    var fields = Object.keys(msg.responseText);
                    console.log(fields);
                    for (var i = 0; i < fields.length; i++) {
                        var field = fields[i];
                        if (field == 'body') {
                            field = 'message';
                        } else if (field == 'callback') {
                            field = 'rappel';
                        } else if (field == 'time') {
                            field = 'datetimepicker';
                        } else if (field == 'phone') {
                            field = 'tel';
                        }

                        $('#' + fields[i]).addClass('form_input_error');
                    }
                    msg = 'Merci de saisir tous les champs nécessaires.';
                }

                var callback = '<div class="form_callback">' +
                    '<p>' + msg + '</p>' +
                    '<a href="#" class="callback_cross">x</a>' +
                    '</div>';

                $('form[name="contact"]').prepend(callback);

            }).done(function (msg) {
                msg = JSON.parse(msg);
                console.log(msg);
                if (msg.status == '200') {
                    msg = 'Votre message à bien été envoyé.';
                }
                var callback = '<div class="form_callback">' +
                    '<p style="">' + msg + '</p>' +
                    '</div>';

                $('form[name="contact"]').prepend(callback);
            });
        });

        $.datetimepicker.setLocale('fr_FR');
        $('#datetimepicker').datetimepicker({
            datepicker: false,
            format: 'H:i',
            lang: 'fr',
            mask: true
        });
        //scroll
        $('.scroll-to').click(function (event) {
            event.preventDefault();
            scrollTo($(this));
        });
        $('.header-mob').click(function (event) {
            event.preventDefault();
            toggleBurger();
        });
        $(window).resize(closeBurger);
        $('.list-header .item_link').click(closeBurger);
        $(window).scroll(function () {
            $('.sct').each(function () {
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

        if (x == 'sct-number') x = 'sct-carousel';
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
    var closeBurger = function () {
        var $header = $('header');
        if ($header.hasClass('header-open')) {
            $header.removeClass('header-open');
            $('body').removeClass('head-op');
        }
    }
    var toggleBurger = function (elem) {
        if (!$('header').hasClass('header-open')) {
            $('header').addClass('header-open');
            $('body').addClass('head-op');
        } else {
            $('header').removeClass('header-open');
            $('body').removeClass('head-op');
        }
    }
    var deltaTop = function (elem) {
        var elemTarget = $('#' + elem);
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