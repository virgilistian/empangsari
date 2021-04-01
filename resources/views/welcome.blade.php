<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body class="antialiased bg-body text-body font-body">
    <section class="skewed-bottom-right">
        <nav class="relative px-6 py-6 flex justify-between items-center bg-gray-50">
            <a class="text-3xl font-bold leading-none" href="#"><img class="h-12"
                    src="{{ asset('/logo/atis/atis-mono-black.svg') }} " alt="" width="auto"></a>
            <div class="lg:hidden">
                <button class="navbar-burger flex items-center text-gray-400 p-3">
                    <svg class="block h-4 w-4 fill-current" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <title>Mobile menu</title>
                        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                    </svg>
                </button>
            </div>
            <ul
                class="hidden absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2 lg:flex lg:mx-auto lg:flex lg:items-center lg:w-auto lg:space-x-6">
                <li><a class="text-sm text-gray-400 hover:text-gray-500" href="#">Start</a></li>
                <li class="text-gray-800">
                    <svg class="w-4 h-4 current-fill" xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z">
                        </path>
                    </svg>
                </li>
                <li><a class="text-sm text-green-600 font-bold" href="#">About Us</a></li>
                <li class="text-gray-800">
                    <svg class="w-4 h-4 current-fill" xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z">
                        </path>
                    </svg>
                </li>
                <li><a class="text-sm text-gray-400 hover:text-gray-500" href="#">Services</a></li>
                <li class="text-gray-800">
                    <svg class="w-4 h-4 current-fill" xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z">
                        </path>
                    </svg>
                </li>
                <li><a class="text-sm text-gray-400 hover:text-gray-500" href="#">Platform</a></li>
                <li class="text-gray-800">
                    <svg class="w-4 h-4 current-fill" xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z">
                        </path>
                    </svg>
                </li>
                <li><a class="text-sm text-gray-400 hover:text-gray-500" href="#">Testimonials</a></li>
            </ul>
            <a class="hidden lg:inline-block py-2 px-6 bg-white hover:bg-gray-50 text-sm text-green-600 font-bold rounded-l-xl rounded-t-xl transition duration-200"
                href="{{ route('login') }}">Login</a>
        </nav>
        <div class="bg-gray-50 pt-12 lg:pt-20 pb-20 radius-for-skewed">
            <div class="container mx-auto px-4">
                <div class="flex flex-wrap -mx-4">
                    <div class="w-full lg:w-1/2 px-4 mb-12 md:mb-20 lg:mb-0 flex items-center">
                        <div class="w-full text-center lg:text-left">
                            <div class="max-w-md mx-auto lg:mx-0">
                                <h2 class="mb-3 text-4xl lg:text-5xl font-bold font-heading">
                                    <span>Build &amp; Launch without</span>
                                    <span class="text-green-600">problems</span>
                                </h2>
                            </div>
                            <div class="max-w-sm mx-auto lg:mx-0">
                                <p class="mb-6 text-gray-400 leading-loose">Lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit. Pellentesque efficitur nisl sodales egestas lobortis.</p>
                                <div><a class="inline-block mb-3 lg:mb-0 lg:mr-3 w-full lg:w-auto py-2 px-6 leading-loose bg-green-600 hover:bg-green-700 text-white font-semibold rounded-l-xl rounded-t-xl transition duration-200"
                                        href="#">Get Started</a><a
                                        class="inline-block w-full lg:w-auto py-2 px-6 leading-loose font-semibold bg-white hover:bg-gray-50 rounded-l-xl rounded-t-xl transition duration-200"
                                        href="#">How it works</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/2 px-4 flex items-center justify-center">
                        <div class="relative" style="z-index: 0;"><img
                                class="h-128 w-full max-w-lg object-cover rounded-3xl md:rounded-br-none"
                                src="{{ asset('../img/photo.jpg') }}" alt=""><img class="hidden md:block absolute"
                                style="top:-2rem; right: 3rem; z-index: -1;"
                                src="{{ asset('elements/green-dark-up.svg') }}" alt=""><img
                                class="hidden md:block absolute" style="bottom:-2rem; right: -2rem; z-index: -1;"
                                src="{{ asset('elements/wing-green-down.svg') }}" alt=""><img
                                class="hidden md:block absolute" style="top:3rem; right: -3rem; z-index: -1;"
                                src="{{ asset('elements/bullets-gray-right.svg') }}" alt=""><img
                                class="hidden md:block absolute" style="bottom:2.5rem; left: -4.5rem; z-index: -1;"
                                src="{{ asset('elements/bullets-gray-left.svg') }}" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mr-for-radius">
            <svg class="h-8 md:h-12 lg:h-20 w-full text-gray-50" viewbox="0 0 10 10" preserveaspectratio="none">
                <polygon fill="currentColor" points="0 0 10 0 0 10"></polygon>
            </svg>
        </div>
        <div class="hidden navbar-menu relative z-50">
            <div class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-25"></div>
            <nav
                class="fixed top-0 left-0 bottom-0 flex flex-col w-5/6 max-w-sm py-6 px-6 bg-white border-r overflow-y-auto">
                <div class="flex items-center mb-8">
                    <a class="mr-auto text-3xl font-bold leading-none" href="#"><img class="h-10"
                            src="{{ asset('logo/atis/atis-mono-black.svg') }}" alt="" width="auto"></a>
                    <button class="navbar-close">
                        <svg class="h-6 w-6 text-gray-400 cursor-pointer hover:text-gray-500"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
                <div>
                    <ul>
                        <li class="mb-1"><a
                                class="block p-4 text-sm font-semibold text-gray-400 hover:bg-green-50 hover:text-green-600 rounded"
                                href="#">Reservasi</a></li>
                        <li class="mb-1"><a
                                class="block p-4 text-sm font-semibold text-gray-400 hover:bg-green-50 hover:text-green-600 rounded"
                                href="#">Tentang Kami</a></li>
                        <li class="mb-1"><a
                                class="block p-4 text-sm font-semibold text-gray-400 hover:bg-green-50 hover:text-green-600 rounded"
                                href="#">Layanan</a></li>
                        <li class="mb-1"><a
                                class="block p-4 text-sm font-semibold text-gray-400 hover:bg-green-50 hover:text-green-600 rounded"
                                href="#">Lokasi & Jam Layanan</a></li>
                        <li class="mb-1"><a
                                class="block p-4 text-sm font-semibold text-gray-400 hover:bg-green-50 hover:text-green-600 rounded"
                                href="#">Testimonials</a></li>
                    </ul>
                </div>
                <div class="mt-auto">
                    <div class="pt-6"><a
                            class="block px-4 py-3 mb-3 leading-loose text-xs text-center font-semibold leading-none bg-gray-50 hover:bg-gray-100 rounded-l-xl rounded-t-xl"
                            href="#">Sign In</a><a
                            class="block px-4 py-3 mb-2 leading-loose text-xs text-center text-white font-semibold bg-green-600 hover:bg-green-700 rounded-l-xl rounded-t-xl"
                            href="#">Sign Up</a></div>
                    <p class="my-4 text-xs text-center text-gray-400">
                        <span>&copy; 2020 All rights reserved.</span>
                    </p>
                    <div class="text-center"><a class="inline-block px-1" href="#"><img
                                src="{{ asset('social/facebook.svg') }}" alt=""></a><a class="inline-block px-1"
                            href="#"><img src="{{ asset('social/twitter.svg') }}" alt=""></a><a
                            class="inline-block px-1" href="#"><img src="{{ asset('social/instagram.svg') }}"
                                alt=""></a></div>
                </div>
            </nav>
        </div>
    </section>
    <section class="bg-white">
        <div class="max-w-screen-xl px-4 py-12 mx-auto space-y-8 overflow-hidden sm:px-6 lg:px-8">
            <nav class="flex flex-wrap justify-center -mx-5 -my-2">
                <div class="px-5 py-2">
                    <a href="#" class="text-base leading-6 text-gray-500 hover:text-gray-900">
                        Beranda
                    </a>
                </div>
                <div class="px-5 py-2">
                    <a href="#" class="text-base leading-6 text-gray-500 hover:text-gray-900">
                        Harga
                    </a>
                </div>
                <div class="px-5 py-2">
                    <a href="#" class="text-base leading-6 text-gray-500 hover:text-gray-900">
                        Lokasi & Jam Operasional
                    </a>
                </div>
                <div class="px-5 py-2">
                    <a href="#" class="text-base leading-6 text-gray-500 hover:text-gray-900">
                        Acara
                    </a>
                </div>
                <div class="px-5 py-2">
                    <a href="#" class="text-base leading-6 text-gray-500 hover:text-gray-900">
                        Reservasi
                    </a>
                </div>
            </nav>
            <div class="flex justify-center mt-8 space-x-6">
                <a href="#" class="text-gray-400 hover:text-gray-500">
                    <span class="sr-only">Facebook</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd"
                            d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                            clip-rule="evenodd"></path>
                    </svg>
                </a>
                <a href="#" class="text-gray-400 hover:text-gray-500">
                    <span class="sr-only">Instagram</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd"
                            d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                            clip-rule="evenodd"></path>
                    </svg>
                </a>
                <a href="#" class="text-gray-400 hover:text-gray-500">
                    <span class="sr-only">Twitter</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84">
                        </path>
                    </svg>
                </a>
            </div>
            <p class="mt-8 text-base leading-6 text-center text-gray-400">
                © 2021 empangsari. All rights reserved.
            </p>
        </div>
    </section>
    @livewireScripts
</body>

</html>
