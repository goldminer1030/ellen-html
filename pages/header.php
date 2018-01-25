			<div id='overlayMenu'>
				<div class='closeMenu'><img src="/static/images/CloseMenu.png"></div>
				<div class ='centerMenu'>
					<div class = 'logoMenu'>
						<img src="/static/images/ESCLogo.png">
					</div>
					<div class= 'contMenu'>
						<div class= 'contMenuIn'>
							<a class="contactUs" href="<?php echo hook('path_root').hook('search_theme_route_by_id', array('pages', 16)); ?>" class='elemMenu'><strong>Contactez-nous</strong> <i class="fa fa-envelope-o fa-fw"></i></a>
							
							<ul class = 'mainMenu'>
								<li><a href="<?php echo hook('path_root'); ?>" class='elemMenu'>Bienvenue</a></li>
								<li>
									<a href="<?php echo hook('path_root').hook('search_theme_route_by_id', array('pages', 4)); ?>" class='elemMenu'>Expertises métiers</a>
									<?php if(isset($_GET['debug'])) { ?>
									<ul class = 'subMenu'>
										<?php
										// Liste des practices
										$i = 0;
										foreach($listPractices as $practice) { $i++;
											// Link
											$link = hook('path_root').hook('search_theme_route_by_id', array($practice, $practice->getId()));
										?>
										<li><a href="<?php echo $link; ?>"><?php echo $practice->getNom(); ?></a><?php echo ($i < count($listPractices) ? ' /' : ''); ?></li>
										<?php } ?>
									</ul> <?php } ?>
								</li>
								<li><a href="<?php echo hook('path_root').hook('search_theme_route_by_id', array('pages', 17)); ?>" class='elemMenu'>Candidat</a></li>
								<li><a href="<?php echo hook('path_root').hook('search_theme_route_by_id', array('pages', 11)); ?>" class='elemMenu'>Employeur</a></li>
								<li><a href="<?php echo hook('path_root').hook('search_theme_route_by_id', array('pages', 5)); ?>" class='elemMenu'>Qui sommes-nous ?</a></li>
								<li><a href="<?php echo hook('path_root').hook('search_theme_route_by_id', array('pages', 18)); ?>" class='elemMenu'>La lettre d'Ellen</a></li>
							</ul>

						</div>
					</div>
				</div>
			</div>

			<div class="container-fluid">
				<a href="<?php echo hook('path_root'); ?>" class="logo">
					<?php
					if (strpos(hook('get_call'), 'practices/') !== false) {
						$urlSplited = explode("/", hook('get_call'));
						$post = hook('macro', '$:/view/post');
						echo '<div class="logo-pratice-title"><span class="esc-practice-'.$post->getId().'-color">'.$post->getNom().'</span> Career</div>';
					}
					?>
					<h1>Ellen Scott Career</h1>
					<img src="<?php echo hook('decodeRouteImage', array('@data@{16}', 'large')); ?>" alt="<?php echo hook('get_last_alt_image'); ?>"/>
				</a>
				<div class="slogan">
					<h2><?php echo Tools::strFormat(Registre::get('seo_header_titre'), 'AB'); ?></h2>
				</div>
				<div class="btnMenu">
					<img src="<?php echo hook('decodeRouteImage', array('@data@{22}', 'large')); ?>" alt="<?php echo hook('get_last_alt_image'); ?>"/>
					Menu
				</div>

				<?php if(isset($_GET['debug'])) { ?>
				<div class="boxDynMenu">
					<div>
						<div class="ecd-black-bg">Video</div>
						<div class="ecd-white-bg">Approche Globale</div>
					</div>
					<div>
						<div class="ecd-white-bg">Carrière</div>
						<div class="ecd-red-bg">Contact</div>
					</div>
				</div>
				<?php } ?>
				<div class="btnUpPage">
					<a href="<?php echo hook('path_root').'contact'; ?>" class="practices-send-msg">
						<img src="<?php echo hook('decodeRouteImage', array('@data@{43}', 'small')); ?>" class="cimagex" alt="<?php echo hook('get_last_alt_image'); ?>" />
					</a>
					<button type="button">
						<span class="btnUpArrow"><i class="fa fa-angle-up fa-fw"></i></span>
						<div class="btnUpText">Haut <span>de</span><br/>page</div>
					</button>
				</div>
				
				
			</div>


