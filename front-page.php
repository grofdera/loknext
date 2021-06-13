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
<div class="topsvg" style="background-color: rgba(37, 38, 65, 1);">
    <div class="flex flex-col items-start max-w-screen-xl px-8 mx-auto lg:flex-row">
        <!--Left Col-->
        <div class="flex flex-col items-start justify-center w-full mb-5 text-center lg:w-6/12 lg:pt-24 lg:text-left md:mb-0">
            <h1 data-aos="fade-right" data-aos-once="true" class="my-4 text-5xl font-bold leading-tight text-indigo-500 text-darken">
                Data-driven <span class="text-yellow-500">Business Technology</span> Solution
            </h1>
            <p data-aos="fade-down" data-aos-once="true" data-aos-delay="300" class="mx-auto mb-8 text-5xl leading-normal lg:mx-0">for Online Store/Pasal</p>
            <div data-aos="fade-up" data-aos-once="true" data-aos-delay="700" class="items-center justify-center w-full md:flex lg:justify-start md:space-x-5">
                <button class="py-4 text-xl font-bold text-white transition duration-300 ease-in-out transform bg-yellow-500 rounded-full lg:mx-0 px-9 focus:outline-none hover:scale-110">
                    Request Demo
                </button>
                <div class="flex items-center justify-center mt-5 space-x-3 transition duration-300 ease-in-out transform md:mt-0 focus:outline-none hover:scale-110">
                    <button class="flex items-center justify-center bg-white rounded-full w-14 h-14">
                        <svg class="w-5 h-5 ml-2" viewBox="0 0 24 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M22.5751 12.8097C23.2212 13.1983 23.2212 14.135 22.5751 14.5236L1.51538 27.1891C0.848878 27.5899 5.91205e-07 27.1099 6.25202e-07 26.3321L1.73245e-06 1.00123C1.76645e-06 0.223477 0.848877 -0.256572 1.51538 0.14427L22.5751 12.8097Z" fill="#23BDEE" />
                        </svg>
                    </button>
                    <span class="cursor-pointer">Watch DemoPasal examples</span>
                </div>
            </div>
        </div>
        <!--Right Col-->
        <div class="relative w-full lg:w-6/12 lg:bottom-12" id="girl">
            <img data-aos="fade-up" data-aos-once="true" class="w-10/12 mx-auto 2xl:-mb-20" src="img/main.png" />
            <!-- calendar -->
            <div data-aos="fade-up" data-aos-delay="300" data-aos-once="true" class="absolute top-32 -left-6 sm:top-32 sm:left-10 md:top-40 md:left-16 lg:-left-0 lg:top-52 floating-4">
                <img class="h-12 bg-white rounded-lg bg-opacity-80 sm:h-16" src="img/calendar.svg">
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
                <img class="h-20 bg-white rounded-lg bg-opacity-20 sm:h-28" src="img/chart-output.png" alt="">
            </div>
            <!-- ux class -->
            <div data-aos="fade-up" data-aos-delay="500" data-aos-once="true" class="absolute bottom-14 -left-4 sm:left-2 sm:bottom-20 lg:bottom-12 lg:-left-4 floating">
                <img class="h-20 p-2 bg-white rounded-lg bg-opacity-20 sm:h-28" src="img/data-input.png" alt="">
            </div>
            <!-- congrats -->
            <div data-aos="fade-up" data-aos-delay="600" data-aos-once="true" class="absolute bottom-20 md:bottom-48 lg:bottom-52 -right-6 lg:right-8 floating-4">
                <img class="h-12 bg-white rounded-lg bg-opacity-80 sm:h-16" src="img/congrat.svg" alt="">
            </div>
        </div>
    </div>

</div>

<!-- container -->
<div class="container max-w-screen-xl px-4 mx-auto overflow-x-hidden text-gray-700 bg-gray-100 lg:px-8">
    <!-- All-In-One Cloud Software. -->
    <div data-aos="flip-up" class="max-w-xl mx-auto mt-24 text-center">
        <h1 class="my-3 text-2xl font-bold text-darken">Our Most used <span class="text-yellow-500">DevOps Tech Stack.</span></h1>
        <p class="leading-relaxed text-gray-500">Lokbidhi uses Technology to make WebApp and Data Analytics Software</p>
    </div>

    <!-- tech stack -->
    <div class="mx-auto max-w-7xl">
        <div class="grid grid-cols-3 gap-6 mt-12 md:grid-cols-6 lg:grid-cols-12">
            <div data-aos="fade-up" class="flex flex-col items-center p-2 transition-colors duration-700 ease-in-out border rounded-full shadow-xl cursor-pointer">
                <div class="p-2 bg-white border rounded-full">
                    <img class="w-12 h-12" src="/img/stack/figma.svg" alt="language-icon">
                </div>
                <p class="mt-3 mb-10 text-xs font-bold">Figma</p>
            </div>
            <div data-aos="fade-up" class="flex flex-col items-center p-2 transition-colors duration-700 ease-in-out border rounded-full shadow-xl cursor-pointer">
                <div class="p-2 bg-white border rounded-full">
                    <img class="w-12 h-12" src="/img/stack/wordpress.svg" alt="language-icon">
                </div>
                <p class="mt-3 mb-10 text-xs font-bold">Wordpress</p>
            </div>
            <div data-aos="fade-up" class="flex flex-col items-center p-2 transition-colors duration-700 ease-in-out border rounded-full shadow-xl cursor-pointer">
                <div class="p-2 bg-white border rounded-full">
                    <img class="w-12 h-12" src="/img/stack/magento.svg" alt="language-icon">
                </div>
                <p class="mt-3 mb-10 text-xs font-bold">Magento</p>
            </div>
            <div data-aos="fade-up" data-aos-delay="100" class="flex flex-col items-center p-2 transition-colors duration-700 ease-in-out border rounded-full shadow-xl cursor-pointer">
                <div class="p-2 bg-white border rounded-full">
                    <img class="w-12 h-12" src="/img/stack/laravel.svg" alt="language-icon">
                </div>
                <p class="mt-3 mb-10 text-xs font-bold">Laravel VueJs</p>
            </div>
            <div data-aos="fade-up" data-aos-delay="100" class="flex flex-col items-center p-2 transition-colors duration-700 ease-in-out border rounded-full shadow-xl cursor-pointer">
                <div class="p-2 bg-white border rounded-full">
                    <img class="w-12 h-12" src="/img/stack/react.svg" alt="language-icon">
                </div>
                <p class="mt-3 mb-10 text-xs font-bold">React/ Native</p>
            </div>
            <div data-aos="fade-up" data-aos-delay="100" class="flex flex-col items-center p-2 transition-colors duration-700 ease-in-out border rounded-full shadow-xl cursor-pointer">
                <div class="p-2 bg-white border rounded-full">
                    <img class="w-12 h-12" src="/img/stack/flutter.svg" alt="language-icon">
                </div>
                <p class="mt-3 mb-10 text-xs font-bold">Flutter</p>
            </div>
            <div data-aos="fade-up" data-aos-delay="150" class="flex flex-col items-center p-2 transition-colors duration-700 ease-in-out border rounded-full shadow-xl cursor-pointer">
                <div class="p-2 bg-white border rounded-full">
                    <img class="w-12 h-12 rounded-lg" src="/img/stack/facebook.svg" alt="language-icon">
                </div>
                <p class="mt-3 mb-10 text-xs font-bold">SEO, fbBoost</p>
            </div>
            <div data-aos="fade-up" data-aos-delay="150" class="flex flex-col items-center p-2 transition-colors duration-700 ease-in-out border rounded-full shadow-xl cursor-pointer">
                <div class="p-2 bg-white border rounded-full">
                    <img class="w-12 h-12" src="/img/stack/docker.svg" alt="language-icon">
                </div>
                <p class="mt-3 mb-10 text-xs font-bold">Docker</p>
            </div>
            <div data-aos="fade-up" data-aos-delay="150" class="flex flex-col items-center p-2 transition-colors duration-700 ease-in-out border rounded-full shadow-xl cursor-pointer">
                <div class="p-2 bg-white border rounded-full">
                    <img class="w-12 h-12 bg-auto" src="/img/stack/excel.png" alt="language-icon">
                </div>
                <p class="mt-3 mb-10 text-xs font-bold">MS Excel</p>
            </div>
            <div data-aos="fade-up" data-aos-delay="200" class="flex flex-col items-center p-2 transition-colors duration-700 ease-in-out border rounded-full shadow-xl cursor-pointer">
                <div class="p-2 bg-white border rounded-full">
                    <img class="w-12 h-12" src="/img/stack/anaconda.svg" alt="language-icon">
                </div>
                <p class="mt-3 mb-10 text-xs font-bold">Anaconda</p>
            </div>
            <div data-aos="fade-up" data-aos-delay="200" class="flex flex-col items-center p-2 transition-colors duration-700 ease-in-out border rounded-full shadow-xl cursor-pointer">
                <div class="p-2 bg-white border rounded-full">
                    <img class="w-12 h-12" src="/img/stack/r.svg" alt="language-icon">
                </div>
                <p class="mt-3 mb-10 text-xs font-bold">SAS, R</p>
            </div>
            <div data-aos="fade-up" data-aos-delay="200" class="flex flex-col items-center p-2 transition-colors duration-700 ease-in-out border rounded-full shadow-xl cursor-pointer">
                <div class="p-2 bg-white border rounded-full">
                    <img class="w-12 h-12" src="/img/stack/superset.svg" alt="language-icon">
                </div>
                <p class="mt-3 mb-10 text-xs font-bold">Apache Superset</p>
            </div>
        </div>
    </div>
    <!-- All-In-One Cloud Software. -->
    <div data-aos="flip-up" class="max-w-xl mx-auto mt-24 text-center">
        <h1 class="my-3 text-2xl font-bold text-darken">Experience our <span class="text-yellow-500">General Services.</span></h1>
        <p class="leading-relaxed text-gray-500">Skilline is one powerful online software suite that combines all the tools needed to run a successful school or office.</p>
    </div>
    <!-- card -->
    <div class="grid mt-20 md:grid-cols-3 gap-14 md:gap-5">
        <div data-aos="fade-up" class="p-6 text-center bg-white shadow-xl rounded-xl">
            <div style="background: #5B72EE;" class="flex items-center justify-center w-16 h-16 mx-auto transform -translate-y-12 rounded-full shadow-lg">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>
            </div>
            <h1 class="mb-3 text-xl font-medium lg:px-14 text-darken">WebApp Development</h1>
            <p class="px-4 text-gray-500">Simple and secure control of your organization’s financial and legal transactions. Send customized invoices and contracts</p>
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
            <h1 class="mb-3 text-xl font-medium lg:px-14 text-darken">Software Consulting</h1>
            <p class="px-4 text-gray-500">Schedule and reserve classrooms at one campus or multiple campuses. Keep detailed records of student attendance</p>
            <button class="flex items-center pl-3 mx-auto my-4 space-x-3 font-medium text-yellow-500 transition duration-300 ease-in-out transform border-t border-b border-l border-yellow-500 rounded-full focus:outline-none hover:scale-110">
                <span>Get Expert Help</span>
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
            <h1 class="pt-3 mb-3 text-xl font-medium lg:px-14 text-darken lg:h-14">Computer Training</h1>
            <p class="px-4 text-gray-500">Automate and track emails to individuals or groups. Skilline’s built-in system helps organize your organization </p>
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
            <h1 class="mb-4 text-3xl font-bold">Be an <span class="text-yellow-500">eBusiness Technician</span></h1>
            <p class="text-gray-500">Skilline is a platform that allows educators to create online classes whereby they can store the course materials online; manage assignments, quizzes and exams; monitor due dates; grade results and provide students with feedback all in one place.</p>
        </div>
        <div data-aos="fade-up" class="flex flex-col justify-center space-y-5 md:flex-row md:space-y-0 md:space-x-6 lg:space-x-10 mt-7">
            <!-- services -->
            <div class="flex flex-row -mx-2 lg:flex-col">
                <div data-aos="fade-up" class="w-full px-2 md:w-1/4">
                    <div class="px-6 py-8 bg-white rounded hover:bg-purple-lightest hover:shadow-lg">
                        <img src="https://dd7tel2830j4w.cloudfront.net/f1517340521892x235520337941125020/martketplace%20icon.svg">
                        <h3 class="mt-2 text-base font-semibold uppercase">Marketplace</h3>
                        <p class="mt-2 font-light">Connecting buyers and sellers in the sharing economy</p>
                    </div>
                </div>
                <div data-aos="fade-up" data-aos-delay="150" class="w-full px-2 md:w-1/4">
                    <div class="px-6 py-8 bg-white rounded hover:bg-purple-lightest hover:shadow-lg">
                        <img src="https://dd7tel2830j4w.cloudfront.net/f1517340502155x805167454527691000/social%20network%20icon.svg">
                        <h3 class="mt-2 text-base font-semibold uppercase">Social Network</h3>
                        <p class="mt-2 font-light">Connecting buyers and sellers in the sharing economy</p>

                    </div>
                </div>
                <div data-aos="fade-up" data-aos-delay="300" class="w-full px-2 md:w-1/4">
                    <div class="px-6 py-8 bg-white rounded hover:bg-purple-lightest hover:shadow-lg">
                        <img src="https://dd7tel2830j4w.cloudfront.net/f1517340446730x226106988731771700/data%20visualization%20icon.svg">
                        <h3 class="mt-2 text-base font-semibold uppercase">Data Visualisation</h3>
                        <p class="mt-2 font-light">Connecting buyers and sellers in the sharing economy</p>

                    </div>
                </div>
                <div data-aos="fade-up" data-aos-delay="450" class="w-full px-2 md:w-1/4">
                    <div class="px-6 py-8 bg-white rounded hover:bg-purple-lightest hover:shadow-lg">
                        <img src="https://dd7tel2830j4w.cloudfront.net/f1517340466449x405448712874203900/crm%20data%20management%20icon.svg">
                        <h3 class="mt-2 text-base font-semibold uppercase">CRM / Data Management</h3>
                        <p class="mt-2 font-light">Connecting buyers and sellers in the sharing economy</p>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="items-center sm:flex sm:space-x-8 mt-36">
        <div data-aos="fade-right" class="relative sm:w-1/2">
            <div class="absolute z-0 w-12 h-12 bg-yellow-500 rounded-full -left-4 -top-3 animate-pulse"></div>
            <h1 class="relative z-50 text-2xl font-semibold text-darken lg:pr-10">Everything you can do in a physical classroom, <span class="text-yellow-500">you can do with Skilline</span></h1>
            <p class="py-5 lg:pr-32">Skilline’s school management software helps traditional and online schools manage scheduling, attendance, payments and virtual classrooms all in one secure cloud-based system.</p>
            <a href="" class="underline">Learn More</a>
        </div>
        <div data-aos="fade-left" class="relative mt-10 sm:w-1/2 sm:mt-0">
            <div style="background: #23BDEE;" class="absolute z-0 w-24 h-24 rounded-lg floating -top-3 -left-3"></div>
            <img class="relative z-40 rounded-xl" src="img/lecture.jpg" alt="">
            <button class="absolute z-50 flex items-center justify-center transition duration-300 ease-in-out transform -translate-x-1/2 -translate-y-1/2 bg-white rounded-full w-14 h-14 top-1/2 left-1/2 focus:outline-none hover:scale-110">
                <svg class="w-5 h-5 ml-1" viewBox="0 0 24 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M22.5751 12.8097C23.2212 13.1983 23.2212 14.135 22.5751 14.5236L1.51538 27.1891C0.848878 27.5899 5.91205e-07 27.1099 6.25202e-07 26.3321L1.73245e-06 1.00123C1.76645e-06 0.223477 0.848877 -0.256572 1.51538 0.14427L22.5751 12.8097Z" fill="#23BDEE" />
                </svg>
            </button>
            <div class="absolute z-10 w-40 h-40 bg-yellow-500 rounded-lg floating -bottom-3 -right-3"></div>
        </div>
    </div>

    <div class="items-start mt-40 md:flex md:space-x-10">
        <div data-aos="fade-down" class="relative md:w-7/12">
            <div style="background: #33EFA0" class="absolute z-0 w-32 h-32 rounded-full left-4 -top-12 animate-pulse"></div>
            <div style="background: #33D9EF;" class="absolute z-0 w-5 h-5 rounded-full left-36 -top-12 animate-ping"></div>
            <img class="relative z-50 floating" src="img/vcall.png" alt="">
            <div style="background: #5B61EB;" class="absolute z-0 rounded-full w-36 h-36 right-16 -bottom-1 animate-pulse"></div>
            <div style="background: #F56666;" class="absolute z-0 w-5 h-5 rounded-full right-52 bottom-1 animate-ping"></div>
        </div>
        <div data-aos="fade-down" class="mt-20 text-gray-500 md:w-5/12 md:mt-0">
            <h1 class="text-2xl font-semibold text-darken lg:pr-40">A <span class="text-yellow-500">user interface</span> designed for the classroom</h1>
            <div class="flex items-center my-5 space-x-5">
                <div class="flex items-center justify-center flex-shrink p-3 bg-white rounded-full shadow-lg">
                    <svg class="w-4 h-4" viewBox="0 0 27 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="11.8182" height="11.8182" rx="2" fill="#2F327D" />
                        <rect y="14.1816" width="11.8182" height="11.8182" rx="2" fill="#2F327D" />
                        <rect x="14.7727" width="11.8182" height="11.8182" rx="2" fill="#2F327D" />
                        <rect x="14.7727" y="14.1816" width="11.8182" height="11.8182" rx="2" fill="#F48C06" />
                    </svg>
                </div>
                <p>Teachers don’t get lost in the grid view and have a dedicated Podium space.</p>
            </div>
            <div class="flex items-center my-5 space-x-5">
                <div class="flex items-center justify-center flex-shrink p-3 bg-white rounded-full shadow-lg">
                    <svg class="w-4 h-4" viewBox="0 0 28 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="8" y="6" width="20" height="20" rx="2" fill="#2F327D" />
                        <rect width="21.2245" height="21.2245" rx="2" fill="#F48C06" />
                    </svg>
                </div>
                <p>TA’s and presenters can be moved to the front of the class.</p>
            </div>
            <div class="flex items-center my-5 space-x-5">
                <div class="flex items-center justify-center flex-shrink p-3 bg-white rounded-full shadow-lg">
                    <svg class="w-4 h-4" viewBox="0 0 30 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4.5 11.375C6.15469 11.375 7.5 9.91758 7.5 8.125C7.5 6.33242 6.15469 4.875 4.5 4.875C2.84531 4.875 1.5 6.33242 1.5 8.125C1.5 9.91758 2.84531 11.375 4.5 11.375ZM25.5 11.375C27.1547 11.375 28.5 9.91758 28.5 8.125C28.5 6.33242 27.1547 4.875 25.5 4.875C23.8453 4.875 22.5 6.33242 22.5 8.125C22.5 9.91758 23.8453 11.375 25.5 11.375ZM27 13H24C23.175 13 22.4297 13.3605 21.8859 13.9445C23.775 15.0668 25.1156 17.093 25.4062 19.5H28.5C29.3297 19.5 30 18.7738 30 17.875V16.25C30 14.4574 28.6547 13 27 13ZM15 13C17.9016 13 20.25 10.4559 20.25 7.3125C20.25 4.16914 17.9016 1.625 15 1.625C12.0984 1.625 9.75 4.16914 9.75 7.3125C9.75 10.4559 12.0984 13 15 13ZM18.6 14.625H18.2109C17.2359 15.1328 16.1531 15.4375 15 15.4375C13.8469 15.4375 12.7688 15.1328 11.7891 14.625H11.4C8.41875 14.625 6 17.2453 6 20.475V21.9375C6 23.2832 7.00781 24.375 8.25 24.375H21.75C22.9922 24.375 24 23.2832 24 21.9375V20.475C24 17.2453 21.5812 14.625 18.6 14.625ZM8.11406 13.9445C7.57031 13.3605 6.825 13 6 13H3C1.34531 13 0 14.4574 0 16.25V17.875C0 18.7738 0.670312 19.5 1.5 19.5H4.58906C4.88438 17.093 6.225 15.0668 8.11406 13.9445Z" fill="#2F327D" />
                    </svg>
                </div>
                <p>Teachers can easily see all students and class data at one time.</p>
            </div>
        </div>
    </div>

    <!-- Tools For Teachers And Learners -->
    <div class="flex flex-col items-center mt-16 md:flex-row md:space-x-10">
        <div data-aos="fade-right" class="md:w-1/2 lg:pl-14">
            <h1 class="text-3xl font-semibold text-darken lg:pr-56"><span class="text-yellow-500">Tools</span> For Teachers And Learners</h1>
            <p class="my-4 text-gray-500 lg:pr-32">Class has a dynamic set of teaching tools built to be deployed and used during class. Teachers can handout assignments in real-time for students to complete and submit.</p>
        </div>
        <img data-aos="fade-left" class="md:w-1/2" src="img/girl-with-books.png">
    </div>

    <!-- Assessments, Quizzes, Tests -->
    <div class="flex flex-col-reverse items-center mt-20 md:flex-row md:space-x-10">
        <div data-aos="fade-right" class="md:w-6/12">
            <img class="md:w-11/12" src="img/true-false.png">
        </div>
        <div data-aos="fade-left" class="md:w-6/12 md:transform md:-translate-y-20">
            <h1 class="text-3xl font-semibold text-darken lg:pr-64">Assessments, <span class="text-yellow-500">Quizzes</span>, Tests</h1>
            <p class="my-5 text-gray-500 lg:pr-52">Easily launch live assignments, quizzes, and tests. Student results are automatically entered in the online gradebook.</p>
        </div>
    </div>

    <!-- Class Management Tools for Educators -->
    <div class="flex flex-col items-center mt-12 md:flex-row">
        <div data-aos="fade-right" class="md:w-5/12">
            <h1 class="text-3xl font-semibold leading-tight text-darken lg:pr-32"><span class="text-yellow-500">Class Management</span> Tools for Educators</h1>
            <p class="my-5 lg:pr-14">Class provides tools to help run and manage the class such as Class Roster, Attendance, and more. With the Gradebook, teachers can review and grade tests and quizzes in real-time.</p>
        </div>
        <img data-aos="fade-left" class="md:w-7/12" src="img/gradebook.png">
    </div>

    <!-- One-on-One Discussions -->
    <div class="flex flex-col-reverse items-center mt-24 md:flex-row md:space-x-10">
        <div data-aos="fade-right" class="md:w-7/12">
            <img class="md:w-11/12" src="img/discussion.png">
        </div>
        <div data-aos="fade-left" class="md:w-5/12 md:transform md:-translate-y-6">
            <h1 class="text-3xl font-semibold text-darken lg:pr-64">One-on-One <span class="text-yellow-500">Discussions</span></h1>
            <p class="my-5 text-gray-500 lg:pr-24">Teachers and teacher assistants can talk with students privately without leaving the Zoom environment.</p>
        </div>
    </div>

    <button data-aos="flip-up" class="block px-5 py-3 mx-auto font-medium text-yellow-500 transition duration-300 ease-in-out transform border border-yellow-500 rounded-full my-14 focus:outline-none hover:scale-110">See more features</button>

    <!-- Hire an eBusiness Technician -->
    <div class="flex flex-col items-start mt-24 md:flex-row md:space-x-10">
        <div data-aos="zoom-in-right" class="md:w-6/12">
            <img class="mx-auto md:w-8/12" src="img/experts.svg">
        </div>
        <div data-aos="zoom-in-left" class="md:w-6/12">
            <div class="flex items-center mb-5 space-x-20">
                <span class="absolute border border-gray-300 w-14"></span>
                <h1 class="text-sm tracking-widest text-gray-400">Lost in between ?</h1>
            </div>
            <h1 class="text-2xl font-semibold text-darken lg:pr-40"><span class="text-yellow-500">Need Help ?</span> Hire Expert eBusiness Technicians</h1>
            <p class="my-5 text-gray-500 lg:pr-20">Schoology has every tool your classroom needs and comes pre-integrated with more than 200+ tools, student information systems (SIS), and education platforms.</p>
            <button class="px-5 py-3 my-4 font-medium text-yellow-500 transition duration-300 ease-in-out transform border border-yellow-500 rounded-full focus:outline-none hover:scale-110">Hire an Expert</button>
        </div>
    </div>

    <!-- TESTIMONIAL -->
    <div class="flex flex-col-reverse items-start mt-24 md:flex-row md:space-x-10">
        <div data-aos="zoom-in-right" class="md:w-5/12">
            <div class="flex items-center mb-5 space-x-20">
                <span class="absolute border border-gray-300 w-14"></span>
                <h1 class="text-sm tracking-widest text-gray-400">TESTIMONIAL</h1>
            </div>
            <h1 class="text-2xl font-semibold text-darken lg:pr-40">What They Say?</h1>
            <p class="my-5 text-gray-500 lg:pr-36">Skilline has got more than 100k positive ratings from our users around the world.</p>
            <p class="my-5 text-gray-500 lg:pr-36">Some of the students and teachers were greatly helped by the Skilline.</p>
            <p class="my-5 text-gray-500 lg:pr-36">Are you too? Please give your assessment</p>
            <button class="flex items-center pl-3 my-4 space-x-3 font-medium text-yellow-500 transition duration-300 ease-in-out transform border-t border-b border-l border-yellow-500 rounded-full focus:outline-none hover:scale-110">
                <span>Write your assessment</span>
                <div class="flex items-center justify-center border border-yellow-500 rounded-full h-14 w-14">
                    <svg class="w-5 h-5" viewBox="0 0 26 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M25.7071 8.70711C26.0976 8.31658 26.0976 7.68342 25.7071 7.2929L19.3431 0.928934C18.9526 0.538409 18.3195 0.538409 17.9289 0.928934C17.5384 1.31946 17.5384 1.95262 17.9289 2.34315L23.5858 8L17.9289 13.6569C17.5384 14.0474 17.5384 14.6805 17.9289 15.0711C18.3195 15.4616 18.9526 15.4616 19.3431 15.0711L25.7071 8.70711ZM-8.74228e-08 9L25 9L25 7L8.74228e-08 7L-8.74228e-08 9Z" fill="#F48C06" />
                    </svg>
                </div>
            </button>
        </div>
        <div data-aos="zoom-in-left" class="md:w-7/12">
            <img class="mx-auto md:w-10/12" src="img/product-tour.svg">
        </div>
    </div>

    <!-- trusted by -->
    <div class="max-w-4xl mx-auto">
        <h1 class="mb-3 font-medium text-center text-gray-400">Trusted by 5,000+ Companies Worldwide</h1>
        <div class="grid grid-cols-3 gap-4 lg:grid-cols-6 justify-items-center">
            <img class="h-7" src="img/company/google.svg">
            <img class="h-7" src="img/company/netflix.svg">
            <img class="h-7" src="img/company/airbnb.svg">
            <img class="transform translate-y-2 h-7" src="img/company/amazon.svg">
            <img class="h-7" src="img/company/facebook.svg">
            <img class="h-7" src="img/company/grab.svg">
        </div>
    </div>

    <!-- pricing -->
    <div class="min-h-screen py-10 lg:py-0 lg:grid place-content-center">
        <!-- Running Instance -->
        <div data-aos="flip-up" class="max-w-xl mx-auto mt-24 mb-4 text-center">
            <h1 class="my-3 text-2xl font-bold text-darken">Live Projects on <span class="text-yellow-500">DemoPasal</span></h1>
            <p class="leading-relaxed text-gray-500">Ready to Check running Instance of Lokbidhi Cyberlab's WebApp</p>
        </div>
        <div data-aos="zoom-in-up" class="items-center justify-center lg:flex lg:gap-10">
            <div class="flex-grow max-w-xs px-10 py-12 mx-auto bg-white border-t-8 border-blue-400 rounded-lg shadow-lg lg:mx-0">
                <div>
                    <h2 class="text-2xl font-semibold text-gray-900">Press</h2>
                    <p class="text-gray-400 mt-2.5 text-lg">Are you interested in our latest news or working on a Doe story and need to get in touch?</p>
                    <button class="border border-blue-400 text-blue-400 pt-1 pb-1.5 w-full shadow-sm rounded-full inline mt-16 tracking-wider capitalize">visit press page</button>
                </div>
            </div>

            <div data-aos="zoom-in-up" class="flex-grow max-w-xs px-10 pt-16 pb-10 mx-auto my-5 bg-white border-t-8 border-green-400 rounded-lg shadow-lg lg:my-0 lg:mx-0">
                <div>
                    <h2 class="text-2xl font-semibold text-gray-900 capitalize">help & Support</h2>
                    <p class="text-gray-400 mt-2.5 text-lg">Our support team is spread across the globe to give you answers fast.</p>
                    <button class="border border-green-400 text-white bg-green-400 pt-1 pb-1.5 w-full shadow-sm rounded-full inline tracking-wider capitalize mt-24">visit support page</button>
                    <button class="text-green-400 w-full inline mt-3.5 tracking-wider uppercase text-xs">submit a request</button>
                </div>
            </div>

            <div data-aos="zoom-in-up" class="flex-grow max-w-xs px-10 py-12 mx-auto bg-white border-t-8 border-indigo-400 rounded-lg shadow-lg lg:mx-0">
                <div>
                    <h2 class="text-2xl font-semibold text-gray-900">Sales</h2>
                    <p class="text-gray-400 mt-2.5 text-lg">Get in touch with our sales team to see how we can work together.</p>
                    <button class="border border-indigo-400 text-indigo-400 pt-1 pb-1.5 w-full shadow-sm rounded-full inline mt-24 tracking-wider capitalize">contact sales</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- .container -->
<?php
get_sidebar();
get_footer();
