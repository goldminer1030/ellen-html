<?php
$itemSelect = 0;
$listSelect = array('Expert','Executive');
$itemSelect %= count($listSelect);
?>
			<div class="aboutellen">
				<h2>We are Ellen Scott <span>Expert</span> Career</h2>
				<div class="abe-select-career hide">
					<ul>
					<?php foreach($listSelect as $item) { ?>
						<li<?php echo ($listSelect[$itemSelect] == $item ? ' class="active"' : ''); ?>><?php echo $item; ?></li>
					<?php } ?>
					</ul>
				</div>
				<div class="container-fluid">
					<div class="row">
						<div class="col-sm-4">
							<div class="jobox">
								<div class="jobox-title">Passez votre CV dans la</div>
								<div class="jobox-bg">
									<img src="<?php echo hook('decodeRouteImage', array('@data@{39}', 'large')); ?>" class="cimagex" alt="<?php echo hook('get_last_alt_image'); ?>" />
								</div>
								<div class="jobox-details">L'algorithme de matching analyse votre CV afin de vous proposer l'offre d'emploi qui vous correspond le mieux.</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="abe-approches">
								<div class="abe-marques">
									<p>
										<span>#</span>2marques<br/>
										<span>#</span>2approches
									</p>
								</div>
								<p>
									Le succès de ces deux marques se caractérise
									par la mise en place d'un partenariat mettant en
									avant :
								</p>
								<p>
									- L'<strong>expertise métier</strong> d'Ellen Scott Career
									(Cabinet de conseil en recrutement)
								</p>
								<p>
									- Le <strong>savoir faire opérationnel</strong> du cabinet
									de conseil en stratégie avec lequel le cabinet Ellen Scott
									s'est associé.
								</p>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="abe-remun">
								<div class="abe-remun-title">Découvrez notre <strong>étude de rémunérations</strong> par expertise métiers</div>
								<div class="abe-remun-content">
									<div class="abe-input">
										<i class="fa fa-user fa-fw"></i>
										<input type="text" name="" placeholder="Intitulé du poste" />
									</div>
									<div class="abe-input">
										<i class="fa fa-suitcase fa-fw"></i>
										<input type="text" name="" placeholder="Practice métiers" />
									</div>
									<button>Rémunérations</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
