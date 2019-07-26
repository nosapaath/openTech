<?php
/**
 * The header for our theme.
 *
 * @package QOD_Starter_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,700,900&display=swap" rel="stylesheet">
		<script src="https://kit.fontawesome.com/48e8e4b09a.js"></script>


	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<header>
				<nav class="navigation">
					<div class="navigation-logo-wrapper">
						<div class="logo">
						<a href="<?php echo home_url();?>">
						<?php 
							$svg_file = file_get_contents(get_template_directory_uri().'/images/logos/opentech-logo.svg');
								$find_string   = '<svg';
								$position = strpos($svg_file, $find_string);
								$svg_file_new = substr($svg_file, $position);
								echo "<div id='search-icon' class='logo-wrapper' style='width:50px;' >" . $svg_file_new . "</div>";
						?>
						</a>
						</div>
						<i class="fas fa-bars fa-2x"></i>
					</div>
					<ul class="top-menu">
						<?php 
							$menuParameters = array(
								'container'       => false,
								'echo'            => false,
								'items_wrap'      => '%3$s',
								'depth'           => 0,
							);
							echo strip_tags(wp_nav_menu( $menuParameters ), '<li>' ); ?>
					</ul>
				</nav>
			</header>

			<div id="content" class="site-content">
