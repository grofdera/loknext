<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package loknext
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="bg-white shadow dark:bg-gray-800">
		<div class="mx-auto bg-white max-w-7xl dark:bg-gray-800 ">
			<div class="px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
				<h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200"><?php the_title(); ?></h2>
			</div>
		</div>
	</header>

	<div class="container max-w-screen-xl px-4 mx-auto overflow-hidden text-gray-700 bg-gray-100 lg:px-8">

		<div class="relative px-4 py-6 overflow-hidden sm:px-6 sm:py-8 lg:p-12 xl:p-16">
			<h1 class="relative z-50 text-2xl font-semibold text-darken lg:pr-10">Hire us to make your own<br />
				<span class="text-yellow-500"><?php the_title(); ?></span>
			</h1>
			<p class="max-w-xl mt-2 text-base text-gray-400">
				Want to hear from us when we add new components? Sign up for our newsletter and we&#x27;ll email you every time we release a new batch of components.
			</p>
			<form>
				<div class="mt-6 sm:flex jusitfy-start">
					<form class="flex flex-col justify-center w-3/4 max-w-sm space-y-3 md:flex-row md:w-full md:space-x-3 md:space-y-0">
						<div class="relative ">
							<input type="text" id="&quot;form-subscribe-Subscribe" class="flex-1 w-full px-4 py-2 text-base text-gray-700 placeholder-gray-400 bg-white border border-transparent border-gray-300 rounded-lg shadow-sm appearance-none focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" placeholder="Email" />
						</div>
						<button class="flex-shrink-0 px-4 py-2 text-base font-semibold text-white bg-purple-600 rounded-lg shadow-md hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2 focus:ring-offset-purple-200" type="submit">
							Get Quotation
						</button>
					</form>
				</div>
			</form>
			<div class="absolute inset-y-0 right-0 hidden lg:block lg:left-2/3 xl:left-1/2">
				<?php loknext_post_thumbnail(); ?>
			</div>
		</div>


		<div class="entry-content">

			<section>
				<div class="container p-4 mx-auto bg-white max-w-7xl sm:p-6 lg:p-8 dark:bg-gray-800">
					<div class="flex flex-wrap -mx-8">
						<div class="w-full px-8 lg:w-1/2">
							<div class="pb-12 mb-12 border-b lg:mb-0 lg:pb-0 lg:border-b-0">
								<h2 class="mb-4 text-3xl font-bold lg:text-4xl font-heading dark:text-white">
									Post excrept here -- tristique interdum, at vel velit in hac habitasse platea dictumst.
								</h2>
								<p class="mb-8 leading-loose text-gray-500 dark:text-gray-300">
									<?php the_content(); ?>
								</p>
								<div class="w-full md:w-1/3">
									<button type="button" class="w-full px-4 py-2 text-base font-semibold text-center text-white transition duration-200 ease-in bg-indigo-600 rounded-lg shadow-md hover:bg-indigo-700 focus:ring-indigo-500 focus:ring-offset-indigo-200 focus:outline-none focus:ring-2 focus:ring-offset-2 ">
										Request a Demo
									</button>
								</div>
							</div>
						</div>
						<div class="w-full px-8 lg:w-1/2">
							<ul class="space-y-12">
								<li class="flex -mx-4">
									<div class="px-4">
										<span class="flex items-center justify-center w-16 h-16 mx-auto text-2xl font-bold text-blue-600 rounded-full font-heading bg-blue-50">
											1
										</span>
									</div>
									<div class="px-4">
										<h3 class="my-4 text-xl font-semibold dark:text-white">
											Feature@1 -- L1@1
										</h3>
										<p class="leading-loose text-gray-500 dark:text-gray-300">
											All elements are responsive and provide the best display in all screen size. It&#x27;s magic !
										</p>
									</div>
								</li>
								<li class="flex -mx-4">
									<div class="px-4">
										<span class="flex items-center justify-center w-16 h-16 mx-auto text-2xl font-bold text-blue-600 rounded-full font-heading bg-blue-50">
											2
										</span>
									</div>
									<div class="px-4">
										<h3 class="my-4 text-xl font-semibold dark:text-white">
											Flexible Team
										</h3>
										<p class="leading-loose text-gray-500 dark:text-gray-300">
											Flexibility is the key. All team is available 24/24 and joinable every day on our hotline.
										</p>
									</div>
								</li>
								<li class="flex -mx-4">
									<div class="px-4">
										<span class="flex items-center justify-center w-16 h-16 mx-auto text-2xl font-bold text-blue-600 rounded-full font-heading bg-blue-50">
											3
										</span>
									</div>
									<div class="px-4">
										<h3 class="my-4 text-xl font-semibold dark:text-white">
											Ecologic Software
										</h3>
										<p class="leading-loose text-gray-500 dark:text-gray-300">
											Our Software are ecologic and responsable. Green is not just a color, it&#x27;s a way of life.
										</p>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</section>
		</div><!-- .entry-content -->
	</div>
</article><!-- #post-<?php the_ID(); ?> -->