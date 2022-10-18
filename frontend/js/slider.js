$(document).ready(function(){
    $('.slider-autoplay').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay:true,
        autoplaySpeed:2000,
        dots:true,
        prevArrow:"<button type='button' class='slick-prev pull-left'><i class='bx bxs-chevron-left'></i></button>",
        nextArrow:"<button type='button' class='slick-next pull-right'><i class='bx bxs-chevron-right'></i></button>"
    });  
  });