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
	<div id="page" class="bg-gray-100 site">
		<div class="flex items-center justify-between w-full h-16 px-4 mx-auto overflow-hidden lg:px-8" style="background-color: rgba(37, 38, 65, 1);">
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
							echo '<a href="' . $menu_item->url . '" class="px-3 py-2 text-sm font-medium text-gray-200 rounded-md hover:text-white hover:bg-gray-600 focus:outline-none focus:text-white focus:bg-gray-600">' . $menu_item->title . '</a>';
						}
					}
					?>
					<?php get_search_form(); ?>
				</div>
			</div>
			<div class="flex items-center md:ml-6">
				<button class="p-1 text-white bg-yellow-500 border-2 border-transparent rounded-full hover:text-white focus:outline-none focus:text-white focus:bg-gray-600">
					<svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
					</svg>
				</button>
				<button class="flex items-center max-w-xs ml-3 text-sm text-yellow-500 border border-gray-500 rounded-full focus:outline-none focus:shadow-solid">
					<svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z" />
					</svg>
				</button>
				<button class="inline-flex items-center justify-center p-2 ml-3 text-gray-300 border border-gray-500 rounded-md hover:text-white hover:bg-gray-600 focus:outline-none focus:bg-gray-600 focus:text-white">
					<svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
					</svg>
				</button>
				<!--link page   Need help? Hire eBusiness Technician -->
			</div>
		</div>
		<nav id="site-navigation" class="items-center w-full md:hidden main-navigation" style="background-color: rgba(37, 38, 65, 1);">
			<button class="inline-flex items-center w-full px-4 py-2 font-bold text-white bg-gray-500 outline-none focus:outline-none hover:bg-gray-700 menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e('', 'navtest'); ?>
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