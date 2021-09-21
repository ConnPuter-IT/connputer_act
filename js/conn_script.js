
$(document).ready(function() {
    $('.carousel').carousel({interval: 8000});
});

$('.about-company').addClass('animated bounceOutLeft');


$(document).ready(function(){

    $(".show-menu").click(function(){
        $(".main-menu").toggle()
    });

});

new WOW().init();
