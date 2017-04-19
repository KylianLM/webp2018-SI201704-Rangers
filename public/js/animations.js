(function () {
    $(document).ready(function () {
        //Animations
        if(($('#sct-intro .sct_cont').offset().top + 7) < $(window).scrollTop()){
            $('header').addClass('fixed-header');
        }
        $('.main').addClass('main-loaded');
        $('#sct-intro').addClass('sct-loaded');
        $(window).scroll(function(){
            //displayAnim('.main>section,.main>div');
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
}());