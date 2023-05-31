/// HEADER BAR
window.onscroll = function() {nav_bar()};
function nav_bar() {
    if (document.documentElement.scrollTop > 100) {
        document.querySelector('.header-info_container').classList.add('navbar-hide');
        document.querySelector('.header-main').classList.add('navbar-hide');
        document.querySelector('.header-navbar').classList.add('navbar-header-scroll');
        document.querySelector('.btn-go-to-top').classList.remove('navbar-hide');
    }
    else { 
        document.querySelector('.header-info_container').classList.remove('navbar-hide');
        document.querySelector('.header-main').classList.remove('navbar-hide');
        document.querySelector('.header-navbar').classList.remove('navbar-header-scroll');
        document.querySelector('.btn-go-to-top').classList.add('navbar-hide');
    }
}

/// SLIDER BANNER MAIN PAGE
$(document).ready(function(){
  $('.body-mp-banner--cover').slick({
    infinite: true,
    speed: 300,
    autoplay: true,
    autoplaySpeed: 3000,
    slidesToShow: 1,
    adaptiveHeight: true,
    prevArrow:`<button type='button' class='slick-prev slick-slider'><i class='fa fa-angle-left' aria-hidden='true'></i></button>`,
    nextArrow:"<button type='button' class='slick-next slick-slider'><i class='fa fa-angle-right' aria-hidden='true'></i></button>"
  });
});

//SLIDER BANNER SPECIAL PRODUCT
$(document).ready(function(){
  $('.body-mp-productSpecial--container').slick({
    slidesToShow: 1,
    autoplay: true,
    autoplaySpeed: 1000,
    infinite: true,
    prevArrow:`<button type='button' class='slick-prev slick-slider'><i class='fa fa-angle-left' aria-hidden='true'></i></button>`,
    nextArrow:"<button type='button' class='slick-next slick-slider'><i class='fa fa-angle-right' aria-hidden='true'></i></button>",
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: true,
        }
      },
      {
        breakpoint: 900,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
          arrows: false,
          
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          arrows: false,
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          arrows: false,
        }
      }
    ]
  });
});


// LOADING PAGE
let load = document.getElementById('load');
window.onload = function () {
  load.style.display ='none';
}

// Setup đồng hồ đếm ngược
var countDownDate = new Date("May 1, 2023 15:37:25").getTime();


var x = setInterval(function() {

  var now = new Date().getTime();
    

  var distance = countDownDate - now;

  //var weeks = Math.floor(distance / (1000 * 60 * 60 * 24));
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    

  document.getElementById("timeExpire").innerHTML = " " + days + "d : " + hours + "h : "
  + minutes + "m : " + seconds + "s";
    
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("timeExpire").innerHTML = "Đã hết hạn";
  }
}, 1000);

// go to top
let button_to_top = document.querySelector('.btn-go-to-top');
button_to_top.addEventListener('click',function(){
    document.documentElement.style.scrollBehavior = "smooth";
    document.documentElement.scrollTop = 0; //for gg chorm
    document.body.scrollTop = 0;            //for safari
    document.documentElement.style.scrollBehavior = "auto";
})
button_to_top.addEventListener('click',function(){
})
