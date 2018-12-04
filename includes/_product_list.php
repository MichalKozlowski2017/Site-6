<div class="product-list">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="col-md-3 col-sm-4 col-xs-6">
			<?php
				$p_id = get_the_ID();
				$p_title = get_the_title();
				$p_permalink = get_the_permalink();
			?>
			<?php include('_product_list_item.php'); ?>
		</div>
	<?php endwhile; endif; wp_reset_query(); ?>
	<div class="cf"></div>
</div>