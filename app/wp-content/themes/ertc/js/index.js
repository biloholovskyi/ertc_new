$(document).ready(function(){
  $(".more-news").on("click", moreNews);
  chart();
  setTimeout(() => {
    chart();
  }, 5000);
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