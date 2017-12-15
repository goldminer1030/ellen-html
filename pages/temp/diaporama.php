			<div class="diaporama">
				<div class="container">
					<div class="logo">
						<img src="<?php echo hook('decodeRouteImage', array('@data@{10}', 'large')); ?>" alt="<?php echo hook('get_last_alt_image'); ?>"/>
					</div>
				</div>
				<div class="slidesheep">
					<?php
					$listPost = hook('get_custom_post', array('diaporama', 'view_all_post', array(true, hook('lang_get_context_id') )));
					foreach($listPost as $post) {
						$meta = hook('get_all_meta_post', $post->getId());
					?>
					<div>
						<div class="prez">
							<div class="container">
								<h2><?php echo $post->getTitle(); ?></h2>
							</div>
						</div>

						<img src="<?php echo hook('decodeRouteImage', array($post->getThemePicture(), 'large')); ?>" class="cimagex" alt="<?php echo hook('get_last_alt_image'); ?>"/>
					</div>
					<?php } ?>
				</div>
			</div>
