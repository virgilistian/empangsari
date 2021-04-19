<div>
    <div class="pt-16 px-10 grid lg:grid-cols-5 pb-20">
        <!-- nav start -->
        <div class="lg:col-span-1">
            @livewire('categories')
        </div>

        <main class="lg:col-span-4">
            <span class="font-bold text-1xl md:text-3xl">Ninja Burgers</span>
            <div class="mt-5 grid lg:grid-cols-3 sm:grid-cols-2 gap-16">
                <!--card-->
                <div class="bg-white rounded-lg shadow-md p-3 hover:shadow-lg">
                    <div class="transform hover:scale-90 transition duration-300">
                        <div class="flex space-x-1 absolute">
                            <span class="bg-blue-400 text-xs text-white px-2 py-1 justify-center font-bold">New</span>
                            <span class="bg-red-400 text-xs text-white px-2 py-1 justify-center font-bold">37%</span>
                        </div>
                        <img src="{{ asset('../img/galeri/makan1.jpg') }}" alt="burger" class="w-full">
                    </div>
                    <div class="m-3 text-center">
                        <span class="font-bold text-xl">Bacon jammer</span>
                        <span class="block text-gray-600 text-sm">bacon, iceberg, mayo</span>
                        <span class="block text-gray-400 line-through font-semibold">
                            Rp. 150.000</span>
                        {{-- <span
                            class="justify-center px-2 py-1 text-xs font-bold leading-none text-red-50 bg-red-500 rounded-full">25%</span> --}}
                        <span class="block text-gray-800 font-bold text-3xl">Rp. 100.000</span>
                        <button
                            class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow mt-5">
                            ORDER
                        </button>
                    </div>
                </div>
                <!--card end-->

                <!--card-->
                <div class="bg-white rounded-lg shadow-md p-3 hover:shadow-lg">
                    <img src="{{ asset('../img/galeri/makan2.jpg') }}" alt="burger"
                        class="w-full transform hover:scale-90 transition duration-300">
                    <div class="m-3 text-center">
                        <span class="font-bold text-xl">Bacon jammer</span>
                        <span class="block text-gray-600 text-sm">bacon, iceberg, mayo</span>
                        <span class="block text-custom-yellow mt-10 font-bold text-3xl">Rp. 24.000</span>
                        <button
                            class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow mt-5">
                            ORDER
                        </button>
                    </div>
                </div>
                <!--card end-->

                <!--card-->
                <div class="bg-white rounded-lg shadow-md p-3 hover:shadow-lg">
                    <img src="{{ asset('../img/galeri/makan3.jpg') }}" alt="burger"
                        class="w-full transform hover:scale-90 transition duration-300">
                    <div class="m-3 text-center">
                        <span class="font-bold text-xl">Bacon jammer</span>
                        <span class="block text-gray-600 text-sm">bacon, iceberg, mayo</span>
                        <span class="block text-custom-yellow mt-10 font-bold text-3xl">Rp. 24.000</span>
                        <button
                            class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow mt-5">
                            ORDER
                        </button>
                    </div>
                </div>
                <!--card end-->

                <!--card-->
                <div class="bg-white rounded-lg shadow-md p-3 hover:shadow-lg">
                    <img src="{{ asset('../img/galeri/makan1.jpg') }}" alt="burger"
                        class="w-full transform hover:scale-90 transition duration-300">
                    <div class="m-3 text-center">
                        <span class="font-bold text-xl">Bacon jammer</span>
                        <span class="block text-gray-600 text-sm">bacon, iceberg, mayo</span>
                        <span class="block text-custom-yellow mt-10 font-bold text-3xl">Rp. 24.000</span>
                        <button
                            class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow mt-5">
                            ORDER
                        </button>
                    </div>
                </div>
                <!--card end-->

                <!--card-->
                <div class="bg-white rounded-lg shadow-md p-3 hover:shadow-lg">
                    <img src="{{ asset('../img/galeri/makan2.jpg') }}" alt="burger"
                        class="w-full transform hover:scale-90 transition duration-300">
                    <div class="m-3 text-center">
                        <span class="font-bold text-xl">Bacon jammer</span>
                        <span class="block text-gray-600 text-sm">bacon, iceberg, mayo</span>
                        <span class="block text-custom-yellow mt-10 font-bold text-3xl">Rp. 24.000</span>
                        <button
                            class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow mt-5">
                            ORDER
                        </button>
                    </div>
                </div>
                <!--card end-->

                <!--card-->
                <div class="bg-white rounded-lg shadow-md p-3 hover:shadow-lg">
                    <img src="{{ asset('../img/galeri/makan3.jpg') }}" alt="burger"
                        class="w-full transform hover:scale-90 transition duration-300">
                    <div class="m-3 text-center">
                        <span class="font-bold text-xl">Bacon jammer</span>
                        <span class="block text-gray-600 text-sm">bacon, iceberg, mayo</span>
                        <span class="block text-custom-yellow mt-10 font-bold text-3xl">Rp. 24.000</span>
                        <button
                            class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow mt-5">
                            ORDER
                        </button>
                    </div>
                </div>
                <!--card end-->
            </div>
        </main>
    </div>
</div>
