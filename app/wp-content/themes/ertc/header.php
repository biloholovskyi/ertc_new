<!doctype html>
<html lang="ru">
<head>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap-grid.css'>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<?php wp_head(); ?>
  <title>ERTC</title>
</head>
<body>
<?php
if ( is_admin_bar_showing() ) {
?>
<header class="header" style="top: 32px">
	<?php
	} else {
	?>
  <header class="header">
		<?php
		}
		?>
    <a href="<?php echo get_home_url( '/' ); ?>">
      <picture class="header__logo">
        <source type="image/img+svg" srcset="<?php echo get_template_directory_uri() . '/media/icon/logo.svg'; ?>">
        <img src="<?php echo get_template_directory_uri() . '/media/icon/logo.svg'; ?>" alt="ertc">
      </picture>
    </a>
    <div class="header__left">
      <ul class="header__nav">
        <li><a href="about">О проекте</a></li>
        <li><a href="news">Новости</a></li>
        <li><a href="contact">Контакты</a></li>
      </ul>
      <div class="lang">
        Русский <span class="icon"></span>
        <div class="lang__block">
          <a href="#" class="lang__link">Русский</a>
          <a href="#" class="lang__link">English</a>
        </div>
      </div>
      <a href="https://client.ertc.land/auth/login" target="_blank" class="enter-platform">Вход на платформу</a>
    </div>
    <div class="mobile-menu-btn"></div>
  </header>