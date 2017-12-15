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
								$listPractices = hook('get_custom_post', array('practices', 'view_all_post'));
								foreach($listPractices as $practice) {
									if($practice->getLevel() == 1) {
								?>
								<li><?php echo $practice->getNom(); ?></li>
								<?php }} ?>
							</ul>
						</div>
					</div>
				</div>
				<div class="smh-prez">
					<div class="row">
						<div class="col-sm-6">
							<div class="smh-box">
								<div class="smh-details">
									<div class="smh-embed">
										<div class="smh-title"><span>réussir</span> A Smart Career</div>
										<div class="smh-label">Candidat</div>
									</div>
								</div>
								<div class="smh-overlay-right"><i class="fa fa-angle-down fa-fw"></i></div>
								<div class="smh-bg-color ecd-red-bg-alpha-hover large-div"></div>
								<div class="smh-bg-gradient large-div"></div>
								<div class="smh-bg large-div">
									<img src="<?php echo hook('decodeRouteImage', array('@data@{23}', 'medium')); ?>" class="cimagex" alt="<?php echo hook('get_last_alt_image'); ?>" />
								</div>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="smh-box">
								<div class="smh-details">
									<div class="smh-embed">
										<div class="smh-title"><span>recruter</span> A Smart Talent</div>
										<div class="smh-label">Employeur</div>
									</div>
								</div>
								<div class="smh-overlay-right"><i class="fa fa-angle-down fa-fw"></i></div>
								<div class="smh-bg-color ecd-red-bg-alpha-hover large-div"></div>
								<div class="smh-bg-gradient large-div"></div>
								<div class="smh-bg large-div">
									<img src="<?php echo hook('decodeRouteImage', array('@data@{24}', 'large')); ?>" class="cimagex" alt="<?php echo hook('get_last_alt_image'); ?>" />
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
