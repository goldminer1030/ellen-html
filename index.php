<?php
/* Lang */
$lang = hook('lang_get_context');

/* Action */

if(
	Tools::queryData('nom_newsletter','POST') &&
	Tools::queryData('email_newsletter','POST')
) {
	/* Request */
	// $diffusions = array();
	$nom = Tools::queryData('nom_newsletter', 'POST');
	$email = Tools::queryData('email_newsletter', 'POST');
	// $newsCustomPost = hook('option_custom_post', 'newsletter');
	// foreach($newsCustomPost->info['listDiffusions'] as $labelDiffusion) {
	// 	if(Tools::queryData('check-'.$labelDiffusion,'POST')) { array_push($diffusions, $labelDiffusion); }}
	// $diffusions = implode(',', $diffusions);
	$diffusions = 'generale';
	if(strlen($nom) < 255) {
		/* Check Email */
		if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
			global $ContactNewsletterManager;
			$contact = $ContactNewsletterManager->queryByEmail($email);
			if($contact) {
				$contact->setNom($nom);
				$contact->setSubscribe($diffusions);
				$contact->update();
				hook('macro', array('$:/var/client-msg', 'Vous êtes bien enregistré.'));
			} else {
				$contact = $ContactNewsletterManager->create();
				$contact->setNom($nom);
				$contact->setEmail($email);
				$contact->setDateAjout(Tools::getDatetime());
				$contact->setSubscribe($diffusions);
				$contact->setHookCat('newsletter');
				$contact->insert();
				hook('newsletter_add_contact', $email);
				hook('macro', array('$:/var/client-msg', 'Enregistré ! Vous recevrez les newsletters.'));
			}
		} else {
			hook('macro', array('$:/var/client-msg', 'Newsletter : veuillez vérifier votre adresse mail.'));
		}
	} else {
		hook('macro', array('$:/var/client-msg', 'Newsletter : nom trop long.'));
	}
}

/* API Actu */
Melba::isRequest('#^apiActu$#', function () {
	hook('api_actu');
}, false);

/* External Request */

Melba::isRequest('#^captcha\.png$#', function () {
	hook('captcha');
}, false);

Melba::isRequest('#^server\.js$#', function () {
	hook('js-server');
}, false);

Melba::isRequest('#^rss$#', function () {
	hook('rss', array(
		array('Test', 'https://www.google.com/culturalinstitute/beta/?hl=fr', 'Testez Google Art Project')
	));
}, false);

Melba::isRequest('#^robots?\.txt$#', function () {
	hook('robot.txt', array(
		'allow' => array('rss','sitemap.xml')
	));
}, false);

Melba::isRequest('#^sitemap\.xml$#', function () {
	/* Route */
	hook('sitemap', hook('get_theme_sitemap'));
}, false);

hook('add_timelog', '/theme/pages');
include 'pages/index.php';