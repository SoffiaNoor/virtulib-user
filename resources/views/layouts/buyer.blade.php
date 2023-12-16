<html>

<head>
    <!--SEO-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta property="og:site_name" content="">
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:url" content="">
    <meta name="keywords" content="">
    <link rel='icon' type="image/x-icon" href='{{ asset('assets/images/logo2.ico') }}'>

    <title>Edulink</title>

    <!--CSS-->
    @vite('resources/css/app.css')


    {{-- <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" /> --}}
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!--Font-->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        type='text/css'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-ohUOR9d5GtovQ9HJFJZY5oaYXlL4j+XQh4QwBGOme4+LL+JKqPtuIyQhA2ybpK4x0LNAiwTSo1f9M14CCXsC8g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/mdb.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/function.js') }}"></script>

    <style>
        .body {
            font-family: 'Poppins';
        }

        swiper-container {
            width: 100%;
            height: 100%;
        }

        swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        swiper-slide img {
            display: block;
            width: 100%;
            object-fit: cover;
        }


        /* Custom styles for the overlay effect */
        .overlay {
            opacity: 0;
            transition: opacity 0.3s ease-in-out;
        }

        .group:hover .overlay {
            opacity: 1;
        }

        /* width */
        ::-webkit-scrollbar {
            width: 10px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
            background: #2e1065;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: #4c1d95;
            border-radius: 5px;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #4c1d95;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        .animate-spin-slow {
            animation: spin 4s linear infinite;
            background-image: url("assets/img/favicon.png");
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
        }

        @keyframes rock-boat {
            0% {
                transform: rotate(0deg);
            }

            50% {
                transform: rotate(5deg);
            }
        }

        .boat {
            animation: rock-boat 3s ease-in-out infinite;
        }

        .portfolio-item {
            display: block;
            opacity: 1;
            transition: opacity 0.3s ease-in-out;
        }

        .fade-in {
            opacity: 1;
        }

        .fade-out {
            opacity: 0;
        }

        .scrolled {
            opacity: 0.8;
            /* Set the desired opacity value when scrolling */
        }

        .loader {
            border-top-color: #7e22ce;
            -webkit-animation: spinner 1.5s linear infinite;
            animation: spinner 1.5s linear infinite;
        }

        @-webkit-keyframes spinner {
            0% {
                -webkit-transform: rotate(0deg);
            }

            100% {
                -webkit-transform: rotate(360deg);
            }
        }

        @keyframes spinner {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        #movingImage {
            position: absolute;
            transition: transform 0.2s ease-out;
        }
    </style>
</head>

<body class="bg-[#8EACCD] text-black ">
    <div id="loader" wire:loading
        class="fixed top-0 left-0 right-0 bottom-0 w-full h-screen z-50 overflow-hidden bg-gradient-to-r from-indigo-950 to-blue-950 flex flex-col items-center justify-center">
        <div class="loader ease-linear rounded-full border-4 border-t-4 border-gray-200 h-12 w-12 mb-4"></div>
        <img src="{{ asset('assets/images/edulink2.png') }}" alt="Nefa Logo" class="w-24 xl:w-28">
    </div>
    <div id="__layout">
        <div class="font-sans antialiased relative">
            <header class="bg-gradient-to-r from-[#F9F3CC] to-[#ddd38e] drop-shadow-md">
                <nav class="border-gray-200 lg:px-6 pb-2.5 dark:bg-gray-800 px-5 lg:mx-24 mx-11 pt-2">
                    <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between lg:w-full lg:order-2 lg:mt-2 mx-3 py-2">

                        <div class="flex items-center lg:order-2">
                            <a href="#" class="mx-2">
                                <i class="fa fa-bell fa-lg mr-2"></i>
                            </a>
                            <a href="#"
                                class="bg-[#8EACCD] block px-3 py-2 text-white rounded-full hover:text-white hover:shadow-xl duration-700">Bantuan</a>
                            @if (Auth::check())
                                <details class="dropdown mx-3">
                                    <summary
                                        class="px-auto bg-[#8EACCD] block px-5 py-2 text-white rounded-full hover:text-white hover:shadow-xl duration-700">
                                        <i class="fa fa-user mr-3"></i> {{ Auth::user()->name }}
                                    </summary>
                                    <ul class="shadow menu dropdown-content z-[1] bg-base-100 rounded-box w-52">
                                        <li><a href="/dashboard"
                                                class="block px-4 w-full text-gray-800 hover:bg-gray-200">My Profile</a>
                                        </li>
                                        @if(auth()->user()->role === 'buyer')
                                        <li>
                                            <form method="POST" action="{{ route('logout_buyer') }}">
                                                @csrf
                                                <button class="block" type="submit">Logout</button>
                                            </form>
                                        </li>
                                        @elseif(auth()->user()->role === 'seller')
                                        <li>
                                            <form method="POST" action="{{ route('logout') }}">
                                                @csrf
                                                <button class="block" type="submit">Logout</button>
                                            </form>
                                        </li>
                                        @else
                                        @endif
                                    </ul>
                                </details>
                            @else
                                <a href="/login"
                                    class="bg-[#8EACCD] block px-5 py-2 mx-5 text-white rounded-full hover:text-white hover:shadow-xl duration-700 font-bold">Login</a>
                            @endif
                            <button data-collapse-toggle="mobile-menu-2" type="button"
                                class="inline-flex items-center p-2 ml-1 text-sm text-black rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                                aria-controls="mobile-menu-2" aria-expanded="false">
                                <span class="sr-only">Open main menu</span>
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>
                        </div>
                        <div class="hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1"
                            id="mobile-menu-2">
                            <ul class="flex flex-col mt-4 ml-2 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                                <li>
                                    <a href="#"
                                        class="bg-[#8EACCD] block px-3 py-2 text-white rounded-full hover:text-white hover:shadow-xl duration-700">Seller
                                        Center</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="bg-[#8EACCD] block px-3 py-2 text-white rounded-full hover:text-white hover:shadow-xl duration-700">Download</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div
                        class="flex flex-col lg:flex-row lg:items-center lg:justify-between lg:w-full lg:order-2 lg:mt-2 mx-3 py-2">
                        <a href="/" class="flex items-center mx-3">
                            <img src="{{ asset('assets/images/logo.png') }}" class="mr-3 h-6 sm:h-9"
                                alt="Virtulib Logo" />
                            <span
                                class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">VirtuLib</span>
                        </a>

                        <div class="relative lg:w-full mx-5">
                            <input type="text" placeholder="Search..."
                                class="w-full pl-3 pr-10 py-2 rounded-lg border border-gray-300 focus:outline-none focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white" />
                            <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                                <svg class="w-6 h-6 text-black" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M21 19l-6-6" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <circle cx="10" cy="10" r="7" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                        </div>
                        <a href="https://flowbite.com" class="mx-3">
                            <i class="fas fa-shopping-cart fa-lg mr-2"></i>
                        </a>
                    </div>
                </nav>
            </header>

            <div class="px-5 lg:mx-24 mx-11 mt-10">
                @yield('content')
            </div>

            <footer class="bg-transparent dark:bg-gray-900 lg:mx-24 mx-11 mt-10">
                <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
                    <div class="md:flex md:justify-between">
                        <div class="mb-6 md:mb-0">
                            <a href="/" class="flex items-center">
                                <img src="{{ asset('assets/images/logo.png') }}" class="h-8 me-3" alt="FlowBite Logo" />
                                <span
                                    class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Virtulib</span>
                            </a>
                        </div>
                        <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                            <div>
                                <h2 class="mb-6 text-sm font-semibold text-black uppercase dark:text-white">Resources
                                </h2>
                                <ul class="text-black dark:text-gray-400 font-medium">
                                    <li class="mb-4">
                                        <a href="/" class="hover:underline">Virtulib</a>
                                    </li>
                                    <li>
                                        <a href="https://tailwindcss.com/" class="hover:underline">Tailwind CSS</a>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <h2 class="mb-6 text-sm font-semibold text-black uppercase dark:text-white">Follow us
                                </h2>
                                <ul class="text-black dark:text-gray-400 font-medium">
                                    <li class="mb-4">
                                        <a href="https://github.com/themesberg/flowbite"
                                            class="hover:underline ">Github</a>
                                    </li>
                                    <li>
                                        <a href="https://discord.gg/4eeurUVvTy" class="hover:underline">Discord</a>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <h2 class="mb-6 text-sm font-semibold text-black uppercase dark:text-white">Legal</h2>
                                <ul class="text-black dark:text-gray-400 font-medium">
                                    <li class="mb-4">
                                        <a href="#" class="hover:underline">Privacy Policy</a>
                                    </li>
                                    <li>
                                        <a href="#" class="hover:underline">Terms &amp; Conditions</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
                    <div class="sm:flex sm:items-center sm:justify-between">
                        <span class="text-sm text-black sm:text-center dark:text-gray-400">© 2023 <a
                                href="/" class="hover:underline">Virtulib™</a>. All Rights Reserved.
                        </span>
                        <div class="flex mt-4 sm:justify-center sm:mt-0">
                            <a href="#" class="text-black hover:text-black dark:hover:text-white">
                                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor" viewBox="0 0 8 19">
                                    <path fill-rule="evenodd"
                                        d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span class="sr-only">Facebook page</span>
                            </a>
                            <a href="#" class="text-black hover:text-black dark:hover:text-white ms-5">
                                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor" viewBox="0 0 21 16">
                                    <path
                                        d="M16.942 1.556a16.3 16.3 0 0 0-4.126-1.3 12.04 12.04 0 0 0-.529 1.1 15.175 15.175 0 0 0-4.573 0 11.585 11.585 0 0 0-.535-1.1 16.274 16.274 0 0 0-4.129 1.3A17.392 17.392 0 0 0 .182 13.218a15.785 15.785 0 0 0 4.963 2.521c.41-.564.773-1.16 1.084-1.785a10.63 10.63 0 0 1-1.706-.83c.143-.106.283-.217.418-.33a11.664 11.664 0 0 0 10.118 0c.137.113.277.224.418.33-.544.328-1.116.606-1.71.832a12.52 12.52 0 0 0 1.084 1.785 16.46 16.46 0 0 0 5.064-2.595 17.286 17.286 0 0 0-2.973-11.59ZM6.678 10.813a1.941 1.941 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.919 1.919 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Zm6.644 0a1.94 1.94 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.918 1.918 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Z" />
                                </svg>
                                <span class="sr-only">Discord community</span>
                            </a>
                            <a href="#" class="text-black hover:text-black dark:hover:text-white ms-5">
                                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor" viewBox="0 0 20 17">
                                    <path fill-rule="evenodd"
                                        d="M20 1.892a8.178 8.178 0 0 1-2.355.635 4.074 4.074 0 0 0 1.8-2.235 8.344 8.344 0 0 1-2.605.98A4.13 4.13 0 0 0 13.85 0a4.068 4.068 0 0 0-4.1 4.038 4 4 0 0 0 .105.919A11.705 11.705 0 0 1 1.4.734a4.006 4.006 0 0 0 1.268 5.392 4.165 4.165 0 0 1-1.859-.5v.05A4.057 4.057 0 0 0 4.1 9.635a4.19 4.19 0 0 1-1.856.07 4.108 4.108 0 0 0 3.831 2.807A8.36 8.36 0 0 1 0 14.184 11.732 11.732 0 0 0 6.291 16 11.502 11.502 0 0 0 17.964 4.5c0-.177 0-.35-.012-.523A8.143 8.143 0 0 0 20 1.892Z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span class="sr-only">Twitter page</span>
                            </a>
                            <a href="#" class="text-black hover:text-black dark:hover:text-white ms-5">
                                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 .333A9.911 9.911 0 0 0 6.866 19.65c.5.092.678-.215.678-.477 0-.237-.01-1.017-.014-1.845-2.757.6-3.338-1.169-3.338-1.169a2.627 2.627 0 0 0-1.1-1.451c-.9-.615.07-.6.07-.6a2.084 2.084 0 0 1 1.518 1.021 2.11 2.11 0 0 0 2.884.823c.044-.503.268-.973.63-1.325-2.2-.25-4.516-1.1-4.516-4.9A3.832 3.832 0 0 1 4.7 7.068a3.56 3.56 0 0 1 .095-2.623s.832-.266 2.726 1.016a9.409 9.409 0 0 1 4.962 0c1.89-1.282 2.717-1.016 2.717-1.016.366.83.402 1.768.1 2.623a3.827 3.827 0 0 1 1.02 2.659c0 3.807-2.319 4.644-4.525 4.889a2.366 2.366 0 0 1 .673 1.834c0 1.326-.012 2.394-.012 2.72 0 .263.18.572.681.475A9.911 9.911 0 0 0 10 .333Z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span class="sr-only">GitHub account</span>
                            </a>
                            <a href="#" class="text-black hover:text-black dark:hover:text-white ms-5">
                                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 0a10 10 0 1 0 10 10A10.009 10.009 0 0 0 10 0Zm6.613 4.614a8.523 8.523 0 0 1 1.93 5.32 20.094 20.094 0 0 0-5.949-.274c-.059-.149-.122-.292-.184-.441a23.879 23.879 0 0 0-.566-1.239 11.41 11.41 0 0 0 4.769-3.366ZM8 1.707a8.821 8.821 0 0 1 2-.238 8.5 8.5 0 0 1 5.664 2.152 9.608 9.608 0 0 1-4.476 3.087A45.758 45.758 0 0 0 8 1.707ZM1.642 8.262a8.57 8.57 0 0 1 4.73-5.981A53.998 53.998 0 0 1 9.54 7.222a32.078 32.078 0 0 1-7.9 1.04h.002Zm2.01 7.46a8.51 8.51 0 0 1-2.2-5.707v-.262a31.64 31.64 0 0 0 8.777-1.219c.243.477.477.964.692 1.449-.114.032-.227.067-.336.1a13.569 13.569 0 0 0-6.942 5.636l.009.003ZM10 18.556a8.508 8.508 0 0 1-5.243-1.8 11.717 11.717 0 0 1 6.7-5.332.509.509 0 0 1 .055-.02 35.65 35.65 0 0 1 1.819 6.476 8.476 8.476 0 0 1-3.331.676Zm4.772-1.462A37.232 37.232 0 0 0 13.113 11a12.513 12.513 0 0 1 5.321.364 8.56 8.56 0 0 1-3.66 5.73h-.002Z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span class="sr-only">Dribbble account</span>
                            </a>
                        </div>
                    </div>
                </div>
            </footer>

        </div>

        <div class="fixed bottom-20 left-10 z-10">
            <button id="to-top-button" onclick="goToTop()" title="Go To Top"
                class="hidden fixed z-90 border-0 w-16 h-16 rounded-full drop-shadow-md bg-gradient-to-r from-[#3c628b] to-[#4f79a7] text-white text-3xl font-bold">&uarr;</button>
        </div>

        
    </div>
    </div>
    </div>
    </div>

    @yield('jquery')

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const movingImage = document.getElementById('movingImage');
            const container = document.getElementById('app');

            document.addEventListener('mousemove', function(event) {
                const containerRect = container.getBoundingClientRect();
                const maxX = containerRect.width - movingImage.clientWidth;
                const maxY = containerRect.height - movingImage.clientHeight;

                // Calculate the percentage of mouse position within the container
                const percentX = (event.clientX - containerRect.left) / containerRect.width;
                const percentY = (event.clientY - containerRect.top) / containerRect.height;

                // Calculate new coordinates within the container boundaries
                const newX = Math.min(Math.max(percentX * maxX, 0), maxX);
                const newY = Math.min(Math.max(percentY * maxY, 0), maxY);

                // Update the image position based on mouse coordinates
                movingImage.style.transform = `translate(${newX}px, ${newY}px)`;
            });
        });


        AOS.init();
        // Burger menus
        document.addEventListener('DOMContentLoaded', function() {
            // open
            const burger = document.querySelectorAll('.navbar-burger');
            const menu = document.querySelectorAll('.navbar-menu');

            if (burger.length && menu.length) {
                for (var i = 0; i < burger.length; i++) {
                    burger[i].addEventListener('click', function() {
                        for (var j = 0; j < menu.length; j++) {
                            menu[j].classList.toggle('hidden');
                        }
                    });
                }
            }

            // close
            const close = document.querySelectorAll('.navbar-close');
            const backdrop = document.querySelectorAll('.navbar-backdrop');

            if (close.length) {
                for (var i = 0; i < close.length; i++) {
                    close[i].addEventListener('click', function() {
                        for (var j = 0; j < menu.length; j++) {
                            menu[j].classList.toggle('hidden');
                        }
                    });
                }
            }

            if (backdrop.length) {
                for (var i = 0; i < backdrop.length; i++) {
                    backdrop[i].addEventListener('click', function() {
                        for (var j = 0; j < menu.length; j++) {
                            menu[j].classList.toggle('hidden');
                        }
                    });
                }
            }
        });
        $(document).ready(function() {
            $(window).scroll(function() {
                if ($(this).scrollTop() > 0) {
                    $('#navbar').addClass('scrolled');
                } else {
                    $('#navbar').removeClass('scrolled');
                }
            });
        });
    </script>

    <script>
        const filterButtons = document.querySelectorAll('.filter-btn');
        const portfolioItems = document.querySelectorAll('.portfolio-item');

        filterButtons.forEach(button => {
            button.addEventListener('click', () => {
                const filterValue = button.dataset.filter;

                portfolioItems.forEach(item => {
                    if (filterValue === 'all' || item.classList.contains(filterValue)) {
                        item.style.display = 'block';
                    } else {
                        item.style.display = 'none';
                    }
                });
            });
        });
        window.addEventListener('load', function() {
            const loader = document.getElementById('loader');
            const content = document.getElementById('content');

            loader.style.display = 'none';
            content.style.display = 'block';
        });
    </script>
    <script>
        var toTopButton = document.getElementById("to-top-button");
        window.onscroll = function() {
            if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
                toTopButton.classList.remove("hidden");
            } else {
                toTopButton.classList.add("hidden");
            }
        }

        function goToTop() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        }
    </script>
</body>

</html>
