<nav class="bg-sky-700 border-b border-sky-200 fixed w-full top-0 z-50 shadow-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <!-- Logo -->
            <div class="flex-shrink-0 flex items-center">
                <span class="text-white text-xl font-bold">TulisAja</span>
            </div>

            <!-- Navigation Menu -->
            <div class="hidden sm:flex sm:space-x-8">
                <a href="#" class="text-white hover:bg-white/20 px-3 py-2 rounded-md text-sm font-medium transition duration-150 ease-in-out">
                    Beranda
                </a>
                <a href="#" class="text-white hover:bg-white/20 px-3 py-2 rounded-md text-sm font-medium transition duration-150 ease-in-out">
                    Artikel
                </a>
                <a href="#" class="text-white hover:bg-white/20 px-3 py-2 rounded-md text-sm font-medium transition duration-150 ease-in-out">
                    Tentang Kami
                </a>
                <a href="{{ route('login') }}" class="text-white hover:bg-white/20 px-3 py-2 rounded-md text-sm font-medium transition duration-150 ease-in-out">
                    <i class="bi bi-person"></i>
                    Log In
                </a>
            </div>
        </div>
    </div>
</nav>
