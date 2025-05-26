<!-- Navbar -->
    <nav id="navbar" class="navbar fixed w-full top-0 z-50 bg-gray-200">
        <div class="max-w-7xl mx-auto px-3 sm:px-4 lg:px-4">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <img src="{{ asset('storage/img/TandaBaca_logo.png') }}" alt="Logo TandaBaca" class="w-35 h-25">
                </div>

                <!-- Navigation Menu -->
                <div class="hidden sm:flex sm:space-x-3">
                    <a href="#" class="text-black px-3 py-2 mr-2 text-sm font-medium border-b-2 border-transparent hover:border-black transition duration-150 ease-in-out">
                        Terpopuler
                    </a>
                    <a href="#" class="text-black px-3 py-2 mr-2 text-sm font-medium border-b-2 border-transparent hover:border-black transition duration-150 ease-in-out whitespace-nowrap">
                        Berita Utama
                    </a>
                    <a href="#" class="text-black px-3 py-2 mr-2 text-sm font-medium border-b-2 border-transparent hover:border-black transition duration-150 ease-in-out">
                        Terbaru
                    </a>
                    <a href="#" class="text-black px-3 py-2 mr-2 text-sm font-medium border-b-2 border-transparent hover:border-black transition duration-150 ease-in-out">
                        Fokus
                    </a>
                    <p class="mt-1">|</p>
                    <a href="#" class="text-black px-3 py-2 mr-2 text-sm font-medium border-b-2 border-transparent hover:border-black transition duration-150 ease-in-out">
                        Komunitas
                    </a>
                    <a href="#" class="text-black px-3 py-2 mr-2 text-sm font-medium border-b-2 border-transparent hover:border-black transition duration-150 ease-in-out">
                        Event
                    </a>
                    <!-- Search Box -->
                    <div class="relative mt-1">
                        <input
                            type="text"
                            placeholder="Cari artikel..."
                            class="py-1 px-4 pr-10 rounded-none border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-0 focus:border-transparent text-sm bg-white"
                        >
                        <button class="absolute right-2 top-9.5 transform -translate-y-1/2 text-gray-500 hover:text-blue-600 -mt-3">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                    <a href="{{ route('login') }}" class="text-black hover:bg-white px-3 py-2 rounded-md text-sm font-medium transition duration-150 ease-in-out">
                        <i class="bi bi-bell"></i>
                    </a>
                    <a href="{{ route('login') }}" class="text-black hover:bg-white/20 px-3 py-2 rounded-md text-sm font-medium transition duration-150 ease-in-out">
                        <i class="bi bi-person-circle mr-1"></i>
                        {{-- Log In --}}
                    </a>
                </div>
            </div>
        </div>
        <!-- Mini Navbar -->
        <div class="fixed w-full h-7 z-50 bg-slate-800 shadow-2xs">
            <div class="max-w-7xl mx-auto my-auto">
                <div class="hidden sm:flex sm:space-x-8 justify-center items-center">
                    <!-- Dropdown Container -->
                    <div class="group relative">
                        <div class="flex items-center text-white hover:text-black hover:font-bold hover:bg-white hover:block hover:h-7 px-5">
                            <button>Nasional</button>
                        </div>
                    </div>
                    <div class="group relative">
                        <div class="flex items-center text-white hover:text-black hover:font-bold hover:bg-white hover:block hover:h-7 px-5">
                            <button>Internasional</button>
                        </div>
                    </div>
                    <div class="group relative">
                        <div class="flex items-center text-white  hover:text-black hover:font-bold hover:bg-white hover:block hover:h-7 px-5">
                            <button>Teknologi</button>
                        </div>
                    </div>
                    <div class="group relative">
                        <div class="flex items-center text-white  hover:text-black hover:font-bold hover:bg-white hover:block hover:h-7 px-5">
                            <button>Ekonomi</button>
                        </div>
                    </div>
                    <div class="group relative">
                        <div class="flex items-center text-white  hover:text-black hover:font-bold hover:bg-white hover:block hover:h-7 px-5">
                            <button>Olahraga</button>
                        </div>
                    </div>
                    <div class="group relative">
                        <div class="flex items-center text-white hover:text-black hover:font-bold hover:bg-white hover:block hover:h-7 px-5">
                            <button>Otomotif</button>
                        </div>
                    </div>
                    <div class="group relative">
                        <div class="flex items-center text-white hover:text-black hover:font-bold hover:bg-white hover:block hover:h-7 px-5">
                            <button>Hiburan</button>
                        </div>
                    </div>
                    <div class="group relative">
                        <div class="flex items-center text-white hover:text-black hover:font-bold hover:bg-white hover:block hover:h-7 px-5 whitespace-nowrap">
                            <button>Gaya Hidup</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </nav>

    {{-- <style>
        /* Custom CSS untuk transisi halus */
        .navbar {
            transition: all 0.3s ease-in-out;
        }

        /* Hero section tinggi penuh viewport */
        .hero {
            height: 100vh;
            background: linear-gradient(135deg, #f0f9ff 0%, #e0f2fe 100%);
        }
    </style> --}}
<script>
    document.addEventListener('DOMContentLoaded', function() {
    const navbar = document.getElementById('navbar');
    const heroHeight = document.querySelector('.hero').offsetHeight;

    window.addEventListener('scroll', function() {
        // Ubah navbar saat scroll melewati 80% tinggi hero section
        if (window.scrollY > heroHeight * 0.8) {
            navbar.classList.add('bg-sky-700', 'shadow-sm', 'border-b', 'border-sky-200', 'opacity-90');
            navbar.classList.remove('bg-transparent');
        } else {
            navbar.classList.remove('bg-sky-700', 'shadow-sm', 'border-b', 'border-sky-200', 'opacity-90');
            navbar.classList.add('bg-transparent');
        }
    });

    // Inisialisasi awal untuk mobile (jika perlu)
    if (window.innerWidth < 640) {
        navbar.classList.add('bg-sky-700', 'shadow-sm');
    }
});
</script>
