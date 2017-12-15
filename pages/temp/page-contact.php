<?php
$post = hook('macro', '$:/view/post');

if(isset($_POST['sendmail'])) {
	$nom = Tools::queryData('nom','POST');
	$prenom = Tools::queryData('prenom','POST');
	$email = Tools::queryData('email','POST');
	$phone = Tools::queryData('phone','POST');
	$sujet = Tools::queryData('sujet','POST');
	$message = Tools::queryData('message','POST');
	$captcha = Tools::queryData('captcha','POST');
	$captcha_test = Tools::queryData('captcha','SESSION');
	if(strlen($nom) && strlen($email) && strlen($sujet)
	&& strlen($message) && strlen($captcha)) {
		if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
			if($captcha == $captcha_test) {
				/* Send */
				$to = Registre::get('courriel');
				$to = 'pili@freshcore.fr'; // debug
				hook('send_mail', array($to, $sujet, $message, $email, $nom));
				$mail_back = hook('lang_get',"Merci. Votre message a bien été envoyé.");
				$mail_stop = 1;
			} else { $mail_back = '#'.hook('lang_get',"Le champ anti-robot est invalide."); }
		} else { $mail_back = '#'.hook('lang_get',"L'adresse email est incorrect. Veuillez la vérifier."); }
	} else { $mail_back = '#'.hook('lang_get',"Tous les champs sont obligatoires."); }
	$_SESSION['captcha'] = '';
}
?>
			<div data-theme="contact" class="page">
				<div class="container">
					<?php echo hook('get_fil_ariane'); ?>
					<h2><?php echo $post->getTitle(); ?></h2>
					<div class="textzone">
						<?php echo hook('cms_html', hook('decodeRouteImage', array($post->getContent(), 'medium'))); ?>
						<form method="POST">
							<div class="row">
								<div class="col-sm-12">
									<?php
									if(isset($mail_back) && strlen($mail_back)) {
										if($mail_back[0] != '#') {
									?>
									<div class="alert"><?php echo $mail_back; ?></div>
									<?php } else { ?>
									<div class="alert-error"><?php echo substr($mail_back, 1); ?></div>
									<?php }} ?>
								</div>
								<div class="col-sm-3 default-cols">
									<input type="text" name="prenom" placeholder="<?php echo hook('lang_get','Prénom'); ?>" value="<?php echo Tools::queryData('prenom','POST'); ?>" required/>
								</div>
								<div class="col-sm-3 default-cols">
									<input type="text" name="nom" placeholder="<?php echo hook('lang_get','Nom'); ?>" value="<?php echo Tools::queryData('nom','POST'); ?>" required/>
								</div>
								<div class="col-sm-3 default-cols">
									<input type="text" name="email" placeholder="<?php echo hook('lang_get','Email'); ?>" value="<?php echo Tools::queryData('email','POST'); ?>" required/>
								</div>
								<div class="col-sm-3 default-cols">
									<input type="text" name="phone" placeholder="<?php echo hook('lang_get','Numéro de téléphone'); ?>" value="<?php echo Tools::queryData('phone','POST'); ?>"/>
								</div>
								<div class="col-sm-12 default-cols">
									<input type="text" name="sujet" placeholder="<?php echo hook('lang_get','Sujet'); ?>" value="<?php echo Tools::queryData('sujet','POST'); ?>" required/>
									<textarea name="message" placeholder="<?php echo hook('lang_get','Message'); ?>" required><?php echo Tools::queryData('message','POST'); ?></textarea>
									<div class="row">
										<div class="col-md-12">
											<img src="captcha.png" class="captcha" alt="anti-robot"/>
										</div>
										<div class="col-md-12">
											<input type="text" name="captcha" placeholder="<?php echo hook('lang_get','Recopiez les chiffres ci-contre (anti-robot)'); ?>" required/>
										</div>
									</div>
									<div class="text-center">
										<button class="btn-more"<?php echo (isset($mail_stop) ? ' disabled' : ''); ?>><?php echo hook('lang_get','Envoyer'); ?></button>
										<input type="text" class="hide" name="sendmail" value="1"/>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
