<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package LMI
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="full service music school private lessons guitar bass guitar piano drums voice vocal instruction loudoun county va">
	<meta name="description" content="A full sevice music school teaching Guitar, Bass Guitar, Piano, Drums and Voice and Vocal Instruction. Private Lessons in  Loudoun County VA">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<!-- Bootstrap CSS -->
  <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/bootstrap.min.css" rel="stylesheet">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans|Prata" rel="stylesheet">

  <!-- Font-Awesome -->
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/fontawesome.min.css" rel="stylesheet">

  <!-- Favicons -->
  <link rel="logo-icon" href="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo.png">
  <link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/assets/img/favicon.ico" type="image/x-icon" />

	<?php wp_head(); ?>

	<!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->

	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'lmi' ); ?></a>

	<!-- HEADER -->
  <header class="site-header" role="banner">

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg">
      <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img id="logo-img" src="<?php bloginfo('stylesheet_directory')?>/assets/img/LMI-logo_wTitle.png" alt="LMI Logo" /></a>
      <button class="navbar-toggler justify-content-end" id="toggle" type="button" data-toggle="collapse" data-target="#nav" aria-controls="nav" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa fa-bars"></i>
      </button>

			<?php
				wp_nav_menu( array(

					'theme_location'    => 'menu-1', /* see register_nav_menus() in functions.php */
					'container_id'         => 'nav',
					'container_class'   => 'collapse navbar-collapse justify-content-end',
					'menu_class'        => 'navbar-nav',
					'depth' 						=> 2,
					'walker' 						=> new wp_bootstrap_navwalker()

				));
			?>

			<a class="nav-link" id="social" href="https://www.facebook.com/Loudoun-Music-Instruction-153644078006540/" target="_blank"><i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i></a>

    </nav>
  </header>
