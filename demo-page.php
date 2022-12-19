<?php

/**
 * Template Name: Demo page
 * Template Post Type: post, page, product
 * 
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package loknext
 */

get_header();
?>

<main id="primary" class="container mx-auto max-w-7xl">
    <!-- Latest News and Resources -->
    <div data-aos="zoom-in" class="mt-16 text-center">
        <h1 class="text-2xl font-semibold text-darken"><?php the_title(); ?></h1>
        <p class="my-5 text-gray-500"><?php the_excerpt(); ?></p>
    </div>
    <?php the_content(); ?>

</main><!-- #main -->

<?php
get_footer();
