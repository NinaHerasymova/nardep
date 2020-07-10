
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


let popular_news_toggle = document.getElementById('popular_news-toggle');
let last_news_toggle = document.getElementById('last_news-toggle');
let popular_news = document.getElementById('last_news');
let last_news = document.getElementById('popular_news');

const visible_popular = () => {
    popular_news.style.display = 'block';
    last_news.style.display = 'none';
    popular_news_toggle.classList.add('active')
    last_news_toggle.classList.remove('active')
}
const visible_last = () => {
    last_news.style.display = 'block';
    popular_news.style.display = 'none';
    last_news_toggle.classList.add('active')
    popular_news_toggle.classList.remove('active')

}

popular_news_toggle.addEventListener('click', visible_popular)

last_news_toggle.addEventListener('click', visible_last)
