<!DOCTYPE html>
<html lang="<?php echo Theme::lang() ?>">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="generator" content="Bludit">
	<link href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;500;600&display=swap" rel="stylesheet">
	<!-- Dynamic title tag -->
	<?php echo Theme::metaTagTitle(); ?>

	<!-- Dynamic description tag -->
	<?php echo Theme::metaTagDescription(); ?>

	<!-- Include Favicon -->
	<?php echo Theme::favicon('img/favicon.png'); ?>

	<!-- Include CSS Bootstrap file from Bludit Core -->
	<?php echo Theme::cssBootstrap(); ?>

	<!-- Include CSS Styles from this theme -->
	<?php echo Theme::css('css/bootstrap.css'); ?>
		<!-- Include CSS Styles from this theme -->
		<?php echo Theme::css('css/cerebrisans.css'); ?>
			<!-- Include CSS Styles from this theme -->
	<?php echo Theme::css('css/fontawesome-all.min.css'); ?>
		<!-- Include CSS Styles from this theme -->
		<?php echo Theme::css('css/swiper.min.css'); ?>
			<!-- Include CSS Styles from this theme -->
	<?php echo Theme::css('css/animate-text.css'); ?>
		<!-- Include CSS Styles from this theme -->
		<?php echo Theme::css('css/animate.min.css'); ?>
				<!-- Include CSS Styles from this theme -->
				<?php echo Theme::css('css/lightgallery.min.css'); ?>
								<!-- Include CSS Styles from this theme -->
								<?php echo Theme::css('css/style.css'); ?>


	<!-- Load Bludit Plugins: Site head -->
	<?php Theme::plugins('siteHead'); ?>
	<script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="61ea5bfb-3dac-4a0b-b5e7-afc574f3d1e5";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
</head>
<body>

	<!-- Load Bludit Plugins: Site Body Begin -->
	<?php Theme::plugins('siteBodyBegin'); ?>

	<!-- Navbar -->
	<?php include(THEME_DIR_PHP.'navbar.php'); ?>

	<!-- Content -->
	<?php
		// $WHERE_AM_I variable detect where the user is browsing
		// If the user is watching a particular page the variable takes the value "page"
		// If the user is watching the frontpage the variable takes the value "home"
		if ($WHERE_AM_I == 'page') {
			include(THEME_DIR_PHP.'page.php');
		} else {
			include(THEME_DIR_PHP.'home.php');
		}
	?>

	<!-- Footer -->
	<?php include(THEME_DIR_PHP.'footer.php'); ?>
	<?php echo Theme::js('js/modernizr-2.8.3.min.js'); ?>
	<?php echo Theme::js('js/jquery-3.3.1.min.js'); ?>
	<?php echo Theme::js('js/bootstrap.min.js'); ?>
	<?php echo Theme::js('js/swiper.min.js'); ?>
	<?php echo Theme::js('js/lightgallery.min.js'); ?>
	<?php echo Theme::js('js/waypoints.min.js'); ?>
	<?php echo Theme::js('js/countdown.min.js'); ?>
	<?php echo Theme::js('js/isotope.min.js'); ?>
	<?php echo Theme::js('js/masonry.min.js'); ?>
	<?php echo Theme::js('js/images-loaded.min.js'); ?>
	<?php echo Theme::js('js/wavify.js'); ?>
	<?php echo Theme::js('js/jquery.wavify.js'); ?>
	<?php echo Theme::js('js/circle-progress.min.js'); ?>
	<?php echo Theme::js('js/counterup.min.js'); ?>
	<?php echo Theme::js('js/wow.min.js'); ?>
	<?php echo Theme::js('js/animation-text.min.js'); ?>
	<?php echo Theme::js('js/vivus.min.js'); ?>
	<?php echo Theme::js('js/some-plugins.js'); ?>
	<?php echo Theme::js('js/main.js'); ?>
	<!-- Load Bludit Plugins: Site Body End -->
	<?php Theme::plugins('siteBodyEnd'); ?>

</body>
</html>