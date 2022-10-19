$(document).ready(function(){  
    $('.test-slider').slick({
        infinite: true,
        slidesToShow: 5,
        slidesToScroll: 3,
        prevArrow:"<button type='button' class='slick-prev pull-left'><i class='bx bxs-chevron-left'></i></button>",
        nextArrow:"<button type='button' class='slick-next pull-right'><i class='bx bxs-chevron-right'></i></button>"
    })
});
let slideindex=1;
showSlide(slideindex);
function currentSlide(n)
{
    showSlide(slideindex=n);
}
function showSlide(n)
{
    let i;
    let slides=document.getElementsByClassName("image1");
    let dots=document.getElementsByClassName("imgage");
    for(i=0;i<slides.length;i++){
        slides[i].style.display="none";
    }
    slides[slideindex-1].style.display = "block";
}