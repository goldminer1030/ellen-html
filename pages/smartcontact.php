			<div class="smartcontact">
				<div class="smc-contact-zone">
					<h2>Contact</h2>
					<?php
					$itemSelect = (int)EllenScottHook::BOOL_DEFAULT_CHOIX_CONTACT;
					$listSelect = EllenScottHook::ENUM_CHOIX_CONTACT;
					$itemSelect %= count($listSelect);
					?>
					<form method="POST" action="<?php echo hook('path_root').hook('search_theme_route_by_id', array('pages', 16)); ?>">
						<div class="smc-exchange">
							Je souhaite échanger avec Ellen concernant
							<div class="smc-selection">
								<span>
									<span><?php echo $listSelect[$itemSelect]; ?></span>
									<ul>
									<?php foreach($listSelect as $item) { ?>
										<li <?php echo ($listSelect[$itemSelect] == $item ? 'class="active"':''); ?>><?php echo $item; ?></li>
									<?php } ?>
									</ul>
								</span>
								<button><img src="<?php echo hook('path_root'); ?>static/images/small-go-cheval.png" alt="<?php echo hook('get_last_alt_image'); ?>" /></button>
								<input type="text" class="hide" name="smcMethod" value="<?php echo $listSelect[$itemSelect]; ?>"/>
							</div>
						</div>
					</form>
				</div>
				<div class="smc-info">
					<h3>Adresse</h3>
					<div class="smc-address">
						9, rue Pierre Brossolette<br/>
						92300 Levallois-Perret
					</div>
					<hr/>
					<div class="row">
						<div class="col-xs-4">
							<a href="https://www.ratp.fr/itineraires/" target="_blank" data-toggle="tooltip" title="Métro ligne 3"><span class="fico fico-geo fico-trois"></span></a>
						</div>
						<div class="col-xs-4">
							<a href="https://transilien.mobi/itineraire" target="_blank" data-toggle="tooltip" title="Transilien ligne L"><span class="fico fico-geo fico-l"></span></a>
						</div>
						<div class="col-xs-4">
							<a data-toggle="tooltip" title="Parking Marjolin"><span class="fico fico-geo fico-p"></span></a>
						</div>
					</div>
					<hr/>
					<h3>Téléphone</h3>
					<div class="smc-phone">
						+33 6 58 29 70 94
					</div>
					<hr/>
					<h3>Email</h3>
					<div class="smc-email">
						smartcareer@ellenscottcareer.com
					</div>
				</div>
				<div class="smc-bg">
					<div class="gmap-container" id="gmap"></div>
				</div>
			</div>
