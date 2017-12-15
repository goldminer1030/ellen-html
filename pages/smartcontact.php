			<div class="smartcontact">
				<div class="smc-contact-zone">
					<h2>Contact</h2>
					<?php
					$itemSelect = 1;
					$listSelect = array(
						'Ma candidature',
						'Mon besoin en recrutement',
						'Un conseil en recrutement'
					);
					$itemSelect %= count($listSelect);
					?>
					<form method="POST">
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
								<button>Go</button>
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
							<a href="" data-toggle="tooltip" title="Métro ligne 3"><span class="fico fico-geo fico-trois"></span></a>
						</div>
						<div class="col-xs-4">
							<a href="" data-toggle="tooltip" title="Transilien ligne L"><span class="fico fico-geo fico-l"></span></a>
						</div>
						<div class="col-xs-4">
							<a href="" data-toggle="tooltip" title="Parking Marjolin"><span class="fico fico-geo fico-p"></span></a>
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
					<img src="<?php echo hook('decodeRouteImage', array('@data@{15}', 'large')); ?>" alt="<?php echo hook('get_last_alt_image'); ?>" />
				</div>
			</div>
