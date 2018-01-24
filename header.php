<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8" />
		<title><?php bloginfo('name');wp_title( '|', true, 'left' ); ?></title>
		<link rel="icon" type="image/png" href="img/favicon.png">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<meta name="author" content="Reykrad">
		<meta name="keywords" content="">
		<meta name="description" content="<?php bloginfo('description'); ?>" />
		<meta property="og:image" content="img/miniatura.png">

		<!-- Styles -->
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url')?>">
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url')?>/css/responsive.css">

		<!-- Fonts -->

		<?php wp_head(); ?>
	</head>	
	<body>