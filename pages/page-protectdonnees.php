<?php
$post = hook('macro', '$:/view/post');
$meta = hook('get_all_meta_post', $post->getId());
?>
  <div class="header-title-container">
		<div class="entete">
			<div class="flotaison-container">
				<div class="textOver text0">
          protection <br />
					<span class="subtitle">des donnees</span>
				</div>
				<div class="background-image">
					<img src="static/images/protection-donnees.jpg" class="cimagex" alt="header title"/>
				</div>
			</div>
		</div>
  </div>

  
  <div class="cgu-page-content bg-white">
    <div class="tiny-container">
      
      <div class="text-center intro-container">
          <?php echo hook('cms_html', hook('decodeRouteImage', array($post->getContent(), 'medium'))); ?>
      </div>

      <div class="accordion">
        <h3 class="text-uppercase">1 - La protection de vos données personnelles</h3>
        <div>
          <?php echo hook('cms_html', hook('decodeRouteImage', array((isset($meta['meta_x_2']) ? $meta['meta_x_2'] : ''), 'medium'))); ?>
        </div>
        <h3 class="text-uppercase">2 - Votre engagement de sincérité</h3>
        <div>
          <?php echo hook('cms_html', hook('decodeRouteImage', array((isset($meta['meta_x_3']) ? $meta['meta_x_3'] : ''), 'medium'))); ?>
        </div>
      </div>
    </div>
  </div>