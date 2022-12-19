<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package loknext
 */

get_header();
?>

<main id="primary" class="site-main">
	<?php
	while (have_posts()) :
		the_post();
		if (is_category('series')) {
			get_template_part('content', 'series');
		} else {
			get_template_part('template-parts/content', get_post_type());
		}

		// keep features addition here
		// If comments are open or we have at least one comment, load up the comment template.
		if (comments_open() || get_comments_number()) :
			comments_template();
		endif;

	endwhile; // End of the loop.
	?>
	<?php
	the_post_navigation(
		array(
			'prev_text' => '<span class="nav-subtitle">' . esc_html__('Previous:', 'loknext') . '</span> <span class="nav-title">%title</span>',
			'next_text' => '<span class="nav-subtitle">' . esc_html__('Next:', 'loknext') . '</span> <span class="nav-title">%title</span>',
		)
	); ?>
</main><!-- #main -->

<?php
get_sidebar();
get_footer();
