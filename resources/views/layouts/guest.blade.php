<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>ZCC Attendance</title>

    
    <link rel="shortcut icon" href="https://res.cloudinary.com/bluvapr/image/upload/v1603760801/zion/logo_uhsv7a.png" type="image/x-icon">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body class="dark:bg-slate-900">
    <!-- Header -->
    <nav class="bg-white dark:bg-gray-900 fixed w-full z-20 top-0 left-0 border-b border-gray-200 dark:border-gray-600 shadow">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="/" class="flex items-center">
                <img src="https://res.cloudinary.com/bluvapr/image/upload/v1603760801/zion/logo_uhsv7a.png" class="h-16 mr-3" alt="ZCC Logo" />
                <span class="self-center lg:text-2xl text-base font-semibold text-gray-950 whitespace-nowrap dark:text-white uppercase">ZCC India</span>
            </a>
            <div class="flex md:order-2">
                <a href="/admin/login" type="button" class="text-white dark:text-blue-800 dark:hover:bg-gray-100  hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center mr-3 md:mr-0 bg-blue-950 dark:bg-gray-50 dark:font-extrabold" >
                    Sign In
                </a>
                <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-slate-900 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <a href="/" class="block py-2 pl-3 pr-4 rounded md:p-0 @if(Request::is('/'))text-white  bg-blue-700 md:text-blue-700 md:bg-transparent md:dark:text-blue-500 @else text-gray-900 hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 @endif " aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="/about" class="block py-2 pl-3 pr-4 rounded md:p-0 @if(Request::is('about'))text-white  bg-blue-700 md:text-blue-700  md:bg-transparent  md:dark:text-blue-500 @else text-gray-900  hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700  md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 @endif ">About</a>
                    </li>
                    <li>
                        <a href="/services" class="block py-2 pl-3 pr-4 rounded md:p-0 @if(Request::is('services'))text-white  bg-blue-700 md:text-blue-700  md:bg-transparent  md:dark:text-blue-500 @else text-gray-900  hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700  md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 @endif ">Services</a>
                    </li>
                    <li>
                        <a href="/portfolio" class="block py-2 pl-3 pr-4 rounded md:p-0 @if(Request::is('portfolio'))text-white  bg-blue-700 md:text-blue-700 md:bg-transparent  md:dark:text-blue-500 @else text-gray-900 hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700  md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 @endif ">Portfolio</a>
                    </li>
                    <li>
                        <a href="/blog" class="block py-2 pl-3 pr-4 rounded md:p-0 @if(Request::is('blog'))text-white  bg-blue-700 md:text-blue-700 md:bg-transparent  md:dark:text-blue-500 @else text-gray-900 hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700  md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 @endif ">Blog</a>
                    </li>
                    <li>
                        <a href="/contact" class="block py-2 pl-3 pr-4 rounded md:p-0 @if(Request::is('contact'))text-white  bg-blue-700 md:text-blue-700 md:bg-transparent md:dark:text-blue-500 @else text-gray-900 hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 @endif ">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <main>
        @yield('content')
    </main>

    @livewireScripts
    <!-- footer -->
    <footer class="bg-white rounded-lg shadow dark:bg-slate-900 m-4">
        <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
            <div class="sm:flex sm:items-center sm:justify-between">
                <a href="/" class="flex items-center mb-4 sm:mb-0">
                    <img src="{{asset('images/logo.png')}}" class="h-16 mr-3" alt="Comworks Logo" />
                    <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white uppercase">enlinked ComWorks</span>
                </a>
                <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0 dark:text-gray-400">
                    <li>
                        <a href="/about" class="mr-4 hover:underline md:mr-6 ">About</a>
                    </li>
                    <li>
                        <a href="#" class="mr-4 hover:underline md:mr-6">Privacy Policy</a>
                    </li>
                    <li>
                        <a href="/services" class="mr-4 hover:underline md:mr-6 ">Services</a>
                    </li>
                    <li>
                        <a href="/contact" class="hover:underline">Contact</a>
                    </li>
                </ul>
            </div>
            <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
            <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="/" class="hover:underline">Comworks</a>. All Rights Reserved.</span>
        </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.js"></script>


</body>

</html>