<?php if (!empty($big_adboxes)) : ?>
	<?php foreach($big_adboxes as $adbox_id) : ?>
			<div class="col-md-12">
				<div class="adbox-big">
					<?php
						$adbox_text = get_field('text', $adbox_id);
						$adbox_image = get_field('image', $adbox_id);
						$adbox_image_full = get_field('image_full', $adbox_id);
						$adbox_cta_text = get_field('cta_text', $adbox_id);
						$adbox_cta_url = get_field('cta_url', $adbox_id);
						$adbox_new_window = get_field('new_window', $adbox_id);
						// TODO: jakoś to poskracać
					?>
					<div class="adbox adbox--big" style="background-image: url(<?php echo $adbox_image_full['sizes']['adbox']; ?>);">
						<div class="container">
							<div class="adbox__content">
								<div class="adbox__text">
									<?php echo $adbox_text; ?>
								</div>
								<a <?php ($adbox_new_window) ? 'target="_blank"' : ''; ?> href="<?php echo $adbox_cta_url; ?>" class="btn btn-default">
									<?php echo $adbox_cta_text; ?>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
	<?php endforeach; ?>
<?php endif; ?>