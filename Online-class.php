<?php

/**
 * Template Name: Online Class
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

    <div class="w-full p-2">
        <div class="items-end justify-between mb-12 header">
            <div class="title">
                <p class="mb-4 text-4xl font-bold text-gray-800">
                    Online Classes
                </p>
                <p class="text-2xl font-light text-gray-400">
                    Enroll into any recorded online classes to know about eBusiness Technician Course
                </p>
            </div>
            <div class="text-end">
                <div class="flex w-full max-w-sm space-x-3">

                    <span class="flex-1 w-full px-4 py-2 text-base text-gray-700 border border-gray-300 rounded-lg shadow-sm">
                        Check out live Online class
                        <svg xmlns="http://www.w3.org/2000/svg" class="inline-flex w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </span>

                    <a href="https://facebook.com/lokbidhiedu" target=_blank class="flex-shrink-0 px-4 py-2 text-base font-semibold text-white bg-purple-600 rounded-lg shadow-md hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2 focus:ring-offset-purple-200" type="submit">
                        fbPage
                    </a>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-1 gap-y-8 md:grid-cols-2 xl:grid-cols-3">
            <?php the_content(); ?>
        </div>
    </div>

</main><!-- #main -->

<?php
get_footer();
