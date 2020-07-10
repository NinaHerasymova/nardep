// let prev = $('.arrow__button')[0]
// let next = $('.arrow__button')[1]
//
// $('.popular__slider').slick({
//   infinite: true,
//   slidesToShow: 4,
//   slidesToScroll: 2,
//   prevArrow: prev,
//   nextArrow: next,
//   responsive: [
//     {
//       breakpoint: 1024,
//       settings: {
//         slidesToShow: 3,
//         slidesToScroll: 3,
//         infinite: true,
//         dots: true,
//       },
//     },
//     {
//       breakpoint: 600,
//       settings: {
//         slidesToShow: 2,
//         slidesToScroll: 2,
//         dots: true,
//       },
//     },
//     {
//       breakpoint: 480,
//       settings: {
//         slidesToShow: 1,
//         slidesToScroll: 1,
//         dots: true,
//       },
//     },
//   ],
// })

let popular_news_toggle = document.getElementById('popular_news-toggle');
let last_news_toggle = document.getElementById('last_news-toggle');
let popular_news = document.getElementById('last_news');
let last_news = document.getElementById('popular_news');

const visible = (elem_show, elem_hide) => {
  elem_show.style.display = 'block';
  elem_hide.style.display = 'none';
}

popular_news_toggle.addEventListener('click', visible(popular_news, last_news))
last_news_toggle.addEventListener('click', visible(last_news, popular_news))
