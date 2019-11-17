<?php
/*
Template Name: Contacts
*/
?>
<?php get_header(); ?>
<section class="contacts">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1 class="contacts__title">Контакты</h1>
      </div>
      <div class="col-12 col-md-4">
        <div class="contacts__name-list">
					<?php
					$args           = array(
						'numberposts'      => - 1,
						'orderby'          => 'date',
						'order'            => 'ASC',
						'post_type'        => 'contacts',
						'suppress_filters' => true,
					);
					$count_contacts = 0;
					$posts          = get_posts( $args );
					foreach ( $posts as $post ) {
						setup_postdata( $post );
						$count_contacts ++;
						?>
            <div class="item <?php if ( $count_contacts == 1 ) {
							echo 'item--active';
						} ?>" data-id="<?php the_ID(); ?>"><?php the_title(); ?></div>
						<?php
					}
					wp_reset_postdata(); // сброс
					?>
        </div>
      </div>
      <div class="col-12 col-md-8">
				<?php
				$args             = array(
					'numberposts'      => - 1,
					'orderby'          => 'date',
					'order'            => 'ASC',
					'post_type'        => 'contacts',
					'suppress_filters' => true,
				);
				$count_contacts_2 = 0;
				$posts            = get_posts( $args );
				foreach ( $posts as $post ) {
					setup_postdata( $post );
					$count_contacts_2 ++;
					?>
          <div class="contacts__content <?php if ( $count_contacts_2 == 1 ) {
						echo 'contacts__content--show';
					} ?>" id="<?php the_ID(); ?>">
            <h3 class="main-title"><?php the_title(); ?></h3>
            <div class="address">
              <div class="icon"></div>
              <div class="address__text"><?php the_field( 'contacts_address' ); ?></div>
            </div>
            <img src="<?php the_field( 'contacts_photo-1' ); ?>" alt=""
                 class="contacts__img contacts__img--width">
            <div class="img-wrapper">
              <img src="<?php the_field( 'contacts_photo-2' ); ?>" alt=""
                   class="contacts__img">
              <img src="<?php the_field( 'contacts_photo-3' ); ?>" alt=""
                   class="contacts__img">
            </div>
            <div class="contacts__desc">
              <div class="title"><?php the_field( 'contacts_desc-title' ); ?></div>
              <div class="text"><?php the_field( 'contacts_desc' ); ?></div>
            </div>
          </div>
					<?php
				}
				wp_reset_postdata(); // сброс
				?>
        <div class="contacts__form">
          <div class="title">Напишите нам</div>
          <form id="contacts-form">
            <div class="input-wrapper">
              <input type="text" name="name" id="contacts-name" class="input" placeholder="Имя">
              <input type="text" name="tel" id="contacts-tel" class="input" placeholder="Номер телефона">
            </div>
            <input type="email" name="mail" id="contacts-mail" class="input" placeholder="Email">
            <div class="contacts__form__text">Нажимая кнопку "Отправить", Вы принимаете условия Политики об обработке
              персональных данных и даете согласие на обработку персональных данных.
            </div>
            <input type="submit" class="input-submit input-submit--small" value="Отправить">
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>
