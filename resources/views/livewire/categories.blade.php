<div>
    <nav>
        <ul class="hidden lg:block mr-10 mb-10" id="menu">
            <span class="px-3 text-gray-500">Kategori</span>
            @forelse ($categories as $category)
                <li class="my-3">
                    <a class="hover:block rounded-lg py-2 px-3 text-md tracking-wider font-bold hover:bg-yellow-200"
                        href="items-4.html">
                        <i class="fas fa-carrot mr-2"></i>
                        <span>{{ $category->name }}</span>
                    </a>
                </li>
            @empty
                <span>Data not found</span>
            @endforelse
        </ul>
    </nav>
</div>
