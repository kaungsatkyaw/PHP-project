var owl = $('.owl-carousel');
owl.owlCarousel({
    loop:true,
    nav:true,
    margin:10,
    autoplay:300,
    pagination:false,
    margin:0,
    navText:['<i class="fa fa-angle-left" aria-hidden="true"></i>',
    '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
    navContainer:'.custom-nav',
    responsive:{
        0:{
            items:3
        },
        600:{
            items:3
        },            
        960:{
            items:4
        },
        1200:{
            items:4
        }
    }
   
});
owl.on('mousewheel', '.owl-stage', function (e) {
    if (e.deltaY>0) {
        owl.trigger('next.owl');
    } else {
        owl.trigger('prev.owl');
    }
    e.preventDefault();
});