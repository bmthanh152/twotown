//SLIDER PRODUCT

$(document).ready(function(){
    $('.body-prd-image').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 1000,
      infinite: true,
      prevArrow:`<button type='button' class='slick-prev slick-slider'><i class='fa fa-angle-left' aria-hidden='true'></i></button>`,
      nextArrow:"<button type='button' class='slick-next slick-slider'><i class='fa fa-angle-right' aria-hidden='true'></i></button>"
    });
  });

// LOADING PAGE
let load = document.getElementById('load');
window.onload = function () {
  load.style.display ='none';
}
