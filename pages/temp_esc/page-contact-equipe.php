	<div class="header-title-container">
		<div class="entete">
			<div class="flotaison-container">
				<div class="textOver text0">
					full
					<br />
					<span class="subtitle">contact</span>
				</div>
				<div class="background-image">
					<img src="static/images/contact.jpg" class="cimagex" alt="header title" />
				</div>
			</div>
		</div>
	</div>

	<div class="page-content bg-white">
		<div class="container">
			<div class="contact-header">
				<p class="contact-header-title">je souhaite<br><span class="subtitle">rejoindre la fine Équipe</span></p>
				<p class="contact-header-description">Vous souhaitez rejoindre la fine équipe et vous êtes actuellement en recherche d’un emploi. Nous serions très intéressés d’en savoir un peu plus sur vous.</p>
			</div>

			<div class="contact-content">
				<!-- Number 1 -->
				<p class="number-list gap-bottom-normal"><span class="number">1</span>Qui êtes-vous ?</p>
				
				<div class="row">
					<div class="col-md-8 gap-right-md gap-bottom-normal">
						<div class="row">
							<div class="col-md-6 gap-bottom-normal">
								<fieldset class="switch-buttons switch-button-extra gap-bottom-normal">
									<label for="mme">Mme</label>
									<input type="radio" name="mme" id="mme">
									<label for="m">M</label>
									<input type="radio" name="mme" id="m">
								</fieldset>
							</div>
							<div class="col-md-6 gap-left-md gap-bottom-normal">
								<div class="form-elem input-box">
									<input type="text" placeholder="statut" value="">
								</div>
							</div>
						</div><!-- ./row -->

						<div class="row">
							<div class="col-md-6 gap-right-md gap-bottom-normal">
								<div class="form-elem input-box">
									<input type="text" placeholder="nom*" value="" required>
								</div>
							</div>
							<div class="col-md-6 gap-left-md gap-bottom-normal">
								<div class="form-elem input-box">
									<input type="text" placeholder="prénom*" value="" required>
								</div>
							</div>
						</div><!-- ./row -->

						<div class="row">
							<div class="col-md-6 gap-right-md gap-bottom-normal">
								<div class="form-elem input-box">
									<input type="text" placeholder="mail*" value="" required>
								</div>
							</div>
							<div class="col-md-6 gap-left-md gap-bottom-normal">
								<div class="form-elem input-box">
									<input type="text" placeholder="téléphone*" value="" required>
								</div>
							</div>
						</div><!-- ./row -->
					</div>

					<div class="col-md-4 gap-left-md gap-bottom-normal">
						<div class="department-location bg-dark-red text-center">
							<p class="location-title gap-bottom-normal">localisation actuelle</p>
							
							<div id="map-holder"></div>
							<div class="form-elem input-box">
								<input type="text" placeholder="département" value="">
							</div>
							<div class="form-elem input-box">
								<input type="text" placeholder="code postal" value="">
							</div>
						</div>
					</div>

				</div><!-- ./row -->
				
				<!-- Number 2 -->
				<p class="number-list gap-bottom-normal">
					<span class="number">2</span>Quelles sont vos expertises :
				</p>

				<div class="row gap-bottom-lg">
					<div class="col-sm-12 col-md-4 gap-right-md-small gap-bottom-normal">
						<div class="sub-featured gap-bottom-normal">
							<p class="featured-title gap-top-small">executive<br />
								<span class="subtitle">Career</span>
							</p>
							<div class="featured-image">
								<img src="static/images/executive.jpg" class="cimagex" alt="featured image" />
							</div>
							<div class="overlay"></div>
						</div>

						<div class="sub-featured">
							<p class="featured-title">supply chain
								<br />engineering<br />
								<span class="subtitle">Career</span>
							</p>
							<div class="featured-image">
								<img src="static/images/supply.jpg" class="cimagex" alt="featured image" />
							</div>
							<div class="overlay"></div>
						</div>
					</div>

					<div class="col-sm-12 col-md-4 gap-md-small gap-bottom-normal">
						<div class="featured">
							<p class="featured-title gap-top-small gap-bottom-lg">finance
								<br />
								<span class="subtitle">Career</span>
							</p>
							<div class="featured-image">
								<img src="static/images/finances.jpg" class="cimagex" alt="featured image" />
							</div>
							<a class="featured-button gap-bottom-small">poste recherché</a>
							<a class="featured-button">localisation recherchée</a>
							<div class="overlay"></div>
						</div>
					</div>

					<div class="col-sm-12 col-md-4 gap-left-md-small gap-bottom-normal">
						<div class="sub-featured gap-bottom-normal">
							<p class="featured-title gap-top-small">human
								<br />
								<span class="subtitle">Career</span>
							</p>
							<div class="featured-image">
								<img src="static/images/human.jpg" class="cimagex" alt="featured image" />
							</div>
							<div class="overlay"></div>
						</div>

						<div class="sub-featured">
							<p class="featured-title gap-top-small">business
								<br />
								<span class="subtitle">Career</span>
							</p>
							<div class="featured-image">
								<img src="static/images/business.jpg" class="cimagex" alt="featured image" />
							</div>
							<div class="overlay"></div>
						</div>
					</div>
				</div><!-- ./row -->
				
				<!-- Number 3 -->
				<p class="number-list gap-bottom-normal">
					<span class="number">3</span>Quel est votre salaire actuel ?
				</p>

				<div class="row gap-bottom-normal">
					<div class="col-md-4 text-md-right gap-right-md">
						<p class="my-salary text-md-right">Mon salaire est de</span>
					</div>
					<div class="col-md-4 text-center">
						<div class="form-elem select-box full-width">
							<select class="custom">
								<option>10K - 20K</option>
								<option value="1">20K - 30K</option>
								<option value="2">30K - 40K</option>
								<option value="3">40K - 50K</option>
								<option value="4">50K - 60K</option>
								<option value="5">60K - 70K</option>
							</select>
						</div>
					</div>
					<div class="col-md-4 text-md-left gap-left-md">
						<p class="my-salary">par an.</span>
					</div>
				</div><!-- ./row -->
				
				<!-- Number 4 -->
				<p class="number-list gap-bottom-normal">
					<span class="number">4</span>Pourquoi voulez-vous rejoindre la fine équipe d’Ellen Scott Career ?
				</p>
				
				<div class="form-elem textarea-box gap-bottom-lg">
					<textarea rows="5" placeholder="Détail sur le poste, le profil recherché, les enjeux et contexte du poste..."></textarea>
				</div>
				
				<!-- Number 5 -->
				<p class="number-list gap-bottom-normal">
					<span class="number">5</span>Téléchargez votre cv<span class="highlight">*</span>
				</p>

				<div class="row gap-bottom-normal">
					<div class="col-md-6 text-md-right text-sm-center gap-right-md gap-bottom-normal">
						<p class="inputfile-descrption">Joindre le fichier word / pdf :</p>
						<div class="form-elem input-file">
							<input type="file" name="file" id="file" class="inputfile" />
							<label for="file">télécharger</label>
						</div>
					</div>
					<div class="col-md-6 gap-left-md text-sm-center gap-bottom-normal">
						<p class="inputfile-descrption">Télécharger son CV Linkedin</p>
						<div class="form-elem input-file input-file-dark">
							<input type="file" name="file" id="file" class="inputfile" />
							<label for="file">se connecter</label>
						</div>
					</div>
				</div><!-- ./row -->
				
				<div class="text-center">
				</div>

				<div class="form-elem check-box check-primary">
					<div class="elem-wrap">
						<input type="checkbox" id="checkbox-check-primary" checked="">
						<label for="checkbox-check-primary"></label>
					</div>
					<label class="text-checked" for="checkbox-check-primary">J'accepte de recevoir des e-mail de la part d’Ellen Scott Career</label>
				</div>
				
				<div class="form-elem check-box check-primary">
					<div class="elem-wrap">
						<input type="checkbox" id="checkbox-check-primary" checked="">
						<label for="checkbox-check-primary"></label>
					</div>
					<label class="text-checked" for="checkbox-check-primary">J'ai lu et j'accepte les <a href="">conditions générales d'utilisation</a></label>
				</div>

				<p class="required-description gap-bottom-lg"><span class="highlight">*</span>Champs obligatoires</p>
				
				<div class="text-center gap-bottom-lg">
					<div class="form-elem form-submit gap-bottom-lg">
						<input type="submit" value="envoyer">
					</div>
				</div>
			</div>
		</div>

		<div class="google-map">
			<div class="gmap-container" id="gmap"></div>

			<div class="smc-info">
				<h3>Adresse</h3>
				<div class="smc-address">
					9, rue Pierre Brossolette
					<br> 92300 Levallois-Perret
				</div>
				<hr>
				<div class="row">
					<div class="col-xs-4">
						<a href="" data-toggle="tooltip" title="Métro ligne 3">
							<span class="fico fico-geo fico-trois"></span>
						</a>
					</div>
					<div class="col-xs-4">
						<a href="" data-toggle="tooltip" title="Transilien ligne L">
							<span class="fico fico-geo fico-l"></span>
						</a>
					</div>
					<div class="col-xs-4">
						<a href="" data-toggle="tooltip" title="Parking Marjolin">
							<span class="fico fico-geo fico-p"></span>
						</a>
					</div>
				</div>
				<hr>
				<h3>Téléphone</h3>
				<div class="smc-phone">
					+33 6 58 29 70 94
				</div>
				<hr>
				<h3>Email</h3>
				<div class="smc-email">
					smartcareer@ellenscottcareer.com
				</div>
			</div>
		</div>
	</div>