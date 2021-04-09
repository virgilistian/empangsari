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
                                href="{{ route('orders') }}">Order Online</a><a
                                class="inline-block w-full lg:w-auto py-2 px-6 leading-loose font-semibold bg-white hover:bg-gray-50 rounded-l-xl rounded-t-xl transition duration-200"
                                href="{{ route('register') }}">Registrasi</a></div>
                    </div>
                </div>
            </div>
            <div class="w-full lg:w-1/2 px-4 flex items-center justify-center">
                <div class="relative" style="z-index: 0;"><img
                        class="h-128 w-full max-w-lg object-cover rounded-3xl md:rounded-br-none"
                        src="{{ asset('../img/photo.jpg') }}" alt=""><img class="hidden md:block absolute"
                        style="top:-2rem; right: 3rem; z-index: -1;" src="{{ asset('elements/green-dark-up.svg') }}"
                        alt=""><img class="hidden md:block absolute" style="bottom:-2rem; right: -2rem; z-index: -1;"
                        src="{{ asset('elements/wing-green-down.svg') }}" alt=""><img class="hidden md:block absolute"
                        style="top:3rem; right: -3rem; z-index: -1;"
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
    <nav class="fixed top-0 left-0 bottom-0 flex flex-col w-5/6 max-w-sm py-6 px-6 bg-white border-r overflow-y-auto">
        <div class="flex items-center mb-8">
            <a class="mr-auto text-3xl font-bold leading-none" href="#"><img class="h-10"
                    src="{{ asset('logo/atis/atis-mono-black.svg') }}" alt="" width="auto"></a>
            <button class="navbar-close">
                <svg class="h-6 w-6 text-gray-400 cursor-pointer hover:text-gray-500" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewbox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                    </path>
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
                        href="#">Reservasi</a></li>
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
                        src="{{ asset('social/facebook.svg') }}" alt=""></a><a class="inline-block px-1" href="#"><img
                        src="{{ asset('social/twitter.svg') }}" alt=""></a><a class="inline-block px-1" href="#"><img
                        src="{{ asset('social/instagram.svg') }}" alt=""></a></div>
        </div>
    </nav>
</div>