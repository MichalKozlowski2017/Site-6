
<?php if (!empty($small_adboxes)) : ?>
	<div class="col-sm-6 col-md-6">
		<?php foreach($small_adboxes as $adbox_id) : ?>
			<?php
				$adbox_text = get_field('text', $adbox_id);
				$adbox_image = get_field('image', $adbox_id);
				$adbox_cta_text = get_field('cta_text', $adbox_id);
				$adbox_cta_url = get_field('cta_url', $adbox_id);
				$adbox_new_window = get_field('new_window', $adbox_id);
			?>
			<div class="adbox adbox--small" style="background-image: url(<?php echo $adbox_image['sizes']['adbox']; ?>);">
				<div class="adbox__text">
					<?php echo $adbox_text; ?>
				</div>
				<a <?php echo ($adbox_new_window) ? 'target="_blank" rel="nofollow"' : ''; ?> href="<?php echo $adbox_cta_url; ?>" class="btn btn-default">
					<?php echo $adbox_cta_text; ?>
				</a>
			</div>
		<?php endforeach; ?>
	</div>
<?php endif; ?>