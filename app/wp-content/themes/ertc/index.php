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
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
  <section class="coin">
    <div class="container">
      <div class="row">
        <div class="col-6">
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
        <div class="col-6">
          <div class="main-graph">
            <div class="main-graph__title">Рост ERTC</div>
            <canvas id="height"></canvas>
            <div class="main-graph__title">Эмиссия коинов</div>
            <canvas id="emission"></canvas>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script>
    let height = document.getElementById('height').getContext('2d');
    let gradientStroke = height.createLinearGradient(0, 100, 0, 250);
    gradientStroke.addColorStop(0, "rgba(141, 192, 69, 0.4)");
    gradientStroke.addColorStop(1, "rgba(141, 192, 69, 0)");
    let chart = new Chart(height, {
      type: 'line',
      showTooltips: false,

      data: {
        labels: ['', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''],
        datasets: [{
          label: '',
          backgroundColor: gradientStroke,
          pointRadius: 0,
          borderColor: '#8DC045',
          borderWidth: 2,
          data: [2, 2.2, 2, 3, 3.4, 5, 3.3, 4, 3, 4.4, 5, 5.2, 5, 6, 5.4, 5, 6.3, 7, 7, 7.4, 7.1, 7.1, 6.3]
        }]
      },

      options: {
        legend: {
          display: false,
          showLines: false,
          gridLine: false
        },
        scales: {
          xAxes: [{
            display: false,
            gridLines: {
              drawBorder: false,
              color: 'rgba(0,0,0,0)',
              zeroLineColor: 'rgba(0,0,0,0)'
            }
          }],
          yAxes: [{
            display: true,
            ticks: {
              beginAtZero: true,
              stepSize: 2.5,
              max: 10,
              fontColor: 'rgba(57, 55, 56, 0.75)',
              fontSize: 14,
              padding: 15
            },
            gridLines: {
              drawBorder: false,
              color: 'rgba(0, 0, 0, 0.1)',
              tickMarkLength: 0,
              zeroLineColor: 'rgba(0,0,0,0.1)'
            }
          }]
        },
        tooltips: {
          enabled: false
        },
        elements: {
          line: {
            tension: 0
          }
        }
      }
    });

    let emission = document.getElementById('emission').getContext('2d');
    let gradientStroke2 = emission.createLinearGradient(0, 100, 0, 250);
    gradientStroke.addColorStop(0, "rgba(141, 192, 69, 0.4)");
    gradientStroke.addColorStop(1, "rgba(141, 192, 69, 0)");
    let chart2 = new Chart(emission, {
      type: 'line',
      showTooltips: false,

      data: {
        labels: ['', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''],
        datasets: [{
          label: '',
          backgroundColor: gradientStroke,
          pointRadius: 0,
          borderColor: '#8DC045',
          borderWidth: 2,
          data: [2.4, 2., 2, 4, 4.4, 6, 6.3, 6, 6, 6.4, 6.5, 6.2, 6, 6, 6.4, 6.5, 6.3, 7, 7, 7.4, 7.1, 7.1, 6.3]
        }]
      },

      options: {
        legend: {
          display: false,
          showLines: false,
          gridLine: false
        },
        scales: {
          xAxes: [{
            display: false,
            gridLines: {
              drawBorder: false,
              color: 'rgba(0,0,0,0)',
              zeroLineColor: 'rgba(0,0,0,0)'
            }
          }],
          yAxes: [{
            display: true,
            ticks: {
              beginAtZero: true,
              stepSize: 2.5,
              max: 10,
              fontColor: 'rgba(57, 55, 56, 0.75)',
              fontSize: 14,
              padding: 15
            },
            gridLines: {
              drawBorder: false,
              color: 'rgba(0, 0, 0, 0.1)',
              tickMarkLength: 0,
              zeroLineColor: 'rgba(0,0,0,0.1)'
            }
          }]
        },
        tooltips: {
          enabled: false
        },
        elements: {
          line: {
            tension: 0
          }
        }
      }
    });
  </script>

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
				'tag'              => 'main',
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
                  <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>"
                       alt="<?php echo $post->post_title; ?>">
                </picture>
                <span class="content">
                  <span class="content__small-title"><?php $cat = get_the_category( $post->ID );
	                  echo $cat[0]->cat_name; ?></span>
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
			  'tag'              => 'importants',
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
                <div class="news__item__small-title"><?php $cat = get_the_category( $post->ID );
					echo $cat[0]->cat_name; ?></div>
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
			  'numberposts'      => - 1,
			  'orderby'          => 'date',
			  'order'            => 'DESC',
			  'post_type'        => 'post',
			  'suppress_filters' => true,
		  );

		  $posts      = get_posts( $args );
		  $news_count = 0;
		  foreach ( $posts as $post ) {
			  setup_postdata( $post );
			  $tag = get_the_tags( $post->ID );
			  if ( $tag[0]->slug != "main" and $tag[0]->slug != "importants" ) {
				  $news_count ++;
				  ?>
                <div class="col-4">
                  <div class="news__item <?php if ( $news_count > 9 ) {
					  echo 'hidden';
				  } ?>">
                    <picture>
                      <source type="image/img+svg"
                              srcset="<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>">
                      <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>"
                           alt="<?php the_title(); ?>">
                    </picture>
                    <div class="news__item__small-title"><?php $cat = get_the_category( $post->ID );
						echo $cat[0]->cat_name; ?></div>
                    <div class="news__item__title"><?php the_title(); ?></div>
                  </div>
                </div>
				  <?php
			  }
		  }
		  wp_reset_postdata(); // сброс
		  ?>
		  <?php
		  if ( $news_count > 9 ) {
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