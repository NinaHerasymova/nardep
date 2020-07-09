let prev = $('.arrow__button')[0]
let next = $('.arrow__button')[1]

$('.popular__slider').slick({
  infinite: true,
  slidesToShow: 4,
  slidesToScroll: 2,
  prevArrow: prev,
  nextArrow: next,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true,
      },
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
        dots: true,
      },
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
      },
    },
  ],
})
