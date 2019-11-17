<?php get_header(); ?>
<div class="container">
	<div class="row">
		<div class="col-12">
			<section class="article" style="padding-top: 79px;margin-top: 78px;">
				<?php
				the_post();
				the_content();
				?>
			</section>
		</div>
	</div>
</div>
<?php get_footer(); ?>
