(function () {
    $(document).ready(function () {
        //scroll
        $('.scroll-to').click(function (event) {
            event.preventDefault();
            scrollTo($(this));
        });
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