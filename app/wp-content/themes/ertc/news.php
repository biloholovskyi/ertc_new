<?php
/*
Template Name: News
*/
?>
<?php get_header(); ?>

<section class="news">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h3 class="main-title">Новости</h3>
      </div>
    </div>
  </div>
  <div class="news__wrapper">
    <div class="container">
      <div class="row">
				<?php
				$args = array(
					'numberposts'      => -1,
					'orderby'          => 'date',
					'order'            => 'DESC',
					'post_type'        => 'post',
					'suppress_filters' => true,
				);

				$posts = get_posts( $args );
				foreach ( $posts as $post ) {
					setup_postdata( $post );
					?>
          <div class="col-12 col-sm-4">
            <a href="<?php the_permalink(); ?>" class="news__item news__item--mb">
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
				wp_reset_postdata(); // сброс
				?>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
