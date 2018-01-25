					<div class="contact-header">
						<p class="contact-header-title">un conseil<br><span class="subtitle">en recrutement</span></p>
						<p class="contact-header-description">Vous êtes candidat et/ou recruteur et vous auriez bien besoin de conseils en recrutement, faites-nous en part</p>
					</div>

					<div class="contact-content">
						<p class="number-list"><span class="number">1</span>Qui êtes-vous ?</p>
						
						<div class="text-center gap-bottom-lg">
							<fieldset class="switch-buttons switch-button-lg">
								<label for="candidat">Candidat</label>
								<input type="radio" name="type-client" value="candidat" id="candidat"<?php echo (Tools::queryData('type-client', 'POST') == 'candidat' ? ' checked' : ''); ?>>
								<label for="client">Client</label>
								<input type="radio" name="type-client" value="client" id="client"<?php echo (Tools::queryData('type-client', 'POST') == 'client' ? ' checked' : ''); ?>>
							</fieldset>
						</div>

						<fieldset class="switch-buttons gap-bottom-normal">
							<label for="smc-rec-mme">Mme</label>
							<input type="radio" name="civilite" value="f" id="smc-rec-mme"<?php echo (Tools::queryData('civilite', 'POST') == 'f' ? ' checked' : ''); ?>>
							<label for="smc-rec-m">M.</label>
							<input type="radio" name="civilite" value="h" id="smc-rec-m"<?php echo (Tools::queryData('civilite', 'POST') == 'h' ? ' checked' : ''); ?>>
						</fieldset>

						<div class="row">
							<div class="col-md-4 gap-right-md gap-bottom-normal">
								<div class="form-elem input-box">
									<input type="text" placeholder="nom*" name="nom" value="<?php echo Tools::queryData('nom', 'POST'); ?>" autocomplete="off" required>
								</div>
							</div>
							
							<div class="col-md-4 gap-left-md gap-right-md gap-bottom-normal">
								<div class="form-elem input-box">
									<input type="text" placeholder="prénom*" name="prenom" value="<?php echo Tools::queryData('prenom', 'POST'); ?>" autocomplete="off" required>
								</div>
							</div>
							
							<div class="col-md-4 gap-left-md gap-bottom-normal">
								<div class="form-elem input-box">
									<input type="text" placeholder="fonction" name="fonction" value="<?php echo Tools::queryData('fonction', 'POST'); ?>" autocomplete="off">
								</div>
							</div>
						</div><!-- ./row -->

						<div class="row gap-bottom-lg">
							<div class="col-md-4 gap-right-md gap-bottom-normal">
								<div class="form-elem input-box">
									<input type="email" placeholder="adresse email*" name="email" value="<?php echo Tools::queryData('email', 'POST'); ?>" autocomplete="off" required>
								</div>
							</div>
							
							<div class="col-md-4 gap-left-md gap-right-md gap-bottom-normal">
								<div class="form-elem input-box">
									<input type="text" placeholder="téléphone*" name="telephone" value="<?php echo Tools::queryData('telephone', 'POST'); ?>" autocomplete="off" required>
								</div>
							</div>

						</div><!-- ./row -->
						
						<p class="number-list gap-bottom-normal">
							<span class="number">2</span>Vous souhaitez que nous vous apportons un conseil, quel est votre message :
						</p>

						<div class="form-elem textarea-box gap-bottom-lg">
							<textarea rows="5" name="demande" placeholder="Détails sur votre demande ..."><?php echo Tools::queryData('demande', 'POST'); ?></textarea>
						</div>

						<p class="required-description gap-bottom-lg"><span class="highlight">*</span>Champs obligatoires</p>

						<div class="text-center gap-bottom-lg">
							<div class="form-elem form-submit gap-bottom-lg">
								<input type="submit" value="envoyer">
								<input type="text" class="hide" name="contact-form" value="2" />
							</div>
						</div>
					</div>
