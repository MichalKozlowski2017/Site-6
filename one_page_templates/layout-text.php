<?php $cols = get_sub_field('cols'); ?>
<div class="module text">
	<?php if (!empty(get_sub_field('title'))) : ?>
		<div class="row">
			<div class="col-sm-12">
				<h2><?php echo get_sub_field('title'); ?></h2>
			</div>
		</div>
	<?php endif; ?>
	<div class="row">
		<?php if ($cols) : ?>
			<?php foreach ($cols as $col) : ?>
				<div class="<?php echo (count($cols) == 1) ? 'col-sm-12' : 'col-sm-6'; ?>">
					<?php echo apply_filters('the_content', $col['col']); ?>
				</div>
			<?php endforeach; ?>
		<?php endif; ?>
	</div>
</div>