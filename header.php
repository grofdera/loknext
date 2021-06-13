<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package loknext
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<div class="flex items-center justify-between w-full h-16 px-4 mx-auto overflow-hidden bg-indigo-700 lg:px-8">
			<div class="flex items-center flex-shrink-0">
				<svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="#6875f5" viewBox="0 0 24 24" stroke="#ffffff">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 14v6m-3-3h6M6 10h2a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2zm10 0h2a2 2 0 002-2V6a2 2 0 00-2-2h-2a2 2 0 00-2 2v2a2 2 0 002 2zM6 20h2a2 2 0 002-2v-2a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2z" />
				</svg>
				<h1 class="font-bold tracking-widest text-white site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
			</div>
			<div class="hidden md:block">
				<div class="flex items-baseline ml-10">
					<?php
					// Check if menu exists
					if ($menu_items = wp_get_nav_menu_items('menu-1')) {

						// Loop over menu items
						foreach ($menu_items as $menu_item) {

							// Print menu item
							echo '<a href="' . $menu_item->url . '" class="px-3 py-2 text-sm font-medium text-indigo-200 rounded-md hover:text-white hover:bg-indigo-600 focus:outline-none focus:text-white focus:bg-indigo-600">' . $menu_item->title . '</a>';
						}
					}
					?>
					<?php get_search_form(); ?>
				</div>
			</div>
			<div class="flex items-center md:ml-6">
				<button class="p-1 text-white bg-indigo-500 border-2 border-transparent rounded-full hover:text-white focus:outline-none focus:text-white focus:bg-indigo-600">
					<svg class="w-6 h-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
					</svg>
				</button>
				<button class="flex items-center max-w-xs ml-3 text-sm text-white border border-indigo-500 rounded-full focus:outline-none focus:shadow-solid">
					<svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z" />
					</svg>
				</button>
				<button class="inline-flex items-center justify-center p-2 ml-3 text-indigo-300 border border-indigo-500 rounded-md hover:text-white hover:bg-indigo-600 focus:outline-none focus:bg-indigo-600 focus:text-white">
					<svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
					</svg>
				</button>
			</div>
		</div>
		<nav id="site-navigation" class="items-center w-full bg-indigo-700 md:hidden main-navigation">
			<button class="inline-flex items-center w-full px-4 py-2 font-bold text-white bg-indigo-500 outline-none focus:outline-none hover:bg-indigo-700 menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e('', 'navtest'); ?>
				<svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16" />
				</svg> Startup menu
			</button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
					'menu_class'    => 'main-navigation',
				)
			);
			?>
		</nav><!-- #site-navigation -->