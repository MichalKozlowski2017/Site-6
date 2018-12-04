<div class="dropdown filter-dropdown">
	<?php
		$terms = get_terms( array(
		    'taxonomy' => 'products',
		    'hide_empty' => false
		) );
	?>
	<a id="dLabel" class="filter-dropdown__btn" data-target="#" href="<?php echo $current_permalink; ?>" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
		<?php echo __('All categories', '--nazwa-firmy--'); ?>
		<span class="caret"></span>
	</a>
	<ul class="dropdown-menu" aria-labelledby="dLabel">
		<?php foreach($terms as $term) : ?>
			<li><a href="<?php echo get_term_link($term->term_id, 'products'); ?>"><?php echo $term->name; ?></a></li>
		<?php endforeach; ?>
	</ul>
</div>