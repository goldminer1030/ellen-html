<?php
/* Header Linkedin */
Macro::set('$:/server/callback', hook('path_root').hook('get_call'), true);

/* Gestion des contacts */
hook('EllenScottHook.PageContacts');

/* Requête */
$itemSelect = Tools::queryData('smcMethod','POST');
// echo $itemSelect;
// exit;
if(!$itemSelect) { $itemSelect = Tools::queryData('mode','GET'); }
$boolItemSelect = false;
if($itemSelect) {
	/* Rechercher la position de l'élément dans l'énumération */
	$itemSelect = array_search($itemSelect, EllenScottHook::ENUM_CHOIX_CONTACT);
	if($itemSelect !== false) {
		$boolItemSelect = true;
	} else {
		/* Valeur par défaut - requête erronée */
		$itemSelect = (int)EllenScottHook::BOOL_DEFAULT_CHOIX_CONTACT;
	}
} else {
	/* Valeur par défaut - aucune requête */
	$itemSelect = (int)EllenScottHook::BOOL_DEFAULT_CHOIX_CONTACT;
}
/* Sélection */
$listSelect = EllenScottHook::ENUM_CHOIX_CONTACT;
$itemSelect %= count($listSelect);

$listDep = hook('macro', '$:/manager/departements')->all();
usort($listDep, function ($a, $b) {
	$sa = $a->getCode(); $sb = $b->getCode();
	return ($sa == $sb ? 0 : ($sa < $sb ? -1 : 1));
});
?>
	<div class="header-title-container" id="header-contactPage">
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

	<div class="page-content smartcontact auto-height bg-white">
		<div class="container">

			<?php if(isset($_POST['smcSent']) || isset($_GET['smcSent'])) { $boolItemSelect = true; $itemSelect = 4; } ?>

			<!-- Choix du contact -->
			<div class="smc-exchange text-center<?php echo ($boolItemSelect ? ' hide' : ''); ?>">
				Je souhaite échanger avec Ellen concernant
				<div class="smc-selection">
					<span>
						<span><?php echo $listSelect[($itemSelect % count($listSelect))]; ?></span>
						<ul>
						<?php foreach($listSelect as $item) { ?>
							<li <?php echo ($listSelect[($itemSelect % count($listSelect))] == $item ? 'class="active"':''); ?>><?php echo $item; ?></li>
						<?php } ?>
						</ul>
					</span>
					<input type="text" class="hide" name="smcMethod" value="<?php echo $listSelect[$itemSelect]; ?>"/>
				</div>
				<button class="smc-begin">
					<img src="<?php echo hook('path_root'); ?>static/images/small-go-cheval.png" alt="<?php echo hook('get_last_alt_image'); ?>" />
				</button>
			</div>
			<div class="smc-back">
				<button type="button" class="ecd-red-bg"><i class="fa fa-arrow-left fa-fw"></i> RETOUR</button>
			</div>
			<!-- Fin du choix -->

			<!-- Choix 0 : Ma candidature -->
			<div<?php echo ($boolItemSelect && $itemSelect == 0 ? ' class="showit"' : ''); ?> data-smc-choice="0">
				<form method="POST">
<?php include dirname(__FILE__).'/contact/macandidature.php'; ?>
				</form>
			</div>
			<!-- Fin du choix 0 -->

			<!-- Choix 1 : Mon besoin en recrutement -->
			<div<?php echo ($boolItemSelect && $itemSelect == 1 ? ' class="showit"' : ''); ?> data-smc-choice="1">
				<form method="POST">
<?php include dirname(__FILE__).'/contact/besoinrecrutement.php'; ?>
				</form>
			</div>
			<!-- Fin du choix 1 -->

			<!-- Choix 2 : Un conseil en recrutement -->
			<div<?php echo ($boolItemSelect && $itemSelect == 2 ? ' class="showit"' : ''); ?> data-smc-choice="2">
				<form method="POST">
<?php include dirname(__FILE__).'/contact/conseilrecrutement.php'; ?>
				</form>
			</div>
			<!-- Fin du choix 2 -->

			<!-- Choix 3 : Rejoindre la fine équipe -->
			<div<?php echo ($boolItemSelect && $itemSelect == 3 ? ' class="showit"' : ''); ?> data-smc-choice="3">
				<form method="POST">
<?php include dirname(__FILE__).'/contact/rejoindre-equipe.php'; ?>
				</form>
			</div>
			<!-- Fin du choix 3 -->

			<!-- Confirmation de l'envoi -->
			<div<?php echo ($boolItemSelect && $itemSelect == 4 ? ' class="showit"' : ''); ?> data-smc-choice="4">
				<div class="alert alert-success text-center">Vos informations ont bien été envoyé ! (en cours de dév.)</div>
			</div>

		</div>
	</div>

	<!-- Google Maps -->
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
	<!-- Fin de Google Maps -->

	<!-- Modal CGU -->
	<div class="modal fade" id="modalCGU" role="dialog">
		<div class="modal-dialog" role="document">
			<?php
			$postCgu = hook('get_custom_post', array('pages', 'view_post_id', 6));
			if($postCgu) {
				$dataCgu = $postCgu->getContent();
				preg_match_all("#<pre>([^<]+)</pre>[^<]*<p>([^<]+)</p>#", $dataCgu, $matches);
			?>
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<h2 class="modal-title"><?php echo Tools::strFormat($postCgu->getTitle(), 'AB'); ?></h2>
				</div>
				<div class="modal-body">
					<?php
					for($i=0; $i < count($matches[0]); $i++) {
					?>
					<div class="cgu-item">
						<p class="cgu-item-number"><?php echo $matches[1][$i]; ?></p>
						<p class="cgu-item-description"><?php echo $matches[2][$i]; ?></p>
					</div>
					<?php } ?>
				</div>
			</div>
			<?php } ?>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
			</div>
		</div>
	</div>
