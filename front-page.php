<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package loknext
 */

get_header();
?>
<!-- front -->
<div class="bg-darken" style="background-color: rgba(37, 38, 65, 1);">
    <div class="flex flex-col items-start max-w-screen-xl px-8 mx-auto lg:flex-row">
        <!--Left Col-->
        <div class="flex flex-col items-start justify-center w-full mb-5 text-center lg:w-6/12 lg:pt-24 lg:text-left md:mb-0">
            <h1 data-aos="fade-right" data-aos-once="true" class="my-4 text-5xl font-bold leading-tight text-indigo-500 text-darken">
                Data-aware <span class="text-yellow-500">Business Technology</span> Solution
            </h1>
            <p data-aos="fade-down" data-aos-once="true" data-aos-delay="300" class="mx-auto mb-8 text-5xl leading-normal text-white lg:mx-0">for Online Store/Pasal</p>
            <div data-aos="fade-up" data-aos-once="true" data-aos-delay="700" class="items-center justify-center w-full md:flex lg:justify-start md:space-x-5">
                <button class="flex py-4 text-xl font-bold text-white transition duration-300 ease-in-out transform bg-yellow-500 rounded-full lg:mx-0 px-9 focus:outline-none hover:scale-110">

                    Request Demo
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6 ml-1" viewBox="0 0 512 512">
                        <path d="M99.617 8.057a50.191 50.191 0 00-38.815-6.713l230.932 230.933 74.846-74.846L99.617 8.057zM32.139 20.116c-6.441 8.563-10.148 19.077-10.148 30.199v411.358c0 11.123 3.708 21.636 10.148 30.199l235.877-235.877L32.139 20.116zM464.261 212.087l-67.266-37.637-81.544 81.544 81.548 81.548 67.273-37.64c16.117-9.03 25.738-25.442 25.738-43.908s-9.621-34.877-25.749-43.907zM291.733 279.711L60.815 510.629c3.786.891 7.639 1.371 11.492 1.371a50.275 50.275 0 0027.31-8.07l266.965-149.372-74.849-74.847z"></path>
                    </svg>
                </button>
                <div class="flex items-center justify-center mt-5 space-x-3 transition duration-300 ease-in-out transform md:mt-0 focus:outline-none hover:scale-110">
                    <button class="flex items-center justify-center bg-white rounded-full w-14 h-14">
                        <svg class="w-5 h-5 ml-2" viewBox="0 0 24 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M22.5751 12.8097C23.2212 13.1983 23.2212 14.135 22.5751 14.5236L1.51538 27.1891C0.848878 27.5899 5.91205e-07 27.1099 6.25202e-07 26.3321L1.73245e-06 1.00123C1.76645e-06 0.223477 0.848877 -0.256572 1.51538 0.14427L22.5751 12.8097Z" fill="#23BDEE" />
                        </svg>
                    </button>
                    <span class="text-white cursor-pointer">Watch DemoPasal examples</span>
                </div>
            </div>
        </div>
        <!--Right Col-->
        <div class="relative w-full lg:w-6/12 lg:bottom-12" id="girl">
            <img data-aos="fade-up" data-aos-once="true" class="w-10/12 mx-auto 2xl:-mb-20" src="<?php echo get_template_directory_uri(); ?>/img/main.png" />
            <!-- calendar -->
            <div data-aos="fade-up" data-aos-delay="300" data-aos-once="true" class="absolute top-32 -left-6 sm:top-32 sm:left-10 md:top-40 md:left-16 lg:-left-0 lg:top-52 floating-4">
                <img class="h-12 bg-white rounded-lg bg-opacity-80 sm:h-16" src="<?php echo get_template_directory_uri(); ?>/img/calendar.svg">
            </div>
            <!-- red -->
            <div data-aos="fade-up" data-aos-delay="400" data-aos-once="true" class="absolute top-20 right-10 sm:right-24 sm:top-28 md:top-36 md:right-32 lg:top-32 lg:right-16 floating">
                <svg class="h-16 sm:h-24" viewBox="0 0 149 149" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g filter="url(#filter0_d)">
                        <rect x="40" y="32" width="69" height="69" rx="14" fill="#F3627C" />
                    </g>
                    <rect x="51.35" y="44.075" width="47.3" height="44.85" rx="8" fill="white" />
                    <path d="M74.5 54.425V78.575" stroke="#F25471" stroke-width="4" stroke-linecap="round" />
                    <path d="M65.875 58.7375L65.875 78.575" stroke="#F25471" stroke-width="4" stroke-linecap="round" />
                    <path d="M83.125 63.9125V78.575" stroke="#F25471" stroke-width="4" stroke-linecap="round" />
                    <defs>
                        <filter id="filter0_d" x="0" y="0" width="149" height="149" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                            <feOffset dy="8" />
                            <feGaussianBlur stdDeviation="20" />
                            <feColorMatrix type="matrix" values="0 0 0 0 0.825 0 0 0 0 0.300438 0 0 0 0 0.396718 0 0 0 0.26 0" />
                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow" />
                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape" />
                        </filter>
                    </defs>
                </svg>
            </div>
            <!-- ux class -->
            <div data-aos="fade-up" data-aos-delay="500" data-aos-once="true" class="absolute top-2 -left-4 sm:left-2 sm:top-2 lg:top-12 lg:-left-4 floating">
                <img class="h-20 bg-white rounded-lg bg-opacity-20 sm:h-28" src="<?php echo get_template_directory_uri(); ?>/img/chart-output.png" alt="">
            </div>
            <!-- ux class -->
            <div data-aos="fade-up" data-aos-delay="500" data-aos-once="true" class="absolute bottom-14 -left-4 sm:left-2 sm:bottom-20 lg:bottom-12 lg:-left-4 floating">
                <img class="h-20 p-2 bg-white rounded-lg bg-opacity-20 sm:h-28" src="<?php echo get_template_directory_uri(); ?>/img/data-input.png" alt="">
            </div>
            <!-- congrats -->
            <div data-aos="fade-up" data-aos-delay="600" data-aos-once="true" class="absolute bottom-20 md:bottom-48 lg:bottom-52 -right-6 lg:right-8 floating-4">
                <img class="h-12 bg-white rounded-lg bg-opacity-80 sm:h-16" src="<?php echo get_template_directory_uri(); ?>/img/congrat.svg" alt="">
            </div>
        </div>
    </div>
    <div data-aos="fade-up" data-aos-delay="400" data-aos-once="true" class="text-white floating aos-init aos-animate">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-24 h-24 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 13l-7 7-7-7m14-8l-7 7-7-7" />
        </svg>
    </div>
    <div class="relative z-40 -mt-24 text-gray-100">
        <svg class="xl:h-40 xl:w-full" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M600,112.77C268.63,112.77,0,65.52,0,7.23V120H1200V7.23C1200,65.52,931.37,112.77,600,112.77Z" fill="currentColor"></path>
        </svg>
    </div>
</div>

<!-- container -->
<div class="container max-w-screen-xl px-4 mx-auto overflow-x-hidden text-gray-700 bg-gray-100 lg:px-8">
    <!-- All-In-One Cloud Software. -->
    <div data-aos="flip-up" class="max-w-xl mx-auto mt-24 text-center">
        <h1 class="my-3 text-2xl font-bold text-darken">Our Most used <span class="text-yellow-500">DevOps Tech Stack.</span></h1>
        <p class="leading-relaxed text-gray-500">Lokbidhi uses these Technology to make WebApp and Data Analytics Software</p>
    </div>

    <!-- tech stack -->
    <div class="mx-auto max-w-7xl">
        <div class="holder">
            <div data-aos="fade-up" class="pill">
                <div class="p-2 bg-white border rounded-full">
                    <img class="w-12 h-12" src="<?php echo get_template_directory_uri(); ?>/img/stack/figma.svg" alt="language-icon">
                </div>
                <p class="mt-3 mb-10 text-xs font-bold">Figma</p>
            </div>
            <div data-aos="fade-up" class="pill">
                <div class="p-2 bg-white border rounded-full">
                    <img class="w-12 h-12" src="<?php echo get_template_directory_uri(); ?>/img/stack/wordpress.svg" alt="language-icon">
                </div>
                <p class="mt-3 mb-10 text-xs font-bold">Wordpress</p>
            </div>
            <div data-aos="fade-up" class="pill">
                <div class="p-2 bg-white border rounded-full">
                    <img class="w-12 h-12" src="<?php echo get_template_directory_uri(); ?>/img/stack/magento.svg" alt="language-icon">
                </div>
                <p class="mt-3 mb-10 text-xs font-bold">Magento</p>
            </div>
            <div data-aos="fade-up" data-aos-delay="100" class="pill">
                <div class="p-2 bg-white border rounded-full">
                    <img class="w-12 h-12" src="<?php echo get_template_directory_uri(); ?>/img/stack/laravel.svg" alt="language-icon">
                </div>
                <p class="mt-3 mb-10 text-xs font-bold">Laravel VueJs</p>
            </div>
            <div data-aos="fade-up" data-aos-delay="100" class="pill">
                <div class="p-2 bg-white border rounded-full">
                    <img class="w-12 h-12" src="<?php echo get_template_directory_uri(); ?>/img/stack/react.svg" alt="language-icon">
                </div>
                <p class="mt-3 mb-10 text-xs font-bold">React/ Native</p>
            </div>
            <div data-aos="fade-up" data-aos-delay="100" class="pill">
                <div class="p-2 bg-white border rounded-full">
                    <img class="w-12 h-12" src="<?php echo get_template_directory_uri(); ?>/img/stack/android.svg" alt="language-icon">
                </div>
                <p class="mt-3 mb-10 text-xs font-bold">Android/ Flutter</p>
            </div>
            <div data-aos="fade-up" data-aos-delay="150" class="pill">
                <div class="p-2 bg-white border rounded-full">
                    <img class="w-12 h-12 rounded-lg" src="<?php echo get_template_directory_uri(); ?>/img/stack/facebook.svg" alt="language-icon">
                </div>
                <p class="mt-3 mb-10 text-xs font-bold">SEO/SMO, fb-Boost</p>
            </div>
            <div data-aos="fade-up" data-aos-delay="150" class="pill">
                <div class="p-2 bg-white border rounded-full">
                    <img class="w-12 h-12" src="<?php echo get_template_directory_uri(); ?>/img/stack/docker.svg" alt="language-icon">
                </div>
                <p class="mt-3 mb-10 text-xs font-bold">Docker</p>
            </div>
            <div data-aos="fade-up" data-aos-delay="150" class="pill">
                <div class="p-2 bg-white border rounded-full">
                    <img class="w-12 h-12 bg-auto" src="<?php echo get_template_directory_uri(); ?>/img/stack/excel.png" alt="language-icon">
                </div>
                <p class="mt-3 mb-10 text-xs font-bold">MS Excel</p>
            </div>
            <div data-aos="fade-up" data-aos-delay="200" class="pill">
                <div class="p-2 bg-white border rounded-full">
                    <img class="w-12 h-12" src="<?php echo get_template_directory_uri(); ?>/img/stack/anaconda.svg" alt="language-icon">
                </div>
                <p class="mt-3 mb-10 text-xs font-bold">Anaconda</p>
            </div>
            <div data-aos="fade-up" data-aos-delay="200" class="pill">
                <div class="p-2 bg-white border rounded-full">
                    <img class="w-12 h-12" src="<?php echo get_template_directory_uri(); ?>/img/stack/r.svg" alt="language-icon">
                </div>
                <p class="mt-3 mb-10 text-xs font-bold">SAS, Shiny</p>
            </div>
            <div data-aos="fade-up" data-aos-delay="200" class="pill">
                <div class="p-2 bg-white border rounded-full">
                    <img class="w-12 h-12" src="<?php echo get_template_directory_uri(); ?>/img/stack/superset.svg" alt="language-icon">
                </div>
                <p class="mt-3 mb-10 text-xs font-bold">Apache Superset</p>
            </div>
        </div>
    </div>
    <!-- All-In-One Cloud Software. -->
    <div data-aos="flip-up" class="max-w-xl mx-auto mt-24 text-center">
        <h1 class="my-3 text-2xl font-bold text-darken">Experience our <span class="text-yellow-500">Core Services.</span></h1>
        <p class="leading-relaxed text-gray-500">LokBidhi provides great services to their clients. Explore our complete Business Technology solutions at your finger tip with online support.</p>
    </div>
    <!-- card -->
    <div class="grid mt-20 md:grid-cols-3 gap-14 md:gap-5">
        <div data-aos="fade-up" class="p-6 text-center bg-white shadow-xl rounded-xl">
            <div style="background: #5B72EE;" class="flex items-center justify-center w-16 h-16 mx-auto transform -translate-y-12 rounded-full shadow-lg">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>
            </div>
            <h1 class="mb-3 text-xl font-medium lg:px-14 text-darken">WebApp Designing</h1>
            <p class="px-4 text-gray-500">Turn your shop to online pasal. We make Website and Mobile Apps ! We have 10+ years of experience to transform traditional business practices to online process workflow.</p>
            <button class="flex items-center pl-3 mx-auto my-4 space-x-3 font-medium text-yellow-500 transition duration-300 ease-in-out transform border-t border-b border-l border-yellow-500 rounded-full focus:outline-none hover:scale-110">
                <span>Make your WebApp</span>
                <div class="flex items-center justify-center border border-yellow-500 rounded-full h-14 w-14">
                    <svg class="w-5 h-5" viewBox="0 0 26 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M25.7071 8.70711C26.0976 8.31658 26.0976 7.68342 25.7071 7.2929L19.3431 0.928934C18.9526 0.538409 18.3195 0.538409 17.9289 0.928934C17.5384 1.31946 17.5384 1.95262 17.9289 2.34315L23.5858 8L17.9289 13.6569C17.5384 14.0474 17.5384 14.6805 17.9289 15.0711C18.3195 15.4616 18.9526 15.4616 19.3431 15.0711L25.7071 8.70711ZM-8.74228e-08 9L25 9L25 7L8.74228e-08 7L-8.74228e-08 9Z" fill="#F48C06"></path>
                    </svg>
                </div>
            </button>
        </div>
        <div data-aos="fade-up" data-aos-delay="150" class="p-6 text-center bg-white shadow-xl rounded-xl">
            <div style="background: #F48C06;" class="flex items-center justify-center w-16 h-16 mx-auto transform -translate-y-12 rounded-full shadow-lg">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z" />
                </svg>
            </div>
            <h1 class="mb-3 text-xl font-medium lg:px-14 text-darken">Digital Marketing</h1>
            <p class="px-4 text-gray-500">Boost your facebook page and be on top of Google search with our KhoJ Digital Marketing services. Promote your business with us.</p>
            <button class="flex items-center pl-3 mx-auto my-4 space-x-3 font-medium text-yellow-500 transition duration-300 ease-in-out transform border-t border-b border-l border-yellow-500 rounded-full focus:outline-none hover:scale-110">
                <span>Boost your WebApp</span>
                <div class="flex items-center justify-center border border-yellow-500 rounded-full h-14 w-14">
                    <svg class="w-5 h-5" viewBox="0 0 26 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M25.7071 8.70711C26.0976 8.31658 26.0976 7.68342 25.7071 7.2929L19.3431 0.928934C18.9526 0.538409 18.3195 0.538409 17.9289 0.928934C17.5384 1.31946 17.5384 1.95262 17.9289 2.34315L23.5858 8L17.9289 13.6569C17.5384 14.0474 17.5384 14.6805 17.9289 15.0711C18.3195 15.4616 18.9526 15.4616 19.3431 15.0711L25.7071 8.70711ZM-8.74228e-08 9L25 9L25 7L8.74228e-08 7L-8.74228e-08 9Z" fill="#F48C06"></path>
                    </svg>
                </div>
            </button>
        </div>
        <div data-aos="fade-up" data-aos-delay="300" class="p-6 text-center bg-white shadow-xl rounded-xl">
            <div style="background: #29B9E7;" class="flex items-center justify-center w-16 h-16 mx-auto transform -translate-y-12 rounded-full shadow-lg">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path d="M12 14l9-5-9-5-9 5 9 5z" />
                    <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                </svg>
            </div>
            <h1 class="mb-3 text-xl font-medium lg:px-14 text-darken">Computer Training</h1>
            <p class="px-4 text-gray-500">Work on live projects. Get Admission in computer courses with focus in practical learning. Participate in WebApp competiotion to Make Janakpur a Cyber city.</p>
            <button class="flex items-center pl-3 mx-auto my-4 space-x-3 font-medium text-yellow-500 transition duration-300 ease-in-out transform border-t border-b border-l border-yellow-500 rounded-full focus:outline-none hover:scale-110">
                <span>Start Learning</span>
                <div class="flex items-center justify-center border border-yellow-500 rounded-full h-14 w-14">
                    <svg class="w-5 h-5" viewBox="0 0 26 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M25.7071 8.70711C26.0976 8.31658 26.0976 7.68342 25.7071 7.2929L19.3431 0.928934C18.9526 0.538409 18.3195 0.538409 17.9289 0.928934C17.5384 1.31946 17.5384 1.95262 17.9289 2.34315L23.5858 8L17.9289 13.6569C17.5384 14.0474 17.5384 14.6805 17.9289 15.0711C18.3195 15.4616 18.9526 15.4616 19.3431 15.0711L25.7071 8.70711ZM-8.74228e-08 9L25 9L25 7L8.74228e-08 7L-8.74228e-08 9Z" fill="#F48C06"></path>
                    </svg>
                </div>
            </button>
        </div>
    </div>

    <!-- lorem -->
    <div class="mt-28">
        <div data-aos="flip-down" class="max-w-screen-md mx-auto text-center">
            <h1 class="mb-4 text-3xl font-bold">Career
                <!--work--> as an <span class="text-yellow-500">eBusiness Technician.</span>
            </h1>
            <p class="text-gray-500">We, @Lokbidhi, have built business learning tools which prepare Interns to think ahead of Market demand. <br />A computer operator job transfered to more specialized
                <!--enterprise operations-->problem-solver increases earning and insures future.<br /> Career plus Job Satisfaction, i.e. "Passion to Profession" . Interns can work on these sectors :
            </p>
        </div>
        <div data-aos="fade-up" class="flex flex-col justify-center space-y-5 md:flex-row md:space-y-0 md:space-x-6 lg:space-x-10 mt-7">
            <!-- services -->
            <div data-aos="fade-up" data-aos-delay="450" class="w-full px-2 md:w-1/4">
                <div class="px-6 py-8 bg-white rounded hover:bg-purple-lightest hover:shadow-lg">
                    <img src="https://dd7tel2830j4w.cloudfront.net/f1517340466449x405448712874203900/crm%20data%20management%20icon.svg">
                    <h3 class="mt-2 text-base font-semibold uppercase">CRM / Data Management</h3>
                    <p class="mt-2 font-light">Data is blood of new economy. Work as Data management executive in leading Industry.</p>

                </div>
            </div>
            <div data-aos="fade-up" class="w-full px-2 md:w-1/4">
                <div class="px-6 py-8 bg-white rounded hover:bg-purple-lightest hover:shadow-lg">
                    <img src="https://dd7tel2830j4w.cloudfront.net/f1517340521892x235520337941125020/martketplace%20icon.svg">
                    <h3 class="mt-2 text-base font-semibold uppercase">Marketplace</h3>
                    <p class="mt-2 font-light">Online ecommerce service is growing exponentially shaping Market to new heights. Work as a digital marketer.</p>
                </div>
            </div>
            <div data-aos="fade-up" data-aos-delay="150" class="w-full px-2 md:w-1/4">
                <div class="px-6 py-8 bg-white rounded hover:bg-purple-lightest hover:shadow-lg">
                    <img src="https://dd7tel2830j4w.cloudfront.net/f1517340502155x805167454527691000/social%20network%20icon.svg">
                    <h3 class="mt-2 text-base font-semibold uppercase">Social Network</h3>
                    <p class="mt-2 font-light">Social netowrk is new place where people meets online. Understand how Behavioral Marketing works to build a brand.</p>

                </div>
            </div>
            <div data-aos="fade-up" data-aos-delay="300" class="w-full px-2 md:w-1/4">
                <div class="px-6 py-8 bg-white rounded hover:bg-purple-lightest hover:shadow-lg">
                    <img src="https://dd7tel2830j4w.cloudfront.net/f1517340446730x226106988731771700/data%20visualization%20icon.svg">
                    <h3 class="mt-2 text-base font-semibold uppercase">Data Visualisation</h3>
                    <p class="mt-2 font-light">Working on MS Excel but there are new technologies to get better insight from data visualization. Visualize Management Information System for optimal decision making. </p>

                </div>
            </div>
        </div>
    </div>

    <button data-aos="flip-up" class="block px-5 py-3 mx-auto font-medium text-yellow-500 transition duration-300 ease-in-out transform border border-yellow-500 rounded-full my-14 focus:outline-none hover:scale-110">Join as Intern</button>

    <!-- Hire an eBusiness Technician -->
    <div class="flex flex-col items-start mt-24 md:flex-row md:space-x-10">
        <div data-aos="zoom-in-right" class="md:w-6/12">
            <img class="mx-auto md:w-8/12" src="<?php echo get_template_directory_uri(); ?>/img/experts.svg">
        </div>
        <div data-aos="zoom-in-left" class="md:w-6/12">
            <div class="flex items-center mb-5 space-x-20">
                <span class="absolute border border-gray-300 w-14"></span>
                <h1 class="text-sm tracking-widest text-gray-400">Lost in between ?</h1>
            </div>
            <h1 class="text-2xl font-semibold text-darken lg:pr-40"><span class="text-yellow-500">Need Help ?</span> Hire Expert eBusiness Technicians</h1>
            <p class="my-5 text-gray-500 lg:pr-20">Hire a expert from Lokbidhi team to get your work done.</p>
            <button class="px-5 py-3 my-4 font-medium text-yellow-500 transition duration-300 ease-in-out transform border border-yellow-500 rounded-full focus:outline-none hover:scale-110">Hire an Expert</button>
        </div>
    </div>

    <section class="mt-4 border-2 border-yellow-500">
        <div class="container grid grid-cols-2 gap-8 py-8 mx-auto text-center md:grid-cols-4">
            <div>
                <h5 class="text-5xl font-bold text-yellow-500">
                    <span class="inline customers"> +</span>
                </h5>
                <p class="text-xs font-medium tracking-wide uppercase text-darken">
                    Cups of coffee
                </p>
            </div>
            <div>
                <h5 class="text-5xl font-bold text-yellow-500">
                    <span class="inline contracts"> +</span>
                </h5>
                <p class="text-xs font-medium tracking-wide uppercase text-darken">
                    Ongoing contracts
                </p>
            </div>
            <div>
                <h5 class="text-5xl font-bold text-yellow-500">
                    <span class="inline projects"> +</span>
                </h5>
                <p class="text-xs font-medium tracking-wide uppercase text-darken">
                    Finished projects
                </p>
            </div>
            <div>
                <h5 class="text-5xl font-bold text-yellow-500">
                    <span class="inline members"> +</span>
                </h5>
                <p class="text-xs font-medium tracking-wide uppercase text-darken">
                    Years in business
                </p>
            </div>
        </div>
        <div class="flex flex-col items-center justify-center max-w-xs p-4 mx-auto mt-4">
            <a href="#demopasal" class="px-4 py-4 text-base font-bold text-white transition duration-300 ease-in-out transform rounded-full bg-darken lg:mx-0 focus:outline-none hover:scale-110">
                Buy ReadyMade* WebApp
            </a>
            <span class="text-darken w-full inline mt-3.5 tracking-wider text-xs">*One-time Free Customization as per your needs</span>
        </div>
    </section>


    <!-- Explore More -->
    <div id="demopasal" class="min-h-screen py-10 lg:py-0 lg:grid place-content-center">
        <!-- Running Instance -->
        <div data-aos="flip-up" class="max-w-xl mx-auto mt-24 mb-4 text-center">
            <h1 class="my-3 text-2xl font-bold text-darken">Ready to Sale WebApp on <span class="text-yellow-500">DemoPasal</span></h1>
            <p class="leading-relaxed text-gray-500">Check out our Live WebApp Projects' running Instance to get better Ideas about it's Workflow Process and how It can be integrated with your Business Needs.</p>
        </div>
        <div data-aos="zoom-in-up" class="items-center justify-center lg:flex lg:gap-10">
            <div class="flex-grow max-w-xs px-10 py-12 mx-auto bg-white border-t-8 border-blue-400 rounded-lg shadow-lg lg:mx-0">
                <div>
                    <h2 class="text-2xl font-semibold text-gray-900">FonePasal</h2>
                    <p class="text-gray-400 mt-2.5 text-lg">Buy, Sell, Exchange new and old Mobile Phones, electronics and gadgets.</p>
                    <button class="border border-blue-400 text-blue-400 pt-1 pb-1.5 w-full shadow-sm rounded-full inline mt-16 tracking-wider capitalize">FonePasal.com</button>
                </div>
            </div>

            <div data-aos="zoom-in-up" class="flex-grow max-w-xs px-10 pt-16 pb-10 mx-auto my-5 bg-white border-t-8 border-green-400 rounded-lg shadow-lg lg:my-0 lg:mx-0">
                <div>
                    <h2 class="text-2xl font-semibold text-gray-900 capitalize">CakePasal</h2>
                    <p class="text-gray-400 mt-2.5 text-lg">Get Gulyo Cake on your Birthday for free* when you like our facebook page and share posts.</p>
                    <button class="border border-green-400 text-white bg-green-400 pt-1 pb-1.5 w-full shadow-sm rounded-full inline tracking-wider capitalize mt-24">CakePasal.com</button>
                    <button class="text-green-400 w-full inline mt-3.5 tracking-wider uppercase text-xs">*Affiliate Marketing Program, T&C apply.</button>
                </div>
            </div>

            <div data-aos="zoom-in-up" class="flex-grow max-w-xs px-10 py-12 mx-auto bg-white border-t-8 border-indigo-400 rounded-lg shadow-lg lg:mx-0">
                <div>
                    <h2 class="text-2xl font-semibold text-gray-900">BookPasal</h2>
                    <p class="text-gray-400 mt-2.5 text-lg">Buy books, download e-learning materials like videos, case study, exam help and example workbook.</p>
                    <button class="border border-indigo-400 text-indigo-400 pt-1 pb-1.5 w-full shadow-sm rounded-full inline mt-24 tracking-wider capitalize">BookPasal.com</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- .container -->
<?php
get_sidebar();
get_footer();
