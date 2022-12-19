<?php
get_header();
?>
<header class="bg-white shadow dark:bg-gray-800">
    <div class="mx-auto bg-white max-w-7xl dark:bg-gray-800 ">
        <div class="px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200"><?php the_title(); ?></h2>
        </div>
    </div>
</header>
<div class="container max-w-screen-xl px-4 mx-auto overflow-hidden text-gray-700 bg-gray-100 lg:px-8">
    <?php
    $args = array(
        'posts_per_page' => 4,
        'cat' => 10
    );
    $wp_query = new WP_Query($args); ?>
    <?php
    while ($wp_query->have_posts()) : $wp_query->the_post();
    ?>
        <div class="items-center sm:flex sm:space-x-8 mt-36">
            <div data-aos="fade-right" class="relative sm:w-1/2">
                <div class="absolute z-0 w-12 h-12 bg-yellow-500 rounded-full -left-4 -top-3 animate-pulse"></div>
                <h1 class="relative z-50 text-2xl font-semibold text-darken lg:pr-10"><?php the_title(); ?><br /><span class="text-darker">Client :&nbsp;</span><span class="text-yellow-500">Ghardev Properties</span></h1>
                <p class="py-5 lg:pr-32"><?php the_excerpt(__('(more…)')); ?></p>
                <a href="<?php the_permalink(); ?>" class="flex items-center w-48 pl-3 mx-auto my-4 space-x-3 font-medium text-yellow-500 transition duration-300 ease-in-out transform border-t border-b border-l border-yellow-500 rounded-full focus:outline-none hover:scale-110">
                    <span>System Feature</span>
                    <!--use acf field or tags,eg.ghardev.com-->
                    <div class="flex items-center justify-center border border-yellow-500 rounded-full h-14 w-14">
                        <svg class="w-5 h-5" viewBox="0 0 26 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M25.7071 8.70711C26.0976 8.31658 26.0976 7.68342 25.7071 7.2929L19.3431 0.928934C18.9526 0.538409 18.3195 0.538409 17.9289 0.928934C17.5384 1.31946 17.5384 1.95262 17.9289 2.34315L23.5858 8L17.9289 13.6569C17.5384 14.0474 17.5384 14.6805 17.9289 15.0711C18.3195 15.4616 18.9526 15.4616 19.3431 15.0711L25.7071 8.70711ZM-8.74228e-08 9L25 9L25 7L8.74228e-08 7L-8.74228e-08 9Z" fill="#F48C06"></path>
                        </svg>
                    </div>
                </a>
            </div>
            <div data-aos="fade-left" class="relative mt-10 sm:w-1/2 sm:mt-0">
                <div style="background: #23BDEE;" class="absolute z-0 w-24 h-24 rounded-lg floating -top-3 -left-3"></div>
                <img class="relative z-40 rounded-xl" src="<?php echo get_template_directory_uri(); ?>/img/system.png" alt="">
                <div class="absolute z-10 w-40 h-40 bg-yellow-500 rounded-lg floating -bottom-3 -right-3"></div>
            </div>
        </div>
    <?php
    endwhile;
    wp_reset_postdata();
    ?>
</div>
<?php
get_footer();
