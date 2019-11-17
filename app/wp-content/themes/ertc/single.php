<?php get_header(); ?>

	<div class="container">
		<div class="row">
			<div class="col-12">
        <h1 class="article__title"><?php the_title(); ?></h1>
				<section class="article">
          <?php
          the_post();
          the_content();
          ?>
        </section>
				<div class="article__share">
					<div class="title">Поделитесь новостью</div>
					<div class="icon-wrapper">
						<a href="#" class="item instagram"></a>
						<a href="https://twitter.com/share?url=https://localhost:3000/{{ request.path }}"
						   class="item twitter"
						   target="popup"
						   onclick="window.open('https://twitter.com/share?url=https://localhost:3000/{{ request.path }}', '', 'height=300,width=600'); return false;"></a>
						<a href="#" class="item youtube"></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="other-news">
		<div class="news__wrapper">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="head-block">
							<div class="title">Другие новости</div>
						</div>
					</div>
				</div>
				<div class="row">
					<?php
					$args = array(
						'numberposts'      => 4,
						'orderby'          => 'date',
						'order'            => 'DESC',
						'post_type'        => 'post',
						'suppress_filters' => true,
					);

					$current_id = get_the_ID();
					$post_count = 0;

					$posts = get_posts( $args );
					foreach ( $posts as $post ) {
						setup_postdata( $post );
						$post_id = $post->ID;
						if($current_id !== $post_id and $post_count < 3) {
						  $post_count++;
						  ?>
              <div class="col-12 col-sm-4">
                <a href="<?php the_permalink(); ?>" class="news__item">
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
				</div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>