<?php
$post = hook('macro', '$:/view/post');
$meta = hook('get_all_meta_post', $post->getId());
?>
  <div class="header-title-container">
		<div class="entete">
			<div class="flotaison-container">
				<div class="textOver text0">
          cheval <br />
					<span class="subtitle">de course</span>
				</div>
				<div class="background-image">
					<img src="static/images/employeur.jpg" class="cimagex" alt="header title"/>
				</div>
			</div>
		</div>
  </div>

  <?php if(isset($_GET['debug'])) { ?>
  <div class="blog-topbar-links">
    <a href="">Je m'inscris</a>
    <a href="">Espace Client</a>
  </div>
  <?php } ?>

  <div class="blog-page-content bg-white">
    <div class="container">
      <!-- Breadcrumb -->
      <?php echo hook('get_fil_ariane'); ?>
    </div>

    <!-- Employer Info -->
    <div class="employer-info">
      <div class="employer-info-left"><?php echo hook('cms_html', hook('decodeRouteImage', array($post->getContent(), 'medium'))); ?></div>
      <div class="employer-info-right"><?php echo hook('cms_html', hook('decodeRouteImage', array((isset($meta['meta_x_2']) ? $meta['meta_x_2'] : ''), 'medium'))); ?></div>
    </div>

    <!-- Compensation Study -->
    <?php if(isset($_GET['debug'])) { ?>
    <div class="compensation">
      <p class="compensation-study">Voir notre étude de rémunérations</p>
      
      <div class="container abe-remun">
        <div class="row abe-remun-content">
          <div class="col-md-4 gap-right-md-small">
            <div class="abe-input">
              <i class="fa fa-suitcase fa-fw"></i>
              <input type="text" name="" placeholder="Practice métiers" />
            </div>
          </div>
          <div class="col-md-4 gap-md-small">
            <div class="abe-input">
              <i class="fa fa-user fa-fw"></i>
              <input type="text" name="" placeholder="Intitulé du poste" />
            </div>
          </div>
          <div class="col-md-4 gap-left-md-small gap-top-small">
            <button>Rémunérations</button>
          </div>
        </div>
      </div>
    </div>
    <?php } ?>

    <!-- Are You Ellen Scott -->
    <div class="career-timeline-container">
      <div class="container">
        <div class="career-timeline">
          <div class="career-timeline">
            <span data-esc-timeline="1"></span>
            <span data-esc-timeline="2"></span>
          </div>

          <p class="are-you-ellen">Are you Ellen Scott</p>

          <div class="executive-career">
			<a href="<?php echo hook('path_root').hook('search_theme_route_by_id', array('pages', 4)); ?>">
				<p class="executive-career-title" data-esc-timeline="1">Executive Career</p>
				<p class="executive-career-details">Recrutement par approche directe sur des postes de direction générale et de direction opérationnelle/fonctionnelle :</p>
			</a>
			<ul class="career-lists-executive">
			<?php
			foreach($listPractices as $practice) {
			if ($practice->getId() == 3) {
			$link = hook('path_root').hook('search_theme_route_by_id', array($practice, $practice->getId()));
			?>
			<li><a href="<?php echo $link; ?>" class="esc-practice-<?php echo $practice->getId(); ?>-colorh"><?php echo $practice->getNom(); ?> Career</a></li>
			<?php } } ?>
			</ul>
          </div>

          <div class="expert-career">
			<a href="<?php echo hook('path_root').hook('search_theme_route_by_id', array('pages', 4)); ?>">
				<p class="expert-career-title" data-esc-timeline="2">Expert Career</p>
				<p class="expert-career-details">Recrutement par approche mixte d’experts et cadres confirmés au travers des expertises métiers suivantes :</p>
			</a>
          </div>

<?php /*
          <div class="color-code-wrapper">
            <img src="static/images/timeline-arrow.png" alt="timeline arrow" />
            <span class="color-code">code couleur rose si selectionné</span>
          </div>

          <div class="alternate-wrapper">
            <img src="static/images/timeline-arrow.png" class="timeline-arrow" alt="timeline arrow" />
            <img src="static/images/timeline-circle.png" alt="alternate" />
            <span class="alternate">alterner</span>
          </div>
*/ ?>

          <ul class="career-lists">
            <?php
			foreach($listPractices as $practice) {
				if ($practice->getId() != 3) {
				$link = hook('path_root').hook('search_theme_route_by_id', array($practice, $practice->getId()));
			?>
            <li><a href="<?php echo $link; ?>" class="esc-practice-<?php echo $practice->getId(); ?>-colorh"><?php echo $practice->getNom(); ?> Career</a></li>
				<?php } } ?>
          </ul>
          <p class="question-mark">?</p>
        </div>
      </div>
    </div>

    <!-- Our Apporach -->
    <p class="our-approach">Notre démarche</p>

    <div class="row cards">
      <?php
      for($i=1; $i <= 6; $i++) {
        $content = (isset($meta['meta_x_demarche_'.$i]) ? $meta['meta_x_demarche_'.$i] : '');
      ?>
      <div class="col-sm-6 col-md-4 card <?php echo (!($i%2) ? 'bg-black' : 'bg-white'); ?>">
        <p class="card-title"><?php if(preg_match('#<h[0-6][^>]*>([0-9]+)[^<]+</h1>#i', $content, $regex)) { echo $regex[1]; } ?></p>
        <p class="card-details"><?php if(preg_match('#<h[0-6][^>]*>[0-9]+ ?([^<]+)</h1>#i', $content, $regex)) { echo $regex[1]; } ?></p>
        <div class="overlay black-overlay">
          <div class="overlay-wrapper">
            <span class="overlay-text"><?php echo hook('cms_html', hook('decodeRouteImage', array(preg_replace('#<h[0-6][^>]*>[^<]+</h[0-6]>#i', '', $content), 'medium'))); ?></span>
          </div>
        </div>
      </div>
      <?php } ?>
    </div>

    <!-- Ellen is Commit you -->
	<p class="our-engagements">Nos engagements</p>
    <div class="ellen-commit-container">
      <div class="ellen-commit">
        <p class="ellen-commit-details">Ellen <span class="color-dark">s'engage</p>
        <p class="ellen-commit-title">avec vous !</p>
      </div>

      <div class="methodology">
        <p class="methodology-title">Méthodologie</p>
        <p class="methodology-details">exhaustive et rigoureuse d’évaluation et de sélection</p>
      </div>

      <div class="engagement">
        <p class="engagement-title">Engagement</p>
        <p class="engagement-details">de confidentialité et de déontologie</p>
      </div>

      <div class="respect">
        <p class="respect-title">Respect</p>
        <p class="respect-details">de l'égalité des chances et de</p>
        <p class="respect-details-big">la <span class="color-white">diversité</span></p>
      </div>

      <div class="relation">
        <p class="relation-title">Relation</p>
        <p class="relation-details">de long terme</p>
      </div>

      <div class="guarantee">
        <p class="guarantee-details">Nombre limité de mandats de recherche en simultané</p>
        <p class="guarantee-title">garantissant une démarche qualité</p>
      </div>

      <div class="measured">
        <p class="measured-details">Approche sur</p>
        <p class="measured-title">mesure</p>
      </div>

      <div class="feedback">
        <p class="feedback-details">Feedback</p>
        <p class="feedback-title">clair <span class="color-dark">et</span> régulier</p>
      </div>
    </div>
  </div>