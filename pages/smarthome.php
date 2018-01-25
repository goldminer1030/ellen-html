			<div class="smarthome">
				<?php if(isset($_GET['debug'])) { ?>
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
								<li><?php echo $practice->getNom(); ?></li>
								<?php } ?>
							</ul>
						</div>
					</div>
				</div>
				<?php } ?>
				<div class="smh-prez">
					<div class="row">
						<div class="col-sm-6">
							<div class="smh-box">
								<div class="smh-details">
									<a href="<?php echo hook('path_root').hook('search_theme_route_by_id', array('pages', 17)); ?>">
										<div class="smh-embed">
											<div class="smh-title"><span>réussir</span> A Smart Career</div>
											<div class="smh-label">Candidat</div>
										</div>
									</a>
								</div>
								<div class="smh-overlay-left"><i class="fa fa-angle-down fa-fw"></i></div>
								<div class="smh-bg-color large-div"><a href="<?php echo hook('path_root').hook('search_theme_route_by_id', array('pages', 17)); ?>"></a></div>
								<div class="smh-bg-gradient large-div"></div>
								<div class="smh-bg large-div">
									<img src="<?php echo hook('decodeRouteImage', array('@data@{23}', 'medium')); ?>" class="cimagex" alt="<?php echo hook('get_last_alt_image'); ?>" />
								</div>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="smh-box">
								<div class="smh-details">
									<a href="<?php echo hook('path_root').hook('search_theme_route_by_id', array('pages', 11)); ?>">
										<div class="smh-embed">
											<div class="smh-title"><span>recruter</span> A Smart Talent</div>
											<div class="smh-label">Employeur</div>
										</div>
									</a>
								</div>
								<div class="smh-overlay-right"><i class="fa fa-angle-down fa-fw"></i></div>
								<div class="smh-bg-color large-div"><a href="<?php echo hook('path_root').hook('search_theme_route_by_id', array('pages', 11)); ?>"></a></div>
								<div class="smh-bg-gradient large-div"></div>
								<div class="smh-bg large-div">
									<img src="<?php echo hook('decodeRouteImage', array('@data@{24}', 'large')); ?>" class="cimagex" alt="<?php echo hook('get_last_alt_image'); ?>" />
								</div>
							</div>
						</div>
					</div>
					<div class="clearbox"></div>
				</div>
			</div>
			<div class="smarthomebox">
				<div class="row">
					<div class="col-sm-6 box-candidat">
						<p>Que ce soit pour un projet à durée déterminée (<b>CDD</b>) ou indeterminée (<b>CDI</b>), le
						cabinet Ellen Scott Career est ravi de vous accompagner dans la gestion de votre
						smart career en tant qu'expert, middle ou top executive partout en France.</p>
					</div>
					<div class="col-sm-offset-6 col-sm-6 box-employeur">
						<p>La vocation d'Ellen Scott Career est d'accompagner, tout au long de la vie de l'entreprise,
						les actionnaires, les dirigeants et les comités de direction dans leur développement et leur
						transformation en apportant un rôle de <b>conseil en recrutement</b>.</p>
					</div>
				</div>
			</div>
