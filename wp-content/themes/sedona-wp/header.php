<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sedona-WP
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
	<link rel="icon" type="<?php echo get_template_directory_uri(); ?>/image/png" sizes="32x32" href="images/favicon.png">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
	<?php wp_head(); ?> 
</head>

<body <?php body_class(); ?>> 
	<div class="page-container">
		<header class="page-header">
			<a class="logo">
				<img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" width="140" height="70" alt="Логотип города Седона">
			</a>
			<nav class="navigation">
				<ul class="navigation-list">
					<li class="navigation-item">
						<a class="navigation-link navigation-link-current">Главная</a>
					</li>
					<li class="navigation-item">
						<a class="navigation-link" href="#">О Седоне</a>
					</li>
					<li class="navigation-item">
						<a class="navigation-link" href="catalog.html">Гостиницы</a>
					</li>
				</ul>
				<ul class="navigation-list navigation-user">
					<li class="navigation-item">
						<a class="navigation-link" href="#" aria-label="Поиск">
							<svg width="19" height="19" viewBox="0 0 19 19" xmlns="http://www.w3.org/2000/svg">
								<path
									d="M18.8928 17.0083L15.1928 13.3287C16.1928 12.0359 16.8928 10.3453 16.8928 8.4558C16.8928 4.08011 13.2928 0.5 8.89282 0.5C4.49282 0.5 0.892822 4.17956 0.892822 8.55525C0.892822 12.9309 4.49282 16.511 8.89282 16.511C10.6928 16.511 12.3928 15.9144 13.7928 14.8204L17.4928 18.5L18.8928 17.0083ZM8.89282 14.5221C5.59282 14.5221 2.89282 11.837 2.89282 8.55525C2.89282 5.27348 5.59282 2.5884 8.89282 2.5884C12.1928 2.5884 14.8928 5.27348 14.8928 8.55525C14.8928 11.837 12.1928 14.5221 8.89282 14.5221Z" />
							</svg>
						</a>
					</li>
					<li class="navigation-item">
						<a class="navigation-link navigation-link-favourites" href="#" aria-label="Избранное">
							<svg width="19" height="17" viewBox="0 0 19 17" xmlns="http://www.w3.org/2000/svg">
								<path id="Vector"
									d="M9.29282 17C8.99282 17 8.69282 16.9 8.49282 16.6C3.09282 10.5 1.79282 9.1 1.49282 8.7C0.792822 7.8 0.392822 6.6 0.392822 5.4C0.392822 2.4 2.79282 0 5.89282 0C7.19282 0 8.39282 0.5 9.39282 1.3C10.3928 0.5 11.6928 0 12.8928 0C15.8928 0 18.3928 2.4 18.3928 5.4C18.3928 6.7 17.8928 7.9 17.0928 8.8L10.0928 16.7C9.89282 16.9 9.69282 17 9.29282 17ZM3.29282 7.5C3.59282 7.9 6.79282 11.5 9.39282 14.4L15.5928 7.4C16.0928 6.9 16.2928 6.2 16.2928 5.4C16.2928 3.6 14.7928 2.1 12.9928 2.1C11.9928 2.1 10.9928 2.6 10.2928 3.4C9.99282 3.7 9.69282 3.8 9.39282 3.8C9.09282 3.8 8.79282 3.6 8.59282 3.4C7.89282 2.6 6.89282 2.1 5.89282 2.1C4.09282 2.1 2.59282 3.6 2.59282 5.4C2.49282 6.3 2.89282 7 3.29282 7.5C3.19282 7.5 3.19282 7.5 3.29282 7.5Z" />
							</svg>
						</a>
					</li>
					<li class="navigation-item navigation-button">
						<a class="button modal-window-open-button" href="#">Хочу сюда!</a>
					</li>
				</ul>
			</nav>
		</header>