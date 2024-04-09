<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />


    <!-- Custom styles for this template-->
    <link href="css/welcome.css" rel="stylesheet">

</head>

<body class="antialiased">
    <div
        class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
        <!-- @if (Route::has('login'))
        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
            @auth
            <a href="{{ url('/dashboard') }}"
                class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
            @else
            <a href="{{ route('login') }}"
                class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
                in</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}"
                class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
            @endif
            @endauth
        </div>
        @endif -->

        <header class="container header">
            <!-- ==== NAVBAR ==== -->
            <nav class="nav">
                <div class="logo">
                    <h2>EduAcademia</h2>
                </div>

                <div class="nav_menu" id="nav_menu">
                    <button class="close_btn" id="close_btn">
                        <i class="ri-close-fill"></i>
                    </button>

                    <ul class="nav_menu_list">
                        <li class="nav_menu_item">
                            <a href="{{ route('login') }}" class="nav_menu_link">Login</a>
                        </li>
                        <li class="nav_menu_item">
                            <a href="{{ route('register') }}" class="nav_menu_link">Register</a>
                        </li>
                        <li class="nav_menu_item">
                            <a href="#" class="nav_menu_link">service</a>
                        </li>
                        <li class="nav_menu_item">
                            <a href="#" class="nav_menu_link">contact</a>
                        </li>
                    </ul>
                </div>

                <button class="toggle_btn" id="toggle_btn">
                    <i class="ri-menu-line"></i>
                </button>
            </nav>
        </header>

        <section class="wrapper">
            <div class="container">
                <div class="grid-cols-2">
                    <div class="grid-item-1">
                        <h1 class="main-heading">
                            Welcome to <span>EduAcademia</span>
                            <br />

                        </h1>
                        <p class="info-text">
                            Explore our extensive online library, personalized recommendations, and collaborative spaces
                            designed to empower educators and inspire learners. Join us today and unlock your journey
                            toward
                            education.
                        </p>

                        <div class="btn_wrapper">
                            <a href="{{ route('login') }}" style="color:white;"> <button class="btn view_more_btn">
                                    Get Started <i class="ri-arrow-right-line"></i>
                                </button>
                            </a>
                        </div>
                    </div>
                    <div class="grid-item-2">
                        <div class="team_img_wrapper">
                            <img src="{{ asset ('img/library-logo.png')}}" id="books4borrow">
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <!-- ==== ANIMATE ON SCROLL JS CDN -->
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <!-- ==== GSAP CDN ==== -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/gsap.min.js"></script>
        <!-- ==== SCRIPT.JS ==== -->
        <script src="{{ asset('assets/js/welcome.js') }}" defer></script>

    </div>
</body>

</html>