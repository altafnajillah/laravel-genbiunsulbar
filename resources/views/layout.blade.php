<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('/images/GenBIUnsulbar.png') }}" type="image/png">
    <title> {{ env('APP_NAME') }} | @yield('title')</title>
    <style>
        .navbar {
            transition: all 0.0s ease;
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
            display: flex;
            flex-wrap: nowrap;
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

        .activated {
            position: relative;
        }

        .activated::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 20%;
            width: 60%;
            height: 4px;
            background-color: #ffffff;
            border-radius: 10px;
        }

    </style>
    @vite('resources/css/app.css')

</head>
<body class="font-poppins antialiased">

<nav id="navbar" class="navbar fixed w-full bg-[#10758F] z-10">
    <div id="navContainer" class="container mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
        <div class="relative flex h-16 items-center justify-around">
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                <!-- Mobile menu button-->
                <button id="dropdownButton" onclick="mobileMenu()" type="button"
                        class="relative ml-1 inline-flex items-center justify-center rounded-md p-2 text-white hover:bg-[#0D5B70]  focus:outline-none"
                        aria-controls="mobile-menu" aria-expanded="false">
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
            <div class="flex flex-shrink-0 items-center justify-center sm:items-stretch sm:justify-start">
                <a href="{{ url('/') }}">
                    <div class="flex flex-shrink-0 items-center">
                        <div class="flex items-center mx-2">
                            <img id="logo" class="logo" src="{{ asset("/images/GenBIUnsulbar.png")}}" width="45px"
                                 alt="GenBI Unsulbar">
                            <div id="logoText" class="logo-text text-xl md:text-2xl font-bold text-white ml-2 mr-5">
                                {{ env('APP_NAME') }}
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="hidden sm:ml-6 sm:block">
                <div class="flex md:space-x-2">
                    <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                    <a href="{{ url('/') }}"
                       class="rounded-md px-3 py-2 text-xs md:text-sm font-medium text-white hover:bg-[#0D5B70] {{ Request::is("/") ? "activated" : "" }}">Beranda</a>
                    <a href="{{ url('/about') }}"
                       class="rounded-md px-3 py-2 text-xs md:text-sm font-medium text-white hover:bg-[#0D5B70] {{ Request::is("about") ? "activated" : "" }}">Tentang</a>
                    <a href="{{ url('/news') }}"
                       class="rounded-md px-3 py-2 text-xs md:text-sm font-medium text-white hover:bg-[#0D5B70] {{ Request::is("news") ? "activated" : "" }}">Berita</a>
                    <a href="{{ url('/scholarship') }}"
                       class="rounded-md px-3 py-2 text-xs md:text-sm font-medium text-white hover:bg-[#0D5B70] {{ Request::is("scholarship") ? "activated" : "" }}">Beasiswa</a>
                    {{--                    <a href="{{ url('/') }}"--}}
                    {{--                       class="rounded-md px-3 py-2 text-xs md:text-sm font-medium text-white hover:bg-[#0D5B70] ">Lainnya</a>--}}
                    <div class="relative inline-block text-left ">
                        <div>
                            <button type="button" onclick="moreMenu()"
                                    class="inline-flex justify-center rounded-md px-3 py-2 text-xs md:text-sm font-medium text-white hover:bg-[#0D5B70] {{ Request::is("member", "member/*", "gallery") ? "activated" : "" }}"
                                    aria-expanded="true" aria-haspopup="true">
                                Lainnya
                                <!-- Heroicon name: solid/chevron-down -->
                                <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                     viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M19 9l-7 7-7-7"/>
                                </svg>
                            </button>
                        </div>

                        <div class="hidden origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white"
                             role="menu" aria-orientation="vertical" aria-labelledby="more-button" id="more-button"
                             tabindex="-1">
                            <!-- Active: "bg-gray-100", Not Active: "" -->
                            <a href="{{ url('/gallery') }}" class="text-gray-700 block px-4 py-2 text-sm rounded-lg {{ Request::is("gallery") ? "bg-gray-200" : "" }}"
                               role="menuitem" tabindex="-1" id="menu-item-1">Program Kerja</a>
                            <a href="{{ url('/member') }}" class="text-gray-700 block px-4 py-2 text-sm rounded-lg {{ Request::is("member/*") ? "bg-gray-200" : "" }}" role="menuitem"
                               tabindex="-1" id="menu-item-0">Pengurus</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="hidden transition-all" id="mobile-menu">
        <div class="space-y-1 px-2 pb-3 pt-2">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            <a href="{{ url('/') }}"
               class="block rounded-md px-3 py-2 text-sm font-medium text-white hover:bg-[#0D5B70] {{ Request::is("/") ? "bg-[#0D5B70]" : "" }}">Beranda</a>
            <a href="{{ url('/about') }}"
               class="block rounded-md px-3 py-2 text-sm font-medium text-white hover:bg-[#0D5B70] {{ Request::is("about") ? "bg-[#0D5B70]" : "" }}">Tentang
                Kami</a>
            <a href="{{ url('/news') }}"
               class="block rounded-md px-3 py-2 text-sm font-medium text-white hover:bg-[#0D5B70] {{ Request::is("news") ? "bg-[#0D5B70]" : "" }}">Berita</a>
            <a href="{{ url('/scholarship') }}"
               class="block rounded-md px-3 py-2 text-sm font-medium text-white hover:bg-[#0D5B70] {{ Request::is("scholarship") ? "bg-[#0D5B70]" : "" }}">Beasiswa</a>
            <a href="{{ url('/gallery') }}"
               class="block rounded-md px-3 py-2 text-sm font-medium text-white hover:bg-[#0D5B70] {{ Request::is("gallery") ? "bg-[#0D5B70]" : "" }}">Program Kerja</a>
            <a href="{{ url('/member') }}"
               class="block rounded-md px-3 py-2 text-sm font-medium text-white hover:bg-[#0D5B70] {{ Request::is("member", "member/*") ? "bg-[#0D5B70]" : "" }}">Pengurus</a>
        </div>
    </div>
</nav>

{{--<div class="container mx-auto flex justify-center items-center pt-24">--}}
{{--    <div class="text-4xl font-ubuntu">--}}
{{--        @yield('content')--}}
{{--    </div>--}}
{{--</div>--}}

@yield('content')

<footer class="relative top-full bg-[#10758F] pt-10">
    <div class="flex flex-col md:flex-row mx-auto max-w-md md:max-w-4xl text-white mb-2 px-5">
        <div class="md:w-1/2 flex flex-col justify-between space-y-2">
            <h1 class="text-xl md:text-2xl font-semibold">Reach Us!</h1>
            <div class="flex">
                <div class="w-6 h-6 mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                           stroke-width="1.5" color="currentColor">
                            <path
                                d="M18 18c1.245.424 2 .982 2 1.593C20 20.923 16.418 22 12 22s-8-1.078-8-2.407c0-.611.755-1.169 2-1.593m9-8.5a3 3 0 1 1-6 0a3 3 0 0 1 6 0"/>
                            <path
                                d="M12 2c4.059 0 7.5 3.428 7.5 7.587c0 4.225-3.497 7.19-6.727 9.206a1.55 1.55 0 0 1-1.546 0C8.003 16.757 4.5 13.827 4.5 9.587C4.5 5.428 7.941 2 12 2"/>
                        </g>
                    </svg>
                </div>
                <p class="font-semibold">Alamat :</p>
            </div>
            <p class="px-2">Rumah Aktivitas GenBI Unsulbar<br>
                Jl. Prof. Dr. Baharuddin Lopa, SH., MH., Baurung,<br>
                Kab. Majene, Prov. Sulawesi Barat.
            </p>

            <div class="flex">
                <div class="w-6 h-6 mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path fill="currentColor" fill-rule="evenodd"
                              d="M17 2.75a4.25 4.25 0 0 0-3.807 6.142c.16.32.225.71.12 1.102l-.253.946l.946-.253a1.567 1.567 0 0 1 1.102.12A4.25 4.25 0 1 0 17 2.75ZM11.25 7a5.75 5.75 0 1 1 3.19 5.15a.126.126 0 0 0-.04-.013h-.007l-1.112.297a1.4 1.4 0 0 1-1.715-1.714l.298-1.113V9.6a.126.126 0 0 0-.014-.04a5.73 5.73 0 0 1-.6-2.56ZM3.718 4.092c1.226-1.29 3.254-1.049 4.268.385l1.26 1.783c.811 1.147.743 2.74-.225 3.76l-.245.257c0 .002 0 .004-.002.006c-.013.037-.045.152-.013.372c.067.456.418 1.381 1.846 2.884c1.432 1.508 2.3 1.864 2.703 1.929a.608.608 0 0 0 .294-.007l.408-.43c.874-.92 2.236-1.101 3.335-.469l1.91 1.1c1.633.94 2.013 3.239.708 4.613l-1.42 1.495c-.443.467-1.048.866-1.795.94c-1.824.18-6.049-.055-10.478-4.718c-4.134-4.352-4.919-8.137-5.018-9.986c-.049-.914.358-1.697.894-2.261l.544.516l-.544-.516l1.57-1.653Zm3.043 1.25c-.512-.724-1.433-.767-1.956-.217l-1.57 1.653c-.33.349-.505.748-.483 1.148c.08 1.51.731 4.952 4.607 9.033c4.064 4.279 7.809 4.4 9.244 4.258c.283-.028.575-.186.854-.48l1.42-1.495c.614-.645.453-1.808-.368-2.28l-1.91-1.1c-.513-.295-1.114-.204-1.499.202l-.455.48l-.544-.517c.543.517.543.517.542.518l-.001.002l-.003.003l-.007.006l-.014.014a1.003 1.003 0 0 1-.136.112c-.08.057-.186.12-.321.172c-.276.11-.64.168-1.091.095c-.878-.143-2.028-.773-3.55-2.377c-1.528-1.608-2.113-2.807-2.243-3.7c-.067-.454-.014-.817.084-1.092a1.592 1.592 0 0 1 .23-.427l.03-.037l.014-.015l.006-.006l.003-.003l.002-.002s.001-.001.545.515l-.544-.516l.287-.302c.445-.47.51-1.264.088-1.86L6.76 5.342Z"
                              clip-rule="evenodd"/>
                    </svg>
                </div>
                <p class="font-semibold">Sosial Media :</p>
            </div>
            <div class="px-3">
                <table>
                    <tr>
                        <td>Instagram</td>
                        <td>:
                            <a href="https://instagram.com/genbiunsulbar">@genbiunsulbar</a>
                        </td>
                    </tr>
                    <tr>
                        <td>Tiktok</td>
                        <td>:
                            <a href="https://tiktok.com/@genbiunsulbar">@genbiunsulbar</a>
                        </td>
                    </tr>
                    <tr>
                        <td>Youtube</td>
                        <td>:
                            <a href="https://youtube.com/@genbisulbar3274">GenBI Sulbar</a>
                        </td>
                    </tr>
                    <tr>
                        <td>Facebook</td>
                        <td>:
                            <a href="https://facebook.com/genbisulbar">GenBI Sulbar</a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="md:w-1/2 mt-6 md:mt-0">
            <h1 class="text-xl md:text-2xl font-semibold mb-2">Contact Us!</h1>
            <form class="space-y-2" type="submit" action="{{ '/message/send' }}" method="POST">
                @csrf
                <input type="text" placeholder="Nama" name="name" id="name" required
                       class="border-4 text-gray-800 border-[#0D5B70] bg-white rounded-md w-full px-4 py-2 active:border-gray-100 focus:border-gray-100 focus:outline-none">
                <input type="email" placeholder="Email" name="email" id="email" required
                       class="border-4 text-gray-800 border-[#0D5B70] bg-white rounded-md w-full px-4 py-2 active:border-gray-100 focus:border-gray-100 focus:outline-none">
                <textarea type="text" placeholder="Pesan" name="message" id="message" required
                          class="border-4 text-gray-800 border-[#0D5B70] bg-white rounded-md w-full px-4 py-2 h-32 active:border-gray-100 focus:border-gray-100 focus:outline-none"></textarea>
                <button type="submit"
                        class="flex justify-center items-center [box-shadow:0_5px_0_#063745] bg-[#0D5B70] rounded-md w-full px-4 py-2 active:[box-shadow:0_0px_0_#063745] active:translate-y-[5px] focus:outline-none">
                        SEND
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 48 48" class="mx-2">
                        <path fill="currentColor"
                              d="M7.262 4.244c-1.787-.893-3.765.812-3.146 2.711L8.13 19.26a2 2 0 0 0 1.573 1.352l15.86 2.643c.835.14.835 1.34 0 1.48L9.704 27.378a2 2 0 0 0-1.573 1.352L4.116 41.042c-.62 1.9 1.359 3.605 3.146 2.712l35.494-17.742c1.659-.83 1.659-3.197 0-4.026L7.262 4.244Z"/>
                    </svg>
                </button>
            </form>
        </div>
    </div>
    @if (session('success'))
        <div id="success-alert" class="z-10 fixed top-4 right-4 flex items-center p-4 mb-4 text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
            <div class="flex items-center">
                <svg class="flex-shrink-0 w-4 h-4 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                </svg>
                <span class="sr-only">Success</span>
                <div class="ml-2 text-sm font-medium">
                    {{ session('success') }}
                </div>
            </div>
            <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700" onclick="closeAlert('success-alert')" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
            </button>
        </div>
    @endif

    @if (session('error'))
        <div id="error-alert" class="z-10 fixed top-4 right-4 flex items-center p-4 mb-4 text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
            <div class="flex items-center">
                <svg class="flex-shrink-0 w-4 h-4 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 0.5a9.5 9.5 0 1 0 0 19 9.5 9.5 0 0 0 0-19ZM13.707 12.293a1 1 0 1 1-1.414 1.414L10 11.414l-2.293 2.293a1 1 0 0 1-1.414-1.414L8.586 10 6.293 7.707a1 1 0 0 1 1.414-1.414L10 8.586l2.293-2.293a1 1 0 0 1 1.414 1.414L11.414 10l2.293 2.293Z"/>
                </svg>
                <span class="sr-only">Error</span>
                <div class="ml-2 text-sm font-medium">
                    {{ session('error') }}
                </div>
            </div>
            <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700" onclick="closeAlert('error-alert')" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
            </button>
        </div>
    @endif

    <div class="text-center text-gray-700 py-1 w-full bg-white">
        <p class="text-xs md:text-sm">Copyright &copy; 2025 GenBI Unsulbar</p>
    </div>
</footer>

<script>
    // Navbar scrolled
    document.addEventListener('scroll', function () {
        const navbar = document.getElementById('navbar');
        const logo = document.getElementById('logo');
        const logoText = document.getElementById('logoText');
        const navContainer = document.getElementById('navContainer');
        if (window.scrollY > 30) {
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

    // else button

    function moreMenu() {
        const moreMenu = document.getElementById('more-button');
        moreMenu.classList.contains('hidden') ? moreMenu.classList.remove('hidden') : moreMenu.classList.add('hidden')
    }

    // Mobile Menu
    function mobileMenu() {
        const mobileMenu = document.getElementById('mobile-menu');

        mobileMenu.classList.contains('hidden') ? mobileMenu.classList.remove('hidden')
            : mobileMenu.classList.add('hidden');
    }

    function closeAlert(elementId) {
        document.getElementById(elementId).style.display = 'none';
    }

    // Auto hide after 5 seconds
    setTimeout(function() {
        const successAlert = document.getElementById('success-alert');
        const errorAlert = document.getElementById('error-alert');

        if (successAlert) successAlert.style.display = 'none';
        if (errorAlert) errorAlert.style.display = 'none';
    }, 5000);

</script>
</body>
</html>
