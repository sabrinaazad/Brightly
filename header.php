<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="container">
 *
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

	    <div class="outer-wrapper">
		<nav class="top-nav">
			<div class="mobile-container">
				<a href="javascript:void(0);" class="icon">
					<i class="fa fa-bars" id="menu"></i>
				</a>
				<?php 
				wp_nav_menu(
				 	array(
					    'menu' => "mobile-menu", // (int|string|WP_Term) Desired menu. Accepts a menu ID, slug, name, or object.
					    'menu_class' => "mobile-nav", // (string) CSS class to use for the ul element which forms the menu. Default 'menu'.
					    'menu_id' => "myLinks", // (string) The ID that is applied to the ul element which forms the menu. Default is the menu slug, incremented.
					    'fallback_cb' => "false", // (callable|bool) If the menu doesn't exists, a callback function will fire. Default is 'wp_page_menu'. Set to false for no fallback.
					    'theme_location' => "__no_such_location" // (string) Theme location to be used. Must be registered with register_nav_menu() in order to be selectable by the user.
					) 
				); 
				?>
				<div class="mobile-nav" id="myLinks">
					<a href="#sectionOne">Home</a>
					<a href="https://www.bluprintoncology.com/" target="_blank">BluPrint</a>
					<a href="https://www.verascityscience.com/" target="_blank">Verascity</a>
					<a href="#sectionFour">Contact Us</a>
				</div>
			</div>
		</nav>