(function () {
    $(document).ready(function () {
        /*Carousel*/
        var $first = $('.first-carousel'),
            $second = $('.second-carousel');
        $second.owlCarousel({
            loop: true,
            dots: false,
            nav: false,
            smartSpeed : 1000,
            fluidSpeed : 1000,
            responsive:{
                0:{
                    stagePadding: 0
                },
                768:{
                    stagePadding: 50
                },
                990:{
                    stagePadding: 200
                }
            },
            items: 1
        });
        $first.owlCarousel({
            loop: true,
            nav: true,
            dots: false,
            reponsive : true,
            smartSpeed : 1000,
            fluidSpeed : 1000,
            navText: ["<span class='icon icon-prev'></span>","<span class='icon icon-next'></span>"],
            animateOut: 'fadeOutUp',
            animateIn: 'fadeInUp',
            items: 1
        });
        $('.partners-carousel').owlCarousel({
            loop: true,
            nav: true,
            dots: false,
            autoplay:true,
            navText: ["<span class='icon icon-prev'></span>","<span class='icon icon-next'></span>"],
            responsive:{
                0:{
                    items: 1
                },
                580:{
                    items: 2
                },
                768:{
                    items: 3
                },
                990:{
                    items: 4
                }
            },
            autoplayTimeout: 2000,
            autoplaySpeed: 1000
        });
        $('.about-carousel').owlCarousel({
            loop: true,
            dots: false,
            nav: true,
            navText: ["<span class='icon icon-prev'></span>","<span class='icon icon-next'></span>"],
            responsive:{
                0:{
                    items:1
                },
                990:{
                    items:2
                }
            }
        });
        $first.on('changed.owl.carousel', function (event) {
            $second.trigger('to.owl.carousel', [event.item.index, 1000]);
        });
        $second.on('changed.owl.carousel', function (event) {
            $first.trigger('to.owl.carousel', [event.item.index, 1000]);
        });
    });
}());