<?php

/**
 *
 * The template for displaying Online Class in online-class template
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

<main id="primary" class="site-main">

    <div class="w-full p-12">
        <div class="flex items-end justify-between mb-12 header">
            <div class="title">
                <p class="mb-4 text-4xl font-bold text-gray-800">
                    Lastest articles
                </p>
                <p class="text-2xl font-light text-gray-400">
                    All article are verified by 2 experts and valdiate by the CTO
                </p>
            </div>
            <div class="text-end">
                <form class="flex w-full max-w-sm space-x-3">
                    <div class="relative ">
                        <input type="text" id="&quot;form-subscribe-Search" class="flex-1 w-full px-4 py-2 text-base text-gray-700 placeholder-gray-400 bg-white border border-transparent border-gray-300 rounded-lg shadow-sm appearance-none focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" placeholder="Enter a title" />
                    </div>
                    <button class="flex-shrink-0 px-4 py-2 text-base font-semibold text-white bg-purple-600 rounded-lg shadow-md hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2 focus:ring-offset-purple-200" type="submit">
                        Search
                    </button>
                </form>
            </div>
        </div>
        <div class="grid grid-cols-1 gap-12 md:grid-cols-2 xl:grid-cols-3">
            <div class="m-auto overflow-hidden rounded-lg shadow-lg cursor-pointer h-90 w-60 md:w-80"><a class="block w-full h-full" href="#">
                    <img class="w-full border border-indigo-500 max-h-40" src="/wp-content/uploads/2021/06/activity2.png" alt="blog photo" /></a>
                <div class="w-full p-4 bg-white">
                    <p class="font-medium text-indigo-500 text-md">Video</p>
                    <p class="mb-2 text-xl font-medium text-gray-800">Work at home</p>
                    <p class="font-light text-gray-400 text-md">Work at home, remote, is the new age of the job, every person can work at home....</p>
                </div>
                &nbsp;
            </div>

            <div class="m-auto overflow-hidden rounded-lg shadow-lg cursor-pointer h-90 w-60 md:w-80"><a class="block w-full h-full" href="#">
                    <img class="w-full border border-indigo-500 max-h-40" src="/wp-content/uploads/2021/06/activity2.png" alt="blog photo" /></a>
                <div class="w-full p-4 bg-white">
                    <p class="font-medium text-indigo-500 text-md">Video</p>
                    <p class="mb-2 text-xl font-medium text-gray-800">Work at home</p>
                    <p class="font-light text-gray-400 text-md">Work at home, remote, is the new age of the job, every person can work at home....</p>
                </div>
                &nbsp;
            </div>

            <div class="m-auto overflow-hidden rounded-lg shadow-lg cursor-pointer h-90 w-60 md:w-80"><a class="block w-full h-full" href="#">
                    <img class="w-full border border-indigo-500 max-h-40" src="/wp-content/uploads/2021/06/activity2.png" alt="blog photo" /></a>
                <div class="w-full p-4 bg-white">
                    <p class="font-medium text-indigo-500 text-md">Video</p>
                    <p class="mb-2 text-xl font-medium text-gray-800">Work at home</p>
                    <p class="font-light text-gray-400 text-md">Work at home, remote, is the new age of the job, every person can work at home....</p>
                </div>
                &nbsp;
            </div>

            <div class="m-auto overflow-hidden rounded-lg shadow-lg cursor-pointer h-90 w-60 md:w-80"><a class="block w-full h-full" href="#">
                    <img class="w-full border border-indigo-500 max-h-40" src="/wp-content/uploads/2021/06/activity2.png" alt="blog photo" /></a>
                <div class="w-full p-4 bg-white">
                    <p class="font-medium text-indigo-500 text-md">Video</p>
                    <p class="mb-2 text-xl font-medium text-gray-800">Work at home</p>
                    <p class="font-light text-gray-400 text-md">Work at home, remote, is the new age of the job, every person can work at home....</p>
                </div>
                &nbsp;
            </div>

            <div class="m-auto overflow-hidden rounded-lg shadow-lg cursor-pointer h-90 w-60 md:w-80"><a class="block w-full h-full" href="#">
                    <img class="w-full border border-indigo-500 max-h-40" src="/wp-content/uploads/2021/06/activity2.png" alt="blog photo" /></a>
                <div class="w-full p-4 bg-white">
                    <p class="font-medium text-indigo-500 text-md">Video</p>
                    <p class="mb-2 text-xl font-medium text-gray-800">Work at home</p>
                    <p class="font-light text-gray-400 text-md">Work at home, remote, is the new age of the job, every person can work at home....</p>
                </div>
                &nbsp;
            </div>

            <div class="m-auto overflow-hidden rounded-lg shadow-lg cursor-pointer h-90 w-60 md:w-80"><a class="block w-full h-full" href="#">
                    <img class="w-full border border-indigo-500 max-h-40" src="/wp-content/uploads/2021/06/activity2.png" alt="blog photo" /></a>
                <div class="w-full p-4 bg-white">
                    <p class="font-medium text-indigo-500 text-md">Video</p>
                    <p class="mb-2 text-xl font-medium text-gray-800">Work at home</p>
                    <p class="font-light text-gray-400 text-md">Work at home, remote, is the new age of the job, every person can work at home....</p>
                </div>
                &nbsp;
            </div>
        </div>
    </div>

</main><!-- #main -->

<?php
get_footer();
