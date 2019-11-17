$(document).ready(function(){
  $(".more-news").on("click", moreNews);
  $('.lang').on('click', lang);
  $('.mobile-menu-btn').on('click', menu);
  $('.contacts__name-list .item').on('click', switchContact);
  $('.modal-alert .modal-alert__close').on('click', closeAlertModal);
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

const menu = () => {
  $('.header__left').toggleClass('show');
};

function switchContact () {
  $('.contacts__name-list .item').removeClass('item--active');
  $(this).addClass('item--active');

  const id = $(this).attr('data-id');
  $('.contacts__content').removeClass('contacts__content--show');
  $('#' + id).addClass('contacts__content--show');
}

const openAlertModal = () => {
  $('.modal-alert').fadeIn('fast').css('display', 'flex');
};

const closeAlertModal = () => {
  $('.modal-alert').fadeOut('fast');
};

$('#contacts-form').on('submit', function(e) {
  e.preventDefault();
  $.ajax({
    url: '/works/ertc/wp-content/themes/ertc/mail.php',
    type: 'POST',
    data: 'name=' + $('#contacts-name').val() + '&tel=' + $('#contacts-tel').val() + '&mail=' + $('#contacts-mail').val(),
    success: function( data ) {
      $('#contacts-name').val('');
      $('#contacts-tel').val('');
      $('#contacts-mail').val('');
      openAlertModal();
    }
  });
});