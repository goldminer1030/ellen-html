<?php
hook('cms_styles_add', array(
	hook('path_root').'static/vendors/jquery-ui-1.12.1/jquery-ui.css',
	hook('path_root').'static/bower_components/font-awesome/css/font-awesome.min.css',
	hook('path_root').'static/bower_components/bootstrap/dist/css/bootstrap.min.css',
	// hook('path_root').'static/node_modules/owlcarousel/owl-carousel/owl.carousel.css',
	// hook('path_root').'static/node_modules/owlcarousel/owl-carousel/owl.theme.css',
	// hook('path_root').'static/node_modules/owlcarousel/owl-carousel/owl.transitions.css',
	hook('path_root').'static/bower_components/owl.carousel/src/css/owl.carousel.min.css',
	hook('path_root').'static/bower_components/owl.carousel/src/css/owl.theme.default.min.css',
	// hook('path_root').'static/css/flipbook.css',
	hook('path_root').'static/css/bebas.font.css',
	hook('path_root').'static/css/amplify.font.css',
	hook('path_root').'static/css/montserrat.font.css',
	hook('path_root').'static/css/bootstrap.patch.css',
	hook('path_root').'static/css/slidesheep.css',
	hook('path_root').'static/vendors/jquery-custom-select/css/jquery.jscrollpane.css',
	hook('path_root').'static/vendors/jquery-custom-select/css/customSelectBox.css',
	hook('path_root').'static/bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css',
	hook('path_root').'static/bower_components/responsive-tabs/css/responsive-tabs.css',
	hook('path_root').'static/vendors/flipbook/css/flipbook.style.css',
	hook('path_root').'static/css/flipbook.css',
	hook('path_root').'static/bower_components/responsive-tabs/css/style.css',
	hook('path_root').'static/css/main-dev.css',
	hook('path_root').'ellenscott.practices.css',
	hook('path_root').'static/css/style.css'
));

hook('cms_scripts_add', array(
	hook('path_root').'melba.errorlevel.js',
	hook('path_root').'static/bower_components/jquery/dist/jquery.min.js',
	hook('path_root').'static/vendors/jquery-ui-1.12.1/jquery-ui.js',
	hook('path_root').'static/bower_components/owl.carousel/src/js/owl.carousel.js',
	hook('path_root').'static/js/cimagex.alpha.js',
	hook('path_root').'static/node_modules/yengin/yengin.js',
	hook('path_root').'static/js/main.js?d='.time(),
	hook('path_root').'static/vendors/jquery-custom-select/js/jScrollPane.js',
	hook('path_root').'static/vendors/jquery-custom-select/js/jquery.mousewheel.js',
	hook('path_root').'static/vendors/jquery-custom-select/js/SelectBox.js',
	hook('path_root').'static/bower_components/moment/min/moment.min.js',
	hook('path_root').'static/bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js',
	hook('path_root').'static/bower_components/responsive-tabs/js/jquery.responsiveTabs.min.js',
	hook('path_root').'static/bower_components/bootstrap/dist/js/bootstrap.min.js',
	hook('path_root').'static/bower_components/d3/d3.min.js',
	hook('path_root').'static/bower_components/topojson/topojson.min.js',
	hook('path_root').'static/vendors/gmaps/gmaps.min.js',
 	'https://maps.google.com/maps/api/js?key=AIzaSyB8Gzrt-0MU9T1yNq-UUag7dINwnGcUATA',
	hook('path_root').'static/js/france-map.js',
	hook('path_root').'static/js/main-dev.js'
));

Melba::isRequest('/', function () {
	hook('macro', array('$:/var/tpl', 'accueil.php'));
});

hook('add_timelog', '/theme/pages/accueil');

/* Couleur dynamique */
hook('macro', array('$:/var/color', 0));
/* Saisie pour une page practice */
if(hook('macro', '$:/view/tpl') == 'page-practice.php') {
	hook('macro', array('$:/var/color', hook('macro', '$:/view/post')->getId()));
}

/* Données : Practices */
$listPractices = array();
$listBddPractices = hook('get_custom_post', array('practices', 'view_all_post'));
foreach($listBddPractices as $practice) {
	if($practice->getLevel() == 1) {
		array_push($listPractices, $practice);
	}
}
usort($listPractices, function ($a, $b) {
	$sa = $a->getOrdre(); $sb = $b->getOrdre();
	return ($sa == $sb ? 0 : ($sa < $sb ? -1 : 1));
});
?>
<!DOCTYPE html>
<html lang="<?php echo hook('lang_get_context'); ?>">
	<head>
		<!-- D-Plan //-->
		<meta http-equiv="Content-Type" charset="UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
		<!-- SEO //-->
		<meta name="Description" content="<?php echo hook('SeoRouteHook.get_description'); ?>"/>
		<meta name="Keywords" content="<?php echo hook('SeoRouteHook.get_keywords'); ?>"/>
		<meta name="Author" content="<?php echo hook('macro', '$:/service/author'); ?>"/>
		<!-- TITRE //-->
		<title><?php echo hook('SeoRouteHook.get_title'); ?></title>
		<!-- ICONS //-->
		<link rel="icon" type="image/png" href="<?php echo hook('decodeRouteImage', array(Registre::get('site_icone'),'small')); ?>"/>
		<link rel="shortcut icon" type="image/png" href="<?php echo hook('decodeRouteImage', array(Registre::get('site_icone'),'small')); ?>"/>
		<link rel="apple-touch-icon" type="image/png" href="<?php echo hook('decodeRouteImage', array(Registre::get('site_icone'),'small')); ?>"/>
<?php include 'styles.php'; ?>
	</head>
	<body>
			<header>
				<?php include 'header.php'; ?>
			</header>
				<?php include hook('macro', '$:/view/tpl'); ?>
			<footer>
<?php include 'footer.php'; ?>
			</footer>
		</section>
<?php include 'scripts.php'; ?>
	</body>
</html>
