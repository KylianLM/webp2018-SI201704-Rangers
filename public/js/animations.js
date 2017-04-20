(function () {
    $(document).ready(function () {
        //Animations
        if(($('#sct-intro .sct_cont').offset().top + 7) < $(window).scrollTop()){
            $('header').addClass('fixed-header');
        }
        $('.main').addClass('main-loaded');
        $('#sct-intro').addClass('sct-loaded');
        displayAnim();

        $(window).scroll(function(){

            displayAnim();

           if($('#sct-intro .sct_cont').offset().top + 7 < $(window).scrollTop()){
               $('header').addClass('fixed-header');
           }else{
               $('header').removeClass('fixed-header');
           }
        });
        //Cursor
        if($(window).width()>768) {
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
                deltaIn = elemTarget.offset().top - (elemTargetH*2),
                deltaOut = deltaIn + elemTargetH  + (elemTargetH*2);

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