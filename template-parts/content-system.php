<?php

/**
 * Template part for displaying archive,tag,category content in archive.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cyber
 */

?>

<article id="post-<?php the_ID(); ?>" class="w-full p-4 md:w-1/2">
    <div class="p-6 bg-gray-200 rounded-lg">
        <img class="object-cover object-center w-full h-40 mb-6 rounded" src="<?php echo get_template_directory_uri(); ?>/img/demo-image.png" alt="content">
        <h3 class="text-xs font-medium tracking-widest text-indigo-500 title-font"><?php the_category(', '); ?></h3>
        <h2 class="mb-4 text-lg font-medium text-gray-900 title-font"><?php echo '<a href="' . get_permalink() . '">' . get_the_title() . '</a>'; ?></h2>
        <p class="text-base leading-relaxed truncate"><?php echo get_field('post_synopsis'); ?></p>
        <div class="inline-flex items-center">
            <img class="flex-shrink-0 object-cover object-center w-8 h-8 rounded-full" src="<?php echo get_template_directory_uri(); ?>/img/avatar.svg" alt="user avatar">
            <span class="flex flex-col flex-grow pl-3">
                <span class="font-medium text-gray-900 title-font">
                    <a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>"><?php echo esc_html(get_the_author()); ?></a>
                </span>

            </span>

        </div>
        <span class="block w-full text-xs border-b-2">on <?php echo get_the_date('F j, Y'); ?></span>
    </div>
</article><!-- #post-<?php the_ID(); ?> -->