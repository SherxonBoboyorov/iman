$(document).ready(function(){

$('.slider__list').slick({
    dots: false,
    arrows:true,
    autoplaySpeed:5000,
    infinite: true,
    speed: 1500,
    autoplay:true,
    fade: true,
});

$('.owl-carousel').owlCarousel({
  loop:false,
  margin:10,
  data:false,
  nav:true,
  autoplaySpeed:2000,
  autoplay:true,
    responsive:{
      0:{
        items:1
      },

      750:{
        items:2
      },

      1250:{
        items:3
      }
  }
});

$('.opinion_of__list').slick({
  dots: true,
  arrows:false,
  infinite: false,
  speed: 1000,
  autoplay:true,
  slidesToShow: 2, 
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1010,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },
  ]
});

$('.new__list').slick({
  rows: 2,
  dots: false,
  arrows: true,
  infinite: true,
  autoplaySpeed:5000,
  speed: 1500,
  slidesToShow: 3,
  slidesToScroll: 1,

  responsive: [
    {
      breakpoint: 1250,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
      }
    },

    {
      breakpoint: 750,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      }
    },
  ]
});

})