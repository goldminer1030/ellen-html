<?php
$post = hook('macro', '$:/view/post');
?>
	<div class="header-title-container">
		<div class="entete">
			<div class="flotaison-container">
				<div class="textOver text0">
					expert / executive <br />
					<span class="subtitle">CAREER</span>
				</div>
				<div class="background-image">
					<img src="<?php echo hook('decodeRouteImage', array($post->getThemePicture(), 'large')); ?>" class="cimagex" alt="header title" alt="<?php echo hook('get_last_alt_image'); ?>" />
				</div>
			</div>
		</div>
	</div>
	<div class="page-practices">
		<div class="container">

			<?php if(isset($_GET['debug'])) { ?>
			<div class="row smartsearch">
				<div class="col-sm-12">
					<div class="smarthome">
						<div class="smh-search">
							<div class="smh-embed">
								<div class="smh-search-textbox">
									<form method="POST">
										<div class="smh-input">
											<i class="fa fa-user fa-fw ecd-red-text"></i>
											<input type="text" class="ecd-red-text" name="" placeholder="Poste recherché" />
										</div>
										<div class="smh-input">
											<i class="fa fa-map-marker fa-fw ecd-red-text"></i>
											<input type="text" class="ecd-red-text" name="" placeholder="Régions, Département ..." />
										</div>
										<button>Rechercher</button>
									</form>
								</div>
								<div class="smh-search-links">
									<div class="smh-search-left">
										<a href="">Nos offres par practice <i class="fa fa-angle-down fa-fw"></i></a>
									</div>
									<div class="smh-search-right">
										<a href="">Je m'inscris</a>
										<a href="">Espace Candidat</a>
										<a href="">Espace Client</a>
									</div>
								</div>
								<div class="smh-search-practices">
									<ul>
										<?php
										/* Liste des practices */
										foreach($listPractices as $practice) {
										?>
										<li><a href=""><?php echo $practice->getNom(); ?></a></li>
										<?php } ?>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php } ?>

			<div class="row practices-list">
			<?php
			/* Liste des practices */
			foreach($listPractices as $practice) {
				/* Link */
				$link = hook('path_root').hook('search_theme_route_by_id', array($practice, $practice->getId()));
			?>
				<div class="col-sm-4">
					<a href="<?php echo $link; ?>" class="prc-picture">
						<div class="prc-label">
							<?php if ($practice->getId() == 3) { echo 'Executive Career'; } else { echo 'Expert Career'; } ?>
						</div>
						<div class="prc-picture-zone">
							<div class="prc-picture-content">
								<div class="prc-name"><?php echo Tools::strFormat($practice->getNom(), 'ab'); ?></div>
								<div class="prc-career">Career</div>
							</div>
						</div>
						<div class="prc-picture-layer esc-practice-<?php echo $practice->getId(); ?>-bg-opm"></div>
						<div class="prc-picture-bg">
							<img src="<?php echo hook('decodeRouteImage', array($practice->getCover(), 'small')); ?>" class="cimagex" alt="<?php echo hook('get_last_alt_image'); ?>" />
						</div>
					</a>
				</div>
			<?php } ?>
			</div>
		</div>
	</div>
</div>
