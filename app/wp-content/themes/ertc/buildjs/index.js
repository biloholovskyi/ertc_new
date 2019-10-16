"use strict";

$(document).ready(function () {
  $(".more-news").on("click", moreNews);
});
$(window).resize(function () {});

var moreNews = function moreNews() {
  var hiddenNews = $(".all-news .hidden");
  var newNews = [];

  for (var i = 0; i < 3; i++) {
    hiddenNews.eq(i).length ? newNews.push(hiddenNews.eq(i)) : false;
  }

  for (var _i = 0; _i < 3; _i++) {
    newNews[_i] ? newNews[_i].removeClass("hidden") : false;
  }
};