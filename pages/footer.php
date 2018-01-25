				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-3">
							<a href="<?php echo hook('path_root').hook('search_theme_route_by_id', array('pages', 5)); ?>" class="noStyle">
								<div class="qmark <?php echo (hook('macro', '$:/var/color') ? 'esc-practice-'.hook('macro', '$:/var/color').'-color' : ''); ?>">?</div>
								<div class="qmark-label">Ellen Scott Career</div>
							</a>
						</div>
						<div class="col-xs-6">
							<div class="protection">
								<a href="<?php echo hook('path_root').'mentions-legales'; ?>">Mentions légales</a>
								/ <a href="<?php echo hook('path_root').'protection-des-donnees'; ?>">Protection des données personnelles</a>
								<br/>
								<a href="<?php echo hook('path_root').'cgu'; ?>">Conditions générales d'utilisation</a>
								<?php if(isset($_GET['debug'])) { ?>/ <a href="<?php echo hook('path_root').'my-smart-career'; ?>">SIRH My Smart Career</a><?php } ?>
							</div>
							<div class="copyright">
								Ellen Scott Career @ 2017 All Rights Reserved.<br/>
								Cabinet de conseil en recrutement
							</div>
						</div>
						<div class="col-xs-3 default-cursor">
							<div class="follow">
								<?php if(Registre::get('linkedin')) { ?><a href="<?php echo Registre::get('linkedin'); ?>" target="_blank" class="fico fico-follow fico-linkedin"></a><?php } ?>
								<?php if(Registre::get('facebook')) { ?><a href="<?php echo Registre::get('facebook'); ?>" target="_blank" class="fico fico-follow fico-facebook"></a><?php } ?>
								<?php if(Registre::get('twitter')) { ?><a href="<?php echo Registre::get('twitter'); ?>" target="_blank" class="fico fico-follow fico-twitter"></a><?php } ?>
								<?php if(Registre::get('googleplus')) { ?><a href="<?php echo Registre::get('googleplus'); ?>" target="_blank" class="fico fico-follow fico-googleplus"></a><?php } ?>
							</div>
							<?php if(isset($_GET['debug'])) { ?><div class="lang"><a href="<?php echo hook('path_root'); ?>" class="active<?php echo (hook('macro','$:/var/color') ? ' esc-practice-'.hook('macro','$:/var/color').'-color' : ''); ?>">FR</a> / <a href="<?php echo hook('path_root').'en/'; ?>" rel="nofollow">EN</a></div><?php } ?>
						</div>
					</div>
				</div>