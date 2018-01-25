<?php
$post = hook('macro', '$:/view/post');
$meta = hook('get_all_meta_post', $post->getId());
?>
  <div class="header-title-container">
		<div class="entete">
			<div class="flotaison-container">
				<div class="textOver text0">
					mentions <br />
					<span class="subtitle">legales</span>
				</div>
				<div class="background-image">
					<img src="static/images/legales.jpg" class="cimagex" alt="header title"/>
				</div>
			</div>
		</div>
  </div>

  <div class="cgu-page-content bg-white">
    <div class="tiny-container">
      <div class="accordion">
        <h3 class="text-center text-uppercase">Edition du site internet</h3>
        <div>
          <?php echo hook('cms_html', hook('decodeRouteImage', array($post->getContent(), 'medium'))); ?>
        </div>
        <h3 class="text-center text-uppercase">Rédaction du site internet</h3>
        <div>
          <?php echo hook('cms_html', hook('decodeRouteImage', array((isset($meta['meta_x_2']) ? $meta['meta_x_2'] : ''), 'medium'))); ?>
        </div>
        <h3 class="text-center text-uppercase">Hébergeur du site internet</h3>
        <div>
          <?php echo hook('cms_html', hook('decodeRouteImage', array((isset($meta['meta_x_3']) ? $meta['meta_x_3'] : ''), 'medium'))); ?>
        </div>
        <h3 class="text-center text-uppercase">COOKIES</h3>
        <div>
          <?php echo hook('cms_html', hook('decodeRouteImage', array((isset($meta['meta_x_4']) ? $meta['meta_x_4'] : ''), 'medium'))); ?>
        </div>
        <h3 class="text-center text-uppercase">Liens hypertextes</h3>
        <div>
          <?php echo hook('cms_html', hook('decodeRouteImage', array((isset($meta['meta_x_5']) ? $meta['meta_x_5'] : ''), 'medium'))); ?>
        </div>
      </div>
    </div>
  </div>