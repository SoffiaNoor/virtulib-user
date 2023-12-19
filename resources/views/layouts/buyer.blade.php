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
    {{--
    <link rel='icon' type="image/x-icon" href='{{ asset(' assets/images/logo.ico') }}'> --}}

    <title>Virtulib</title>

    <!--CSS-->
    @vite('resources/css/app.css')


    {{--
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" /> --}}
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
            border-top-color: #173350;
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

<body class="bg-white" style="font-family:Poppins!important">
    <div id="loader" wire:loading
        class="fixed top-0 left-0 right-0 bottom-0 w-full h-screen z-50 overflow-hidden bg-[#1a1a1a] flex flex-col items-center justify-center">
        <img src="{{ asset('assets/images/logo.png') }}" alt="Nefa Logo" class="w-8 xl:w-16">
    </div>
    <div id="__layout">
        <div class="font-sans antialiased relative">
            <header id="sticky-header" class="bg-[#ad7c35] drop-shadow-md fixed top-0 w-full z-40 font-[Poppins]">
                <nav class="flex border-gray-200 lg:px-10 pb-2.5 px-5 lg:mx-24 mx-11 pt-2">
                    <div
                        class="flex flex-col lg:flex-row lg:items-center lg:justify-between lg:w-full lg:order-2 lg:mt-2 mx-3 py-2">
                        <a href="/" class="flex items-center mx-3">
                            <span
                                class="self-center text-xl text-white font-bold whitespace-nowrap mr-3">VIRTULIB</span>
                        </a>
                        <div class="relative lg:w-full mx-5">
                            <input type="text" placeholder="Search..."
                                class="w-full pl-3 pr-10 py-2 rounded-full border border-gray-300 focus:outline-none focus:border-primary-500 dark:bg-white" />
                            <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                                <svg class="w-6 h-6 text-[#5e4218]" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M21 19l-6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <circle cx="10" cy="10" r="7" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                        </div>
                        <a href="/cart" class="mx-3">
                            <i class="fas fa-shopping-cart text-white fa-lg mr-2"></i>
                        </a>
                        <div class="flex items-center lg:order-2">
                            @if (Auth::check())
                            <details class="dropdown mx-3">
                                <summary
                                    class="flex items-center px-auto bg-[#5e4218] block px-10 py-2 text-white rounded-full hover:text-white hover:shadow-xl duration-700">
                                    <i class="fa fa-user mr-3"></i> {{ Auth::user()->name }}
                                </summary>
                                <ul class="shadow menu dropdown-content z-[1] bg-base-100 rounded-box w-52">
                                    @if (auth()->user()->role === 'buyer')
                                    <li><a href="/profile" class="block px-4 w-full text-gray-800 hover:bg-gray-200">My
                                            Profile</a>
                                    </li>
                                    <li>
                                        <form method="POST" action="{{ route('logout_buyer') }}">
                                            @csrf
                                            <button class="block" type="submit">Logout</button>
                                        </form>
                                    </li>
                                    @elseif(auth()->user()->role === 'seller')
                                    <li><a href="/seller" class="block px-4 w-full text-gray-800 hover:bg-gray-200">My
                                            Profile</a>
                                    </li>
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
                                class="bg-[#5e4218] block px-10 py-2 mx-2 text-white rounded-full hover:text-white hover:shadow-xl duration-700 font-bold">Masuk</a>
                            <a href="/register"
                                class="bg-[#eda02c] block px-10 py-2 mx-2 text-white rounded-full hover:text-white hover:shadow-xl duration-700 font-bold">Daftar</a>
                            @endif
                            <button data-collapse-toggle="mobile-menu-2" type="button"
                                class="inline-flex items-center p-2 ml-1 text-sm text-black rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
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
                    </div>
                </nav>
            </header>

            <div class="px-5 lg:mx-40 mx-11 mt-40 min-h-screen">
                @yield('content')
            </div>

            <footer class="bg-[#1a1a1a] text-white">
                <div class="mx-auto w-full max-w-screen-xl py-10 mt-10">
                    <div class="md:flex md:justify-between">
                        <div class="mb-6 md:mb-0">
                            <a href="/" class="flex items-center">
                                <span class="self-center text-2xl font-semibold whitespace-nowrap">VIRTULIB</span>
                            </a>
                        </div>
                        <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-2">
                            <div></div>
                            <div>
                                <h2 class="mb-6 text-sm font-semibold uppercase "><a href="">Contact
                                        Us</a>
                                </h2>
                                <ul class="font-medium">
                                    <li class="mb-4">
                                        <a href="https://www.instagram.com/nayadkr/" class="hover:underline">Instagram
                                        </a>
                                    </li>
                                    <li class="mb-4">
                                        <a href="https://discord.gg/4eeurUVvTy" class="hover:underline">Twitter</a>
                                    </li>
                                    <li class="mb-4">
                                        <a href="https://discord.gg/4eeurUVvTy" class="hover:underline">Facebook</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <hr class="my-6 border-gray-200 sm:mx-auto  lg:my-8" />
                    <div class="sm:flex sm:items-center sm:justify-between">
                        <span class="text-sm sm:text-center ">© 2023 <a href="/" class="hover:underline">Virtulib™</a>. All
                            Rights Reserved.
                        </span>
                        <div class="flex mt-4 sm:justify-center sm:mt-0">
                            <a href="#">
                                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor" viewBox="0 0 8 19">
                                    <path fill-rule="evenodd"
                                        d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span class="sr-only">Facebook page</span>
                            </a>
                            <a href="#" class="ms-5">
                                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor" viewBox="0 0 20 17">
                                    <path fill-rule="evenodd"
                                        d="M20 1.892a8.178 8.178 0 0 1-2.355.635 4.074 4.074 0 0 0 1.8-2.235 8.344 8.344 0 0 1-2.605.98A4.13 4.13 0 0 0 13.85 0a4.068 4.068 0 0 0-4.1 4.038 4 4 0 0 0 .105.919A11.705 11.705 0 0 1 1.4.734a4.006 4.006 0 0 0 1.268 5.392 4.165 4.165 0 0 1-1.859-.5v.05A4.057 4.057 0 0 0 4.1 9.635a4.19 4.19 0 0 1-1.856.07 4.108 4.108 0 0 0 3.831 2.807A8.36 8.36 0 0 1 0 14.184 11.732 11.732 0 0 0 6.291 16 11.502 11.502 0 0 0 17.964 4.5c0-.177 0-.35-.012-.523A8.143 8.143 0 0 0 20 1.892Z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span class="sr-only">Twitter page</span>
                            </a>
                            <a href="#" class="ms-5">
                                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor" viewBox="0 0 20 17">
                                    <path fill-rule="evenodd"
                                        d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span class="sr-only">Instagram page</span>
                            </a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>

        <div class="fixed bottom-20 left-10 z-10">
            <button id="to-top-button" onclick="goToTop()" title="Go To Top"
                class="hidden fixed z-90 border-0 w-16 h-16 rounded-full drop-shadow-md bg-gradient-to-r from-[#ca8a04] to-[#a16207] text-white text-3xl font-bold">&uarr;</button>
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