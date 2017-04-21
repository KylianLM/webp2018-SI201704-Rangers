(function () {
    $(document).ready(function () {
        //Animations
        //LOAD
        if(($('#sct-intro .sct_cont').offset().top + 7) < $(window).scrollTop()){
            $('header').addClass('fixed-header');
        }
        setTimeout(function(){
            $('.main').addClass('main-loaded');
        },600);
        $('.sct').each(function(){
            if(deltaTop($(this).attr('id'))){
                $(this).addClass('sct-loaded');
            }
        });
        displayAnim();
        //SCROLL
        $(window).scroll(function(){
            displayAnim();
           if($('#sct-intro .sct_cont').offset().top + 7 < $(window).scrollTop()){
               $('header').addClass('fixed-header');
           }else{
               $('header').removeClass('fixed-header');
           }
           $('.sct').each(function(){
               if(deltaTop($(this).attr('id'))){
                   $(this).addClass('sct-loaded');
               }
           });
        });
        //Cursor
        if($(window).width()>=768) {
            $(document).on('mousemove', function (e) {
                var $vidSct = $('#sct-intro').offset().top + $('#sct-intro').height();
                if (e.pageY <= $vidSct) {
                    $('.vid-filter').css({
                        left: e.pageX,
                        top: e.pageY
                    });
                }
            });
        }
    });
    var deltaTop = function (elem) {
        var elemTarget = $('#'+elem);
        if (elemTarget.length) {
            var elemTargetH = elemTarget.height(),
                delta = (elem == 'sct-number' || elem == 'sct-partners')?(elemTargetH*2):elemTargetH,
                deltaIn = elemTarget.offset().top - delta,
                deltaOut = deltaIn + elemTargetH  + delta;

            if ($(window).scrollTop() > deltaIn && $(window).scrollTop() < deltaOut) {
                return true;
            }

        }
        return false;
    };
    var displayAnim = function(){
        if(deltaTop('sct-number')){
            animNumber();
        }
    }
    var animNumber = function(){
        var numbers = $('.count');
        if(numbers.length > 0){
            numbers.each(function() {
                var $this = $(this),
                    countTo = $this.attr('data-count');
                $({ countNum: $this.text()}).animate({
                        countNum: countTo
                    },
                    {
                        duration: 1000,
                        easing:'linear',
                        step: function() {
                            $this.text(Math.floor(this.countNum));
                        },
                        complete: function() {
                            $this.text(this.countNum);
                        }

                    });
            });
        }
    }
}());