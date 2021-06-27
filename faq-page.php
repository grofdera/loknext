<?php

/**
 * Template Name: FAQ page
 *
 * The template for displaying all pages
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
    <div class="px-4 py-20 bg-lightblue">
        <div class="flex flex-col max-w-6xl mx-auto md:flex-row">
            <h2 class="w-full mr-8 text-3xl font-extrabold leading-9 md:w-1/3">
                Frequently-asked questions
            </h2>
            <?php the_content(); ?>
        </div>
    </div>

</main><!-- #main -->

<?php
get_footer();
