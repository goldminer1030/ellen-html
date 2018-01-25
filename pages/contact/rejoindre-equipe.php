					<div class="contact-header">
						<p class="contact-header-title">je souhaite<br><span class="subtitle">rejoindre la fine Équipe</span></p>
						<p class="contact-header-description">Vous souhaitez rejoindre la fine équipe et vous êtes actuellement en recherche d’un emploi. Nous serions très intéressés d’en savoir un peu plus sur vous.</p>
					</div>

					<div class="contact-content">
						<!-- Number 1 -->
						<p class="number-list gap-bottom-normal"><span class="number">1</span>Qui êtes-vous ?</p>
						
						<div class="row">
							<div class="col-md-12 gap-bottom-normal">
								<fieldset class="switch-buttons switch-button-extra gap-bottom-normal">
									<label for="smc-whos-mme">Mme</label>
									<input type="radio" name="civilite" value="f" id="smc-whos-mme"<?php echo (Tools::queryData('civilite', 'POST') == 'f' ? ' checked' : ''); ?>>
									<label for="smc-whos-m">M.</label>
									<input type="radio" name="civilite" value="h" id="smc-whos-m"<?php echo (Tools::queryData('civilite', 'POST') == 'h' ? ' checked' : ''); ?>>
								</fieldset>
							</div>
						</div><!-- ./row -->

						<div class="row">
							<div class="col-md-6 gap-right-md gap-bottom-normal">
								<div class="form-elem input-box">
									<input type="text" placeholder="nom*" name="nom" value="<?php echo Tools::queryData('nom', 'POST'); ?>" autocomplete="off" required>
								</div>
							</div>
							<div class="col-md-6 gap-left-md gap-bottom-normal">
								<div class="form-elem input-box">
									<input type="text" placeholder="prénom*" name="prenom" value="<?php echo Tools::queryData('prenom', 'POST'); ?>" autocomplete="off" required>
								</div>
							</div>
						</div><!-- ./row -->

						<div class="row">
							<div class="col-md-6 gap-right-md gap-bottom-normal">
								<div class="form-elem input-box">
									<input type="text" placeholder="adresse email*" name="email" value="<?php echo Tools::queryData('email', 'POST'); ?>" autocomplete="off" required>
								</div>
							</div>
							<div class="col-md-6 gap-left-md gap-bottom-normal">
								<div class="form-elem input-box">
									<input type="text" placeholder="téléphone*" name="telephone" value="<?php echo Tools::queryData('telephone', 'POST'); ?>" autocomplete="off" required>
								</div>
							</div>
						</div><!-- ./row -->

						<div class="row">
							<div class="col-md-6 gap-right-md gap-bottom-normal">
								<div class="form-elem input-box">
									<input type="text" placeholder="ville*" name="cp" value="<?php echo Tools::queryData('cp', 'POST'); ?>" autocomplete="off" required>
								</div>
							</div>
						</div><!-- ./row -->
						
						<!-- Number 2 -->
						<p class="number-list gap-bottom-normal">
							<span class="number">2</span>Quelles sont vos expertises :
						</p>

						<div class="row">
							<?php
							/* Liste des practices */
							foreach($listPractices as $practice) {
							?>
							<div class="col-sm-12 col-md-4 gap-right-md-small gap-bottom-normal">
								<div class="sub-featured gap-bottom-normal<?php echo (Tools::queryData('rpractice', 'POST') == $practice->getId() ? ' active' : ''); ?>" data-bind-practice="rpractice" data-bind-value="<?php echo $practice->getId(); ?>">
									<p class="featured-title gap-top-small"><?php echo $practice->getNom(); ?><br />
										<span class="subtitle">Career</span>
									</p>
									<div class="featured-image">
										<img src="<?php echo hook('decodeRouteImage', array($practice->getCover(), 'small')); ?>" class="cimagex" alt="<?php echo hook('get_last_alt_image'); ?>" />
									</div>
									<div class="overlay esc-practice-<?php echo $practice->getId(); ?>-bg-opm"></div>
								</div>
							</div>
							<?php } ?>

							<input type="text" class="hide" name="rpractice" value="<?php echo Tools::queryData('rpractice', 'POST'); ?>"/>

						</div>
						
						<!-- Number 3 -->
						<p class="number-list gap-bottom-normal">
							<span class="number">3</span>Quel est votre salaire actuel ?
						</p>

						<div class="row gap-bottom-normal">
							<div class="col-md-4 text-md-right gap-right-md">
								<p class="my-salary text-md-right">Mon salaire est de</p>
							</div>
							<div class="col-md-4 text-center">
								<div class="form-elem select-box full-width">
									<select class="custom" name="salaire">
										<?php for($i=0; $i < count(EllenScottHook::ENUM_LIST_SALAIRE); $i++) { ?>
										<option value="<?php echo $i; ?>"<?php echo (Tools::queryData('salaire', 'POST') == $i ? ' selected' : ''); ?>><?php echo EllenScottHook::ENUM_LIST_SALAIRE[$i]; ?></option>
										<?php } ?>
									</select>
								</div>
							</div>
							<div class="col-md-4 text-md-left gap-left-md">
								<p class="my-salary">par an.</p>
							</div>
						</div><!-- ./row -->
						
						<!-- Number 4 -->
						<p class="number-list gap-bottom-normal">
							<span class="number">4</span>Pourquoi voulez-vous rejoindre la fine équipe d’Ellen Scott Career ?
						</p>
						
						<div class="form-elem textarea-box gap-bottom-lg">
							<textarea rows="5" name="demande" placeholder="Détails sur le poste recherché, vos motivations ..."><?php echo Tools::queryData('demande', 'POST'); ?></textarea>
						</div>
						
						<!-- Number 5 -->
						<p class="number-list gap-bottom-normal">
							<span class="number">5</span>Téléchargez votre cv<span class="highlight">*</span>
						</p>

						<div class="row">
							<div class="col-md-6 text-md-right text-sm-center gap-right-md gap-bottom-normal">
								<p class="inputfile-description">Joindre le fichier word / pdf :</p>
								<div class="form-elem input-file upfile">
									<input type="file" id="smc-whos-file" class="inputfile" />
									<input type="text" class="hide" value="<?php echo Tools::queryData('primary-file','POST') ?>" name="primary-file" />
									<label data-text="télécharger§vérification en cours§fichier [filename] valide§la taille est limité à 50 Mo" for="smc-whos-file">télécharger<?php echo (strlen(Tools::queryData('primary-file','POST')) ? ' (1 fichier)' : '') ?></label>
								</div>
							</div>
							<?php if(isset($_GET['debug'])) { ?>
							<div class="col-md-6 gap-left-md text-sm-center gap-bottom-normal">
								<p class="inputfile-description">Télécharger son CV Linkedin</p>
								<div class="form-elem btn-zone">
									<a href="<?php echo hook('linkedin_basic_url'); ?>" class="btn">se connecter</a>
								</div>
							</div>
							<?php } ?>
						</div><!-- ./row -->
						
						<div class="text-center">
						</div>

						<div class="form-elem check-box check-primary">
							<div class="elem-wrap">
								<input type="checkbox" id="smc-whos-ck-primary" name="primary-accept" required checked />
								<label for="smc-whos-ck-primary"></label>
							</div>
							<label class="text-checked" for="smc-whos-ck-primary">J'accepte de recevoir des emails de la part d'Ellen Scott Career</label>
						</div>
						
						<div class="form-elem check-box check-primary">
							<div class="elem-wrap">
								<input type="checkbox" id="smc-whos-ck-secondary" name="secondary-accept" required checked />
								<label for="smc-whos-ck-secondary"></label>
							</div>
							<label class="text-checked" for="smc-whos-ck-secondary">J'ai lu et j'accepte les <a data-toggle="modal" href="#modalCGU">conditions générales d'utilisation</a></label>
						</div>

						<p class="required-description gap-bottom-lg"><span class="highlight">*</span>Champs obligatoires</p>
						
						<div class="text-center gap-bottom-lg">
							<div class="form-elem form-submit gap-bottom-lg">
								<input type="submit" value="envoyer">
								<input type="text" class="hide" name="contact-form" value="3" />
							</div>
						</div>
					</div>
