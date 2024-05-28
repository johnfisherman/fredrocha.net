<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

<?php $templateURI = get_template_directory_uri(); ?>

	<head>
		<meta charset="utf-8">

		<?php // Google Chrome Frame for IE ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title><?php wp_title('|', 'before'); ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="icon" href="<?php echo $templateURI; ?>/favicon.png">
		
		<link rel="apple-touch-icon" sizes="180x180" href="<?php echo $templateURI; ?>/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="<?php echo $templateURI; ?>/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="<?php echo $templateURI; ?>/favicon-16x16.png">
		<link rel="manifest" href="<?php echo $templateURI; ?>/site.webmanifest">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

		<?php if ( !is_user_logged_in() ) { // track visitors only ?>

			<meta name="google-site-verification" content="Y98M3P71HxQwGG1JYh6xosZVFo8b2gtOb7FUyX4echQ" />

		<?php } // if user logged in ?>

		<?php // drop Google Analytics Here ?>
			<script>
			  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			  ga('create', 'UA-12970768-1', 'fredrocha.net');
			  ga('send', 'pageview');

			</script>
		<?php // end analytics ?>

		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Cabin:wght@400;700&family=Open+Sans:ital,wght@0,400;0,700;1,400&family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">

<!-- 		<meta name="twitter:card" content="summary" />
		<meta name="twitter:site" content="@john_fisherman" />
		<meta name="twitter:url" content="http://fredrocha.net" />
		<meta name="twitter:title" content="Fred Rocha, web development star" />
		<meta name="twitter:description" content="Wwweb, cinema, games, life in general. Stuff that moves me." /> -->

	</head>

	<body <?php body_class(); ?>>

		<div id="container">

			<header class="header" role="banner">

				<div id="inner-header" class="clearfix">

					<?php // to use a image just replace the bloginfo('name') with your img src and remove the surrounding <p> ?>
					<!-- <p id="logo" class="h1"><a href="<?php echo home_url(); ?>" rel="nofollow"><?php bloginfo('name'); ?></a></p> -->

					<?php // if you'd like to use the site description you can un-comment it below ?>
					<?php // bloginfo('description'); ?>

					<input type="checkbox" id="navbar-checkbox" class="navbar-checkbox">

					<nav role="navigation" class="menu">
						<?php if ( !is_home() ) {
							  bones_main_nav();
					 	?>

							<label for="navbar-checkbox" class="navbar-handle"></label>

						<?php  } ?>

					</nav>

				</div> <?php // end #inner-header ?>

			</header> <?php // end header ?>
