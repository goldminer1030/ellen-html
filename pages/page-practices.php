	<div class="flotaison-maincontainer">
		<div class="entete">
			<div class="flotaison-container">
				<div class="textOver text0">
					expert / executive <br />
					<span class="subtitle">CARRER</span>
				</div>
				<div class="background-image">
					<img src="static/images/groupe.jpg" class="cimagex" />
				</div>
			</div>
		</div>
	</div>
	<div class="container">
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
				</div>
			</div>
		</div>

		<div class="row practices-list">
			<div class="col-sm-4">
				<div class="color1 vignette">
					<div class="content-vignette">
						<div class="content-vignette">
							executive
							<p class="carrer">CARRER</p>
						</div>
					</div>
				</div>
				<div class="vignette2">
					<img src="/static/images/executive.jpg"class="cimagex"/>
				</div>
			</div>

			<div class="col-sm-4">
				<div class="color2 vignette">
					<div class="content-vignette">
						finance
						<p class="carrer">CARRER</p>
					</div>
				</div>
				<div class="vignette2">
					<img src="/static/images/finances.jpg"class="cimagex"/>
				</div>
			</div>

			<div class="col-sm-4">
				<div class="color3 vignette">
					<div class="content-vignette">
						<div class="content-vignette">
							human
							<p class="carrer">CARRER</p>
						</div>
					</div>
				</div>
				<div class="vignette2">
					<img src="/static/images/human.jpg"class="cimagex"/>
				</div>
			</div>
		</div>
		<div class="row practices-list">
			<div class="col-sm-4">
				<div class="color4 vignette">
					<div class="content-vignette">
						supply chain engineering
						<p class="carrer">CARRER</p>
					</div>
				</div>
				<div class="vignette2">
					<img src="/static/images/supply.jpg"class="cimagex"/>
				</div>
			</div>

			<div class="col-sm-4">
				<div class="color5 vignette">
					<div class="content-vignette">
						information technologies
						<p class="carrer">CARRER</p>
					</div>
				</div>
				<div class="vignette2">
					<img src="/static/images/technologies.jpg"class="cimagex"/>
				</div>
			</div>

			<div class="col-sm-4">
				<div class="color6 vignette">
					<div class="content-vignette">
						business
						<p class="carrer">CARRER</p>
					</div>
				</div>
				<div class="vignette2">
					<img src="/static/images/business.jpg" class="cimagex" />
				</div>
			</div>
		</div>
	</div>
</div>
