<?php
$post = hook('macro', '$:/view/post');
?>
	<div class="header-title-container">
		<div class="entete">
			<div class="flotaison-container">
				<div class="textOver text0">
					la lettre <br />
					<span class="subtitle">d'ellen</span>
				</div>
				<div class="background-image">
					<img src="<?php echo hook('decodeRouteImage', array('@data@{46}', 'large')); ?>" class="cimagex" alt="header title"/>
				</div>
			</div>
		</div>
	</div>
	
	<?php if(isset($_GET['debug'])) { ?>
	<div class="blog-topbar-links">
		<a href="">Je m'inscris</a>
		<a href="">Espace Candidat</a>
		<a href="">Espace Client</a>
	</div>
	<?php } ?>

	<div class="blog-page-content bg-white">
		<div class="container">
			<!-- Breadcrumb -->
			<?php echo hook('get_fil_ariane'); ?>

			<!-- Intro -->
			<div class="row text-center">
				<div class="col-sm-12 col-md-2"></div>
				<div class="col-sm-12 col-md-8 blog-intro">
					<?php echo hook('cms_html', hook('decodeRouteImage', array($post->getContent(), 'medium'))); ?>
				</div>
			</div>

			<!-- Blog Categories -->
			<ul class="nav navbar-nav blog-categories">
				<li class="active" data-id="0">
					<a href="#home">TOUS LES ARTICLES</a>
				</li>
				<?php foreach($listPractices as $practice) { ?>
				<li data-id="<?php echo $practice->getId(); ?>">
					<a href="#<?php echo Tools::slug($practice->getNom()); ?>"><?php echo Tools::strFormat($practice->getNom(), 'AB'); ?></a>
				</li>
				<?php } ?>
			</ul>

			<!-- Blogs -->
			<?php
			global $PracticesManager;
			$listArticles = hook('get_custom_post', array('articles', 'view_all_post_enable'));
			foreach($listArticles as $article) {
				/* Practice */
				$practice = null;
				if($article->getParent()) {
					$practice = $PracticesManager->queryById($article->getParent());
					if(!$practice) { $practice = null; }
				}
				/* Link */
				$link = hook('path_root').hook('search_theme_route_by_id', array('articles', $article->getId()));
			?>
			<div class="blog-item anim-hidemode" data-id-parent="<?php echo $article->getParent(); ?>">

				<div class="blog-image">
					<img src="<?php echo hook('decodeRouteImage', array($article->getThemePicture(), 'small')); ?>" class="cimagex" alt="blog image" />
					<p class="blog-item-category esc-practice-<?php echo $article->getParent(); ?>-bg"><?php echo (!is_null($practice) ? $practice->getNom() : ''); ?></p>
					<p class="blog-item-title"><?php echo $article->getTitle(); ?></p>
				</div>

				<div class="clearfix blog-content">
					<div class="blog-date-wrapper">
						<p class="blog-day-month"><?php echo date('d/m', strtotime($article->getDateCreation())); ?></p>
						<p class="blog-year"><?php echo date('Y', strtotime($article->getDateCreation())); ?></p>
					</div>
					<div class="blog-content-wrapper">
						<?php echo TruncateHTML::run(html_entity_decode(hook('cms_html', $article->getContent())), 800, '...'); ?>
					</div>
				</div>

				<div class="blog-button-wrapper">
					<a class="btn btn-share" target="_blank" href="http://www.facebook.com/sharer.php?u=<?php echo $link; ?>">Partager</a>
					<a class="btn btn-read" href="<?php echo $link; ?>">Lire</a>
				</div>
			</div>
			<?php } ?>
			
		</div>
	</div>