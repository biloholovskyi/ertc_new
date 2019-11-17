<footer class="footer">
	<?php
	$args = array(
		'numberposts'      => 1,
		'orderby'          => 'date',
		'order'            => 'DESC',
		'post_type'        => 'settings',
		'suppress_filters' => true,
	);

	$posts = get_posts( $args );
	foreach ( $posts as $post ) {
		setup_postdata( $post );
		if($post->post_title == 'Презентация') {
		  $presentation = get_field('settings_presentation');
    }
	}
	wp_reset_postdata(); // сброс
	?>
  <div class="container">
    <div class="row">
      <div class="col-6 col-md-4 col-lg-3">
        <div class="footer__nav-title">ERTC</div>
        <ul class="footer__nav-list">
          <li><a href="about">О проекте</a></li>
          <li><a href="news">Новости</a></li>
          <li><a href="https://client.ertc.land/auth/login" target="_blank">Вход на платформу</a></li>
          <li><a href="<?php echo $presentation; ?>" target="_blank">Презентация</a></li>
        </ul>
      </div>
      <div class="col-6 col-md-5 col-lg-3">
        <div class="footer__nav-title">Поддержка</div>
        <ul class="footer__nav-list">
          <li><a href="https://ertc.land/person/help" target="_blank">FAQ</a></li>
          <li><a href="mailto:support@ertc.online">Написать в техподдержку</a></li>
        </ul>
      </div>
      <div class="col-6 col-md-3 col-lg-3">
        <div class="footer__nav-title">ERTcoin</div>
        <ul class="footer__nav-list">
          <li><a href="https://ertc.land/console/wallet" target="_blank">Купить ERTcoin</a></li>
          <li><a href="https://ertc.land/console/validation-history" target="_blank">Валидация</a></li>
        </ul>
      </div>
      <div class="col-12 col-sm-6 col-md-6 col-lg-3">
        <div class="footer__nav-title">Следите за проектом</div>
        <div class="footer__social">
          <a href="https://t.me/ErtcSystem" target="_blank" class="item" style="background-image: url(<?php echo get_template_directory_uri().'/media/icon/telegram.svg'; ?>);"></a>
          <a href="https://www.youtube.com/channel/UC_JZIdQKl3mRxMnKt4QSvGw" target="_blank" class="item" style="background-image: url(<?php echo get_template_directory_uri().'/media/icon/youtube.svg'; ?>);"></a>
          <a href="https://github.com/Ertconline" target="_blank" class="item" style="background-image: url(<?php echo get_template_directory_uri().'/media/icon/github.svg'; ?>);"></a>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="footer__coop">
          <div class="coop">© 2019 ERTC</div>
          <a href="politica" class="coop-link">Политика конфиденциальности</a>
        </div>
      </div>
    </div>
  </div>
</footer>

<div class="modal-alert">
  <div class="modal-alert__body">
    <div class="modal-alert__close"></div>
    <div class="modal-alert__text">Спасибо за вашу заявку <br> С вами свяжутся в ближайшее время!</div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<?php wp_footer();  ?>
</body>
</html>