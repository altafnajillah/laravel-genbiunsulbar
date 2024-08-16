<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="/public/GenBIUnsulbar.png" type="image/png">
    <title>GenBI Unsulbar | @yield('title')</title>
    <style>
        .navbar {
            transition: all 0.3s ease;
        }

        .navbar.scrolled {
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
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

    </style>
    @vite('resources/css/app.css')

</head>
<body>

<!--Navbar-->
<nav id="navbar" class="navbar fixed w-full">
    <div id="navContainer" class="container bg-white mx-auto py-6 px-20 flex justify-around items-center text-gray-800">

        <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
            <!-- Mobile menu button-->
            <button type="button" class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                <span class="absolute -inset-0.5"></span>
                <span class="sr-only">Open main menu</span>
                <!--
                  Icon when menu is closed.

                  Menu open: "hidden", Menu closed: "block"
                -->
                <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
                <!--
                  Icon when menu is open.

                  Menu open: "block", Menu closed: "hidden"
                -->
                <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <div class="hidden flex-1 md:flex justify-around items-center">
            <a href="#" class="hover:text-blue-500 transition">Berita</a>
            <a href="#" class="hover:text-blue-500 transition">Koleksi</a>
        </div>
        <a href="#">
            <div class="flex items-center mx-2">
                <img id="logoGenBI" class="logo" src="{{ asset("GenBIUnsulbar.png")}}" width="50px" alt="GenBI Unsulbar">
                <div id="logoGenBIText" class="logo-text text-2xl font-bold ml-2">GenBI Unsulbar</div>
            </div>
        </a>
        <div class="hidden flex-1 md:flex justify-around items-center">
            <a href="#" class="hover:text-blue-500 transition">Anggota</a>
            <a href="#" class="hover:text-blue-500 transition">Tentang</a>
        </div>
    </div>
</nav>

<div class="container mx-auto flex justify-center items-center pt-24">
    <div class="text-4xl font-ubuntu">
        @yield('content')
    </div>
</div>

<script>
    document.addEventListener('scroll', function () {
        const navbar = document.getElementById('navbar');
        const logo = document.getElementById('logoGenBI');
        const logoText = document.getElementById('logoGenBIText');
        const navContainer = document.getElementById('navContainer');
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
            logo.classList.add('scrolled')
            logoText.classList.add('scrolled')
        } else {
            navbar.classList.remove('scrolled');
            logo.classList.remove('scrolled')
            logoText.classList.remove('scrolled')
        }
    });
</script>
</body>
</html>
