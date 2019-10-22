$(document).ready(function(){
  $(".more-news").on("click", moreNews);
  $('.lang').on('click', lang);
});

$(window).resize(function () {

});

const moreNews = () => {
  const hiddenNews = $(".all-news .hidden");
  const newNews = [];

  for(let i = 0; i < 3; i++) {
    hiddenNews.eq(i).length ? newNews.push(hiddenNews.eq(i)) : false;
  }
  for(let i = 0; i < 3; i++) {
    newNews[i] ? newNews[i].removeClass("hidden") : false;
  }
};

const lang = () => {
  $('.lang .lang__block').toggleClass('show');
  $('.lang .icon').toggleClass('show__icon');
};