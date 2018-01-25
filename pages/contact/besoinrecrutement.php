					<div class="contact-header">
						<p class="contact-header-title">nous confier<br><span class="subtitle">un besoin en recrutement</span></p>
						<p class="contact-header-description">Nous serions ravis de vous accompagner dans votre besoin en recrutement</p>
					</div>

					<div class="contact-content">
						<!-- Number 1 -->
						<p class="number-list gap-bottom-normal"><span class="number">1</span>Qui êtes-vous ?</p>
						
						<div class="row">
							<div class="col-md-4 gap-right-md gap-bottom-normal">
								<div class="form-elem input-box">
									<input type="text" placeholder="entreprise" name="societe" value="<?php echo Tools::queryData('societe','POST'); ?>" autocomplete="off">
								</div>
							</div>

							<div class="col-md-4 gap-left-md gap-right-md gap-bottom-normal">
								<div class="form-elem input-box">
									<input type="text" placeholder="nom*" name="nom" value="<?php echo Tools::queryData('nom','POST'); ?>" autocomplete="off" required>
								</div>
							</div>
							
							<div class="col-md-4 gap-left-md gap-bottom-normal">
								<div class="form-elem input-box">
									<input type="text" placeholder="prénom*" name="prenom" value="<?php echo Tools::queryData('prenom','POST'); ?>" autocomplete="off" required>
								</div>
							</div>
						</div><!-- ./row -->
						
						<div class="row gap-bottom-lg">
							<div class="col-md-4 gap-right-md gap-bottom-normal">
								<div class="form-elem input-box">
									<input type="text" placeholder="fonction" name="fonction" value="<?php echo Tools::queryData('fonction','POST'); ?>" autocomplete="off">
								</div>
							</div>

							<div class="col-md-4 gap-left-md gap-right-md gap-bottom-normal">
								<div class="form-elem input-box">
									<input type="email" placeholder="adresse email*" name="email" value="<?php echo Tools::queryData('email','POST'); ?>" autocomplete="off" required>
								</div>
							</div>
							
							<div class="col-md-4 gap-left-md gap-bottom-normal">
								<div class="form-elem input-box">
									<input type="text" placeholder="téléphone*" name="telephone" value="<?php echo Tools::queryData('telephone','POST'); ?>" autocomplete="off" required>
								</div>
							</div>
							
						</div><!-- ./row -->
						
						<!-- Number 2 -->
						<p class="number-list gap-bottom-normal">
							<span class="number">2</span>Quel est votre besoin en recrutement ?
						</p>
						
						<div class="row">
							<div class="col-md-4 gap-right-md gap-bottom-normal">
								<div class="form-elem select-box full-width">
									<select name="practice">
										<?php foreach($listPractices as $practice) { ?>
										<option value="<?php echo $practice->getId(); ?>"<?php echo (Tools::queryData('practice', 'POST') == $i ? ' selected' : ''); ?>><?php echo $practice->getNom(); ?></option>
										<?php } ?>
									</select>
								</div>
							</div>

							<div class="col-md-4 gap-left-md gap-right-md gap-bottom-normal">
								<div class="form-elem input-box">
									<input type="text" placeholder="intitulé de poste" name="intitule" value="<?php echo Tools::queryData('intitule','POST'); ?>" autocomplete="off">
								</div>
							</div>
							
							<div class="col-md-4 gap-left-md gap-bottom-normal">
								<div class="form-elem input-box">
									<input type="text" placeholder="ville" name="localisation" value="<?php echo Tools::queryData('localisation','POST'); ?>" autocomplete="off">
								</div>
							</div>
						</div><!-- ./row -->
						
						<div class="row">
							<div class="col-md-4 gap-right-md gap-bottom-normal">
								<div class="form-elem select-box full-width">
									<select class="custom" name="salaire">
										<?php for($i=0; $i < count(EllenScottHook::ENUM_LIST_SALAIRE); $i++) { ?>
										<option value="<?php echo $i; ?>"<?php echo (Tools::queryData('salaire', 'POST') == $i ? ' selected' : ''); ?>><?php echo EllenScottHook::ENUM_LIST_SALAIRE[$i]; ?></option>
										<?php } ?>
									</select>
								</div>
							</div>

							<div class="col-md-4 gap-left-md gap-right-md gap-bottom-normal">
								<div class="form-elem input-box">
									<input type="text" placeholder="budget prévu" name="budget" value="<?php echo Tools::queryData('budget','POST'); ?>" autocomplete="off">
								</div>
							</div>
							
							<div class="col-md-4 gap-left-md gap-bottom-normal">
								<div class="form-elem input-date">
									<input type='text' class="form-datetime" name="daterecrutement" placeholder="date d’intégration" value="<?php echo Tools::queryData('daterecrutement','POST'); ?>" autocomplete="off"/>
								</div>
							</div>
							
						</div><!-- ./row -->

						<div class="row gap-bottom-lg">
							<div class="col-md-4 gap-bottom-normal">
								<fieldset class="switch-buttons switch-button-extra gap-bottom-normal">
									<label for="smc-brec-cdd">Cdd</label>
									<input type="radio" name="contrat" value="Cdd" id="smc-brec-cdd"<?php echo (Tools::queryData('contrat','POST') == 'Cdd' ? ' checked' : ''); ?>>
									<label for="smc-brec-cdi">Cdi</label>
									<input type="radio" name="contrat" value="Cdi" id="smc-brec-cdi"<?php echo (Tools::queryData('contrat','POST') == 'Cdi' ? ' checked' : ''); ?>>
								</fieldset>
							</div>
						</div><!-- ./row -->

						<!-- Number 3 -->
						<p class="number-list gap-bottom-normal">
							<span class="number">3</span>Voulez-vous nous en dire plus maintenant ?
						</p>
						
						<div class="form-elem textarea-box gap-bottom-lg">
							<textarea rows="5" name="demande" placeholder="Détails sur le poste, le profil recherché, les enjeux et contexte du poste..."><?php echo Tools::queryData('demande','POST'); ?></textarea>
						</div>
						
						<!-- Number 4 -->
						<p class="number-list gap-bottom-normal">
							<span class="number">4</span>Auriez-vous un descriptif de poste à nous communiquer ?
						</p>

						<div class="text-center gap-bottom-normal">
							<span class="inputfile-description">Joindre le fichier word / pdf :</span>
							<div class="form-elem input-file upfile">
								<input type="file" id="smc-brec-file" class="inputfile" />
								<input type="text" class="hide" value="<?php echo Tools::queryData('primary-file','POST') ?>" name="primary-file" />
								<label data-text="télécharger§vérification en cours§fichier [filename] valide§la taille est limité à 50 Mo" for="smc-brec-file">télécharger<?php echo (strlen(Tools::queryData('primary-file','POST')) ? ' (1 fichier)' : '') ?></label>
							</div>
						</div>

						<div class="form-elem check-box check-primary">
							<div class="elem-wrap">
								<input type="checkbox" id="smc-brec-check-primary" name="primary-accept" required checked />
								<label for="smc-brec-check-primary"></label>
							</div>
							<label class="text-checked" for="smc-brec-check-primary">J'accepte de recevoir des emails de la part d'Ellen Scott Career</label>
						</div>
						
						<div class="form-elem check-box check-primary">
							<div class="elem-wrap">
								<input type="checkbox" id="smc-brec-check-secondary" name="secondary-accept" required checked />
								<label for="smc-brec-check-secondary"></label>
							</div>
							<label class="text-checked" for="smc-brec-check-secondary">J'ai lu et j'accepte les <a data-toggle="modal" href="#modalCGU">conditions générales d'utilisation</a></label>
						</div>

						<p class="required-description gap-bottom-lg"><span class="highlight">*</span>Champs obligatoires</p>
						
						<div class="text-center gap-bottom-lg">
							<div class="form-elem form-submit gap-bottom-lg">
								<input type="submit" value="envoyer">
								<input type="text" class="hide" name="contact-form" value="1" />
							</div>
						</div>
					</div>
