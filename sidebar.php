<?php

/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package loknext
 */

if (!is_active_sidebar('sidebar-1')) {
	return;
}
?>

<ul class="flex flex-wrap justify-between max-w-screen-md mx-auto text-lg font-light">
	<?php dynamic_sidebar('sidebar-1'); ?>
</ul><!-- #secondary -->