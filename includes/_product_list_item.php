<?php
	$colors = ['one', 'two', 'three', 'four', 'five'];
?>
<div class="product-list__item <?php echo $colors[floor(rand(0, 4))]; ?>">
	<div class="product-list__item__top">
		<h3 class="product-list__item__title">
			<a href="<?php echo $p_permalink; ?>">
				<?php echo $p_title; ?>
			</a>
			<a class="product-list__item__arrow" href="<?php echo $p_permalink; ?>">
				<img src="<?php echo bloginfo('template_directory') ?>/assets/images/build/arrow_right.png" alt="arrow">
			</a>
		</h3>
	</div>
	<div class="product-list__item__image">
		<a href="<?php echo $p_permalink; ?>">
			<img src="<?php echo get_the_post_thumbnail_url($p_id, 'product-thumb') ?>" alt="<?php echo $p_title; ?>">
		</a>
	</div>
</div>