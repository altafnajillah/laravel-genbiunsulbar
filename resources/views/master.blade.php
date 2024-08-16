<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('./GenBIUnsulbar.png') }}" type="image/png">
    <title>GenBI Unsulbar | @yield('title')</title>
    <style>
        .navbar {
            transition: all 0.3s ease;
            padding-top: 0.5rem;
            padding-bottom: 0.5rem;
        }

        .navbar.scrolled {
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding-top: 0;
            padding-bottom: 0;
            /*transform: scaleY(0.95) translateY(-5px);*/
        }

        .logo-text {
            transition: all 0.3s ease;
        }

        .logo-text.scrolled {
            font-size: 1.25rem;
        }

        .logo {
            transition: all 0.3s ease;
        }

        .logo.scrolled {
            width: 40px;
        }

        /* Selected Menu */
        .selected {

        }

    </style>
    @vite('resources/css/app.css')

</head>
<body class="font-poppins antialiased">

<nav id="navbar" class="navbar fixed w-full bg-white">
    <div id="navContainer" class="container mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
        <div class="relative flex h-16 items-center justify-around">
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                <!-- Mobile menu button-->
                <button id="dropdownButton" onclick="mobileMenu()" type="button"
                        class="relative ml-2 inline-flex items-center justify-center rounded-md p-2 text-gray-800 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                        aria-controls="mobile-menu" aria-expanded="false">
                    <span class="absolute -inset-0.5"></span>
                    <span class="sr-only">Open main menu</span>
                    <!--
                      Icon when menu is closed.

                      Menu open: "hidden", Menu closed: "block"
                    -->
                    <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                         aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"/>
                    </svg>
                    <!--
                      Icon when menu is open.

                      Menu open: "block", Menu closed: "hidden"
                    -->
                    <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                         aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
            <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                <a href="{{ url('/') }}">
                    <div class="flex flex-shrink-0 items-center">
                        <div class="flex items-center mx-2">
                            <img id="logo" class="logo" src="{{ asset("GenBIUnsulbar.png")}}" width="50px"
                                 alt="GenBI Unsulbar">
                            <div id="logoText" class="logo-text text-2xl font-bold text-gray-800 ml-2">GenBI
                                Unsulbar
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="hidden sm:ml-6 sm:block">
                <div class="flex space-x-4">
                    <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                    <a href="{{ url('/news') }}"
                       class="rounded-md px-3 py-2 text-sm font-medium text-grey-800 hover:bg-blue-600 hover:text-white">Berita</a>
                    <a href="{{ url('/gallery') }}"
                       class="rounded-md px-3 py-2 text-sm font-medium text-grey-800 hover:bg-blue-600 hover:text-white">Album</a>
                    <a href="{{ url('/member') }}"
                       class="rounded-md px-3 py-2 text-sm font-medium text-grey-800 hover:bg-blue-600 hover:text-white">Anggota</a>
                    <a href="{{ url('/about') }}"
                       class="rounded-md px-3 py-2 text-sm font-medium text-grey-800 hover:bg-blue-600 hover:text-white">Tentang</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="hidden transition-all" id="mobile-menu">
        <div class="space-y-1 px-2 pb-3 pt-2">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            <a href="{{ url('/') }}"
               class="block rounded-md px-3 py-2 text-sm font-medium text-grey-800 hover:bg-blue-600 hover:text-white">Beranda</a>
            <a href="{{ url('/news') }}"
               class="block rounded-md px-3 py-2 text-sm font-medium text-grey-800 hover:bg-blue-600 hover:text-white">Berita</a>
            <a href="{{ url('/gallery') }}"
               class="block rounded-md px-3 py-2 text-sm font-medium text-grey-800 hover:bg-blue-600 hover:text-white">Album</a>
            <a href="{{ url('/member') }}"
               class="block rounded-md px-3 py-2 text-sm font-medium text-grey-800 hover:bg-blue-600 hover:text-white">Anggota</a>
            <a href="{{ url('/about') }}"
               class="block rounded-md px-3 py-2 text-sm font-medium text-grey-800 hover:bg-blue-600 hover:text-white">Tentang
                Kami</a>
        </div>
    </div>
</nav>

<div class="container mx-auto flex justify-center items-center pt-24">
    <div class="text-4xl font-ubuntu">
        @yield('content')
    </div>
</div>

<script>
    // Navbar scrolled
    document.addEventListener('scroll', function () {
        const navbar = document.getElementById('navbar');
        const logo = document.getElementById('logo');
        const logoText = document.getElementById('logoText');
        const navContainer = document.getElementById('navContainer');
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
            logo.classList.add('scrolled');
            logoText.classList.add('scrolled');
            navContainer.classList.remove('scrolled');
        } else {
            navbar.classList.remove('scrolled');
            logo.classList.remove('scrolled');
            logoText.classList.remove('scrolled');
            navContainer.classList.add('scrolled');
        }
    });

    // Mobile Menu
    function mobileMenu() {
        const mobileMenu = document.getElementById('mobile-menu');

        mobileMenu.classList.contains('hidden') ? mobileMenu.classList.remove('hidden')
            : mobileMenu.classList.add('hidden');
    }

</script>
</body>
</html>
