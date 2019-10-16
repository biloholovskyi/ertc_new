<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="col-3">
        <div class="footer__nav-title">ERTC</div>
        <ul class="footer__nav-list">
          <li><a href="#">О проекте</a></li>
          <li><a href="#">Новости</a></li>
          <li><a href="#">Вход на платформу</a></li>
        </ul>
      </div>
      <div class="col-3">
        <div class="footer__nav-title">Поддержка</div>
        <ul class="footer__nav-list">
          <li><a href="#">FAQ</a></li>
          <li><a href="#">Help Center</a></li>
          <li><a href="#">Написать в техподдержку</a></li>
        </ul>
      </div>
      <div class="col-3">
        <div class="footer__nav-title">ERTC Coin</div>
        <ul class="footer__nav-list">
          <li><a href="#">Купить коин</a></li>
          <li><a href="#">Курс</a></li>
          <li><a href="#">Валидация</a></li>
        </ul>
      </div>
      <div class="col-3">
        <div class="footer__nav-title">Следите за проектом</div>
        <form class="footer__subs-form">
          <input type="email" class="footer__subs-input" placeholder="Введите ваш Email">
          <input type="submit" class="footer__subs-submit" value="Подписаться">
        </form>
        <div class="footer__social">
          <a href="#" target="_blank" class="item" style="background-image: url(<?php echo get_template_directory_uri().'/media/icon/twitter.svg'; ?>);"></a>
          <a href="#" target="_blank" class="item" style="background-image: url(<?php echo get_template_directory_uri().'/media/icon/youtube.svg'; ?>);"></a>
          <a href="#" target="_blank" class="item" style="background-image: url(<?php echo get_template_directory_uri().'/media/icon/facebook.svg); background-size: 10px;'; ?>"></a>
          <a href="#" target="_blank" class="item" style="background-image: url(<?php echo get_template_directory_uri().'/media/icon/pinterest.svg'; ?>);"></a>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="footer__coop">
          <div class="coop">© 2019 ERTC</div>
          <a href="#" class="coop-link">Политика конфиденциальности</a>
          <a href="#" class="coop-link">Пользовательское соглашение</a>
        </div>
      </div>
    </div>
  </div>
</footer>

<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<?php wp_footer();  ?>
</body>
</html>