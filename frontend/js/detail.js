$(document).ready(function(){  
    $('.body-side-detail-slider').slick({
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


document.getElementById("increase").addEventListener("click",function()
{   
    let amount=parseInt(document.getElementById("number").value);
    if(amount<0 || isNaN(amount))
    {
        amount=0;
        document.getElementById("number").value=amount;
    }
    if(amount<99){
        amount=amount+1
        var textbox=document.getElementById("number")
        textbox.value=amount;
    }
    if(amount>=99){
        amount=99;
        alert("Số lượng đạt đến giới hạn");
        document.getElementById("number").value=amount;
    }
    
})
document.getElementById("decrease").addEventListener("click",function(){
    let amount=parseInt(document.getElementById("number").value);
    if(amount<=0 || isNaN(amount))
    {
        amount=0;
        document.getElementById("number").value=amount;
    }
    else{
        amount=amount-1;
        document.getElementById("number").value=amount;
    }
})