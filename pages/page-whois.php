<?php
$post = hook('macro', '$:/view/post');
$meta = hook('get_all_meta_post', $post->getId());
?>
  <div class="header-title-container">
		<div class="entete">
			<div class="flotaison-container">
				<div class="textOver text0">
          la fine équipe <br />
					<span class="subtitle">Ellen Scott Career</span>
				</div>
				<div class="background-image">
					<img src="<?php echo hook('decodeRouteImage', array($post->getThemePicture(), 'large')); ?>" class="cimagex" alt="header title" alt="<?php echo hook('get_last_alt_image'); ?>" />
				</div>
			</div>
		</div>
  </div>

  <!-- Dream Team -->
  <div class="team-members">
    <p class="dream-team">La fine équipe</p>
    
    <div class="owl-carousel">
      <?php
      $fineEquipe = hook('get_custom_post', array('diapoequipe', 'view_all_post_enable'));
      foreach($fineEquipe as $collaborateur) {
      ?>
      <div class="team-member">
        <div class="portrait">
          <img src="<?php echo hook('decodeRouteImage', array($collaborateur->getThemePicture(), 'large')); ?>" class="cimagex" alt="blog image" />
        </div>
        <p class="name"><?php echo $collaborateur->getTitle(); ?></p>
        <p class="position bg-dark-red"><?php echo $collaborateur->getResume(); ?></p>
        <?php if(strlen($collaborateur->getWebSite())) { ?>
          <div class="linkedin"><a href="<?php echo $collaborateur->getWebSite(); ?>" target="_blank" class="fico fico-follow fico-linkedin"></a></div>
        <?php } ?>
      </div>
      <?php } ?>
    </div>

    <div class="join-team-wrapper">
      <a href="<?php echo hook('path_root').hook('search_theme_route_by_id', array('pages', 16)).'?mode=Rejoindre+la+fine+équipe'; ?>" class="btn-join-team">Rejoindre la fine équipe ></a>
    </div>
  </div>

  <!-- Where do we come from -->
  <div class="our-history">
    <div class="where-we"><?php if(preg_match('#<h[0-6][^>]*>([^<]+)</h2>#i', $post->getContent(), $regex)) { echo $regex[1]; } ?></div>

    <div class="our-history-wrapper">
      <div class="history-text"><?php echo hook('cms_html', hook('decodeRouteImage', array(preg_replace('#<h[0-6][^>]*>[^<]+</h[0-6]>#i', '', $post->getContent()), 'medium'))); ?></div>

      <div class="history-image">
        <img src="static/images/where-do-we-come-from.jpg" alt="our history" />
      </div>
    </div>
  </div>

  <!-- Why Ellen Scott -->
  <div class="why-ellen-container">
    <div class="entete">
      <div class="flotaison-container">
        <?php $content = (isset($meta['meta_x_pourquoi_1']) ? $meta['meta_x_pourquoi_1'] : ''); ?>
        <div class="why-ellen-scott"><?php if(preg_match('#<h[0-6][^>]*>([^<]+)</h2>#i', $content, $regex)) { echo $regex[1]; } ?></div>

        <div class="glass-board why-ellen-description1"><?php echo hook('cms_html', hook('decodeRouteImage', array(preg_replace('#<h[0-6][^>]*>[^<]+</h[0-6]>#i', '', $content), 'medium'))); ?></div>

        <?php $content = (isset($meta['meta_x_pourquoi_2']) ? $meta['meta_x_pourquoi_2'] : ''); ?>
        <div class="glass-board why-ellen-description2">
          <div><?php echo hook('cms_html', hook('decodeRouteImage', array(preg_replace('#<h[0-6][^>]*>[^<]+</h[0-6]>#i', '', $content), 'medium'))); ?></div>
        <p class="marion">Marion</p>
        </div>

        <div class="background-image">
          <img src="static/images/why-ellen-scott.jpg" class="cimagex" alt="why ellen scott" />
        </div>
      </div>
    </div>
  </div>