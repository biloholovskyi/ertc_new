<?php
/*
Template Name: About
*/
?>
<?php get_header(); ?>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
<section class="about-head">
  <div class="container">
    <div class="row">
      <div class="col-6 col-md-3 col-lg-6" style="position: relative">
        <img src="<?php echo get_template_directory_uri() . '/media/image/mac.png'; ?>" alt="mac"
             class="about-head__img">
      </div>
      <div class="col-12 col-md-9 col-lg-6">
        <div class="about-head__pre-title">О проекте</div>
        <h1 class="about-head__title"><?php the_field('about_title'); ?></h1>
        <a href="https://client.ertc.land/auth/login" class="about-head__platform-link" target="_blank">Войти на
          платформу ERtc</a>
      </div>
    </div>
  </div>
</section>
<section class="about-text">
  <div class="container">
    <div class="row">
      <div class="col-12" style="position:relative;">
        <div class="title"><?php the_field('about_title-desc'); ?></div>
        <div class="text"><?php the_field('about_desc'); ?></div>
        <img src="<?php the_field('about_img'); ?>" alt="ertc" class="about-text__img">
      </div>
    </div>
  </div>
</section>
<section class="coin coin--page">
	<?php
	$validation = get_field('about_validation');
	$emissionCoin = get_field('about_emission');
	$course = get_field('about_course');
	?>
  <div class="container">
    <div class="row">
      <div class="col-12 col-sm-6">
        <h3 class="main-title">ERTC coin</h3>
        <div class="coin__block">
          <div class="name">Валидировано</div>
          <div class="detail">
            <div class="count"><?php echo $validation['number']; ?></div>
            <div class="info">
              <div class="item">
                <div class="info__name">м<sup>2</sup></div>
                <div class="info__count"><?php echo $validation['val']; ?></div>
              </div>
              <div class="item">
                <div class="info__name">%</div>
                <div class="info__count"><?php echo $validation['percent']; ?></div>
              </div>
            </div>
          </div>
        </div>

        <div class="coin__block">
          <div class="name">Эмиссия ERTcoin</div>
          <div class="detail">
            <div class="count"><?php echo $emissionCoin['number']; ?></div>
            <div class="info">
              <div class="item">
                <div class="info__name">ERTCoin</div>
              </div>
            </div>
          </div>
        </div>

        <div class="coin__block">
          <div class="name">Курс ERTC</div>
          <div class="detail">
            <div class="count"><?php echo $course['number']; ?></div>
            <div class="info">
              <div class="item">
                <div class="info__name">%</div>
                <div class="info__count"><?php echo $course['val']; ?></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-6">
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
<?php
$args = array(
	'numberposts'      => -1,
	'orderby'          => 'date',
	'order'            => 'DESC',
	'post_type'        => 'graph',
	'suppress_filters' => true,
);
$graph_count = 0;

$posts = get_posts( $args );
foreach ( $posts as $post ) {
	setup_postdata( $post );
	$graph_count++;
	if ($graph_count == 2) {
		$emission = get_field( 'graph-array' );
	} else {
		$height_ertc = get_field( 'graph-array' );
	}
}
wp_reset_postdata(); // сброс
?>
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
        data: [
          "<?php echo $height_ertc['graph-1']; ?>",
          "<?php echo $height_ertc['graph-2']; ?>",
          "<?php echo $height_ertc['graph-3']; ?>",
          "<?php echo $height_ertc['graph-4']; ?>",
          "<?php echo $height_ertc['graph-5']; ?>",
          "<?php echo $height_ertc['graph-6']; ?>",
          "<?php echo $height_ertc['graph-7']; ?>",
          "<?php echo $height_ertc['graph-8']; ?>",
          "<?php echo $height_ertc['graph-9']; ?>",
          "<?php echo $height_ertc['graph-10']; ?>",
          "<?php echo $height_ertc['graph-11']; ?>",
          "<?php echo $height_ertc['graph-12']; ?>",
          "<?php echo $height_ertc['graph-13']; ?>",
          "<?php echo $height_ertc['graph-14']; ?>",
          "<?php echo $height_ertc['graph-15']; ?>",
          "<?php echo $height_ertc['graph-16']; ?>",
          "<?php echo $height_ertc['graph-17']; ?>",
          "<?php echo $height_ertc['graph-18']; ?>",
          "<?php echo $height_ertc['graph-19']; ?>",
          "<?php echo $height_ertc['graph-20']; ?>",
          "<?php echo $height_ertc['graph-21']; ?>",
          "<?php echo $height_ertc['graph-22']; ?>",
          "<?php echo $height_ertc['graph-23']; ?>"
        ]
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
            suggestedMax: 10,
            fontColor: 'rgba(57, 55, 56, 0.75)',
            fontSize: 14,
            padding: 15,
            maxTicksLimit: 6
          },
          gridLines: {
            drawBorder: false,
            color: 'rgba(0, 0, 0, 0.1)',
            tickMarkLength: 0,
            zeroLineColor: 'rgba(0,0,0,0.1)',
            offsetGridLine: true
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
        data: [
          "<?php echo $emission['graph-1']; ?>",
          "<?php echo $emission['graph-2']; ?>",
          "<?php echo $emission['graph-3']; ?>",
          "<?php echo $emission['graph-4']; ?>",
          "<?php echo $emission['graph-5']; ?>",
          "<?php echo $emission['graph-6']; ?>",
          "<?php echo $emission['graph-7']; ?>",
          "<?php echo $emission['graph-8']; ?>",
          "<?php echo $emission['graph-9']; ?>",
          "<?php echo $emission['graph-10']; ?>",
          "<?php echo $emission['graph-11']; ?>",
          "<?php echo $emission['graph-12']; ?>",
          "<?php echo $emission['graph-13']; ?>",
          "<?php echo $emission['graph-14']; ?>",
          "<?php echo $emission['graph-15']; ?>",
          "<?php echo $emission['graph-16']; ?>",
          "<?php echo $emission['graph-17']; ?>",
          "<?php echo $emission['graph-18']; ?>",
          "<?php echo $emission['graph-19']; ?>",
          "<?php echo $emission['graph-20']; ?>",
          "<?php echo $emission['graph-21']; ?>",
          "<?php echo $emission['graph-22']; ?>",
          "<?php echo $emission['graph-23']; ?>"
        ]
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
            suggestedMax: 10,
            fontColor: 'rgba(57, 55, 56, 0.75)',
            fontSize: 14,
            padding: 15,
            maxTicksLimit: 6
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
<section class="news news--about">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h3 class="main-title">Новости</h3>
      </div>
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
				if ( true ) {
					$news_count ++;
					?>
          <div class="col-12 col-sm-4">
            <a href="<?php the_permalink(); ?>" class="news__item <?php if ( $news_count > 9 ) {
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
            </a>
          </div>
					<?php
				}
			}
			wp_reset_postdata(); // сброс
			?>
      <div class="col-12" style="display: flex">
        <a href="./news/" class="more-news">Больше новостей</a>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>
