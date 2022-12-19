<?php

/**
 * Lokbidhi Online Learning Series
 * 
 * Template part for displaying series
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package loknext
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div data-aos="zoom-in" class="mt-16 text-center">
        <h1 class="text-2xl font-semibold text-darken"><?php the_title(); ?></h1>
        <p class="my-5 text-gray-500"><?php the_excerpt(); ?></p>
    </div>
    <?php the_content(); ?>

    <footer class="entry-footer">
        <?php loknext_entry_footer(); ?>
    </footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->