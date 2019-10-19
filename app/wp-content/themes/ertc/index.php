<?php get_header(); ?>

  <section class="home">
    <video src="<?php echo get_template_directory_uri() . '/media/video/show.mp4'; ?>" class="show" autoplay muted loop
           poster="<?php echo get_template_directory_uri() . '/media/image/poster.jpg'; ?>"></video>
    <div class="home__content">
      <div class="container">
        <div class="row">
          <div class="col-5">
            <h1 class="home__title">Электронная финансовая система</h1>
            <a href="https://client.ertc.land/auth/login" target="_blank" class="home__enter-platform">Войти на
              платформу ERtc</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="coin">
    <div class="container">
      <div class="row">
        <div class="col-12">
			<?php echo do_shortcode('[visualizer id="59"]'); ?>
          <h3 class="main-title">ERTC coin</h3>
          <div class="coin__block">
            <div class="name">Валидировано</div>
            <div class="detail">
              <div class="count">418.25</div>
              <div class="info">
                <div class="item">
                  <div class="info__name">Eur</div>
                  <div class="info__count">+1.45</div>
                </div>
                <div class="item">
                  <div class="info__name">%</div>
                  <div class="info__count">+0.35</div>
                </div>
              </div>
            </div>
          </div>

          <div class="coin__block">
            <div class="name">Эмиссия ERTcoin</div>
            <div class="detail">
              <div class="count">998’981.9</div>
              <div class="info">
                <div class="item">
                  <div class="info__name">Eur</div>
                </div>
              </div>
            </div>
          </div>

          <div class="coin__block">
            <div class="name">Курс ERTC</div>
            <div class="detail">
              <div class="count">5.45</div>
              <div class="info">
                <div class="item">
                  <div class="info__name">Eur</div>
                  <div class="info__count">+0.05</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="news">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h3 class="main-title">Новости</h3>
          <div class="news__title">Важные новости</div>
			<?php
			$args = array(
				'numberposts'      => 1,
				'orderby'          => 'date',
				'order'            => 'DESC',
				'tag'              =>  'main',
				'post_type'        => 'post',
				'suppress_filters' => true,
			);

			$posts = get_posts( $args );
			foreach ( $posts as $post ) {
				setup_postdata( $post );
				?>
              <a href="<?php the_permalink(); ?>" class="news__important-top">
                <picture>
                  <source type="image/img+svg"
                          srcset="<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>">
                  <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>" alt="<?php echo $post->post_title; ?>">
                </picture>
                <span class="content">
                  <span class="content__small-title"><?php $cat = get_the_category( $post->ID ); echo $cat[0]->cat_name; ?></span>
                  <span class="content__title"><?php echo $post->post_title; ?></span>
                </span>
              </a>
				<?php
			}
			wp_reset_postdata(); // сброс
			?>
        </div>
      </div>
      <div class="row news__row">
		  <?php
		  $args = array(
			  'numberposts'      => 3,
			  'orderby'          => 'date',
			  'order'            => 'DESC',
			  'tag'              =>  'importants',
			  'post_type'        => 'post',
			  'suppress_filters' => true,
		  );

		  $posts = get_posts( $args );
		  foreach ( $posts as $post ) {
			  setup_postdata( $post );
			  ?>
            <div class="col-4">
              <div class="news__item">
                <picture>
                  <source type="image/img+svg"
                          srcset="<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>">
                  <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>"
                       alt="<?php the_title(); ?>">
                </picture>
                <div class="news__item__small-title"><?php $cat = get_the_category( $post->ID ); echo $cat[0]->cat_name; ?></div>
                <div class="news__item__title"><?php the_title(); ?></div>
              </div>
            </div>
			  <?php
		  }
		  wp_reset_postdata(); // сброс
		  ?>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="news__title">Новости ERTC</div>
        </div>
      </div>
      <div class="row all-news">
		  <?php
		  $args = array(
			  'numberposts'      => -1,
			  'orderby'          => 'date',
			  'order'            => 'DESC',
			  'post_type'        => 'post',
			  'suppress_filters' => true,
		  );

		  $posts = get_posts( $args );
		  $news_count = 0;
		  foreach ( $posts as $post ) {
			  setup_postdata( $post );
			  $tag = get_the_tags( $post->ID );
			  if($tag[0]->slug != "main" and $tag[0]->slug != "importants") {
				  $news_count++;
				  ?>
                <div class="col-4">
                  <div class="news__item <?php if($news_count > 9) {echo 'hidden';} ?>">
                    <picture>
                      <source type="image/img+svg"
                              srcset="<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>">
                      <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>"
                           alt="<?php the_title(); ?>">
                    </picture>
                    <div class="news__item__small-title"><?php $cat = get_the_category( $post->ID ); echo $cat[0]->cat_name; ?></div>
                    <div class="news__item__title"><?php the_title(); ?></div>
                  </div>
                </div>
				  <?php
			  }
		  }
		  wp_reset_postdata(); // сброс
		  ?>
		  <?php
		  if($news_count > 9) {
			  ?>
            <div class="col-12" style="display: flex">
              <div class="more-news">Больше новостей</div>
            </div>
			  <?php
		  }
		  ?>
      </div>
    </div>
  </section>

  <div class="video">
    <div class="container">
      <div class="row">
        <div class="col-4">
          <h3 class="video__title">Видео</h3>
          <div class="video__name">Binance launches P2P crypto trading in China</div>
          <div class="video__time">World / 4 min</div>
          <div class="next-text">Далее:</div>
          <picture class="next-video">
            <source type="image/img+svg"
                    srcset="<?php echo get_template_directory_uri() . '/media/image/next_video.jpg'; ?>">
            <img src="<?php echo get_template_directory_uri() . '/media/image/next_video.jpg'; ?>" alt="video">
          </picture>
          <div class="video__name">A Comprehensive Guide to ...</div>
          <div class="video__time none-margin-bottom">World / 4 min</div>
        </div>
        <div class="col-8 current-video__wrapper">
          <picture class="current-video">
            <source type="image/img+svg"
                    srcset="<?php echo get_template_directory_uri() . '/media/image/video_poster.jpg'; ?>">
            <img src="<?php echo get_template_directory_uri() . '/media/image/video_poster.jpg'; ?>" alt="video">
          </picture>
          <div class="play"></div>
        </div>
      </div>
    </div>
  </div>

<?php get_footer(); ?>