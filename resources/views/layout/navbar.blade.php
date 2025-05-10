<!-- Navbar -->
    <nav id="navbar" class="navbar fixed w-full top-0 z-50 bg-transparent bg-gray-100 opacity-70">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <img src="{{ asset('storage/img/TandaBaca_logo.png') }}" alt="Logo TandaBaca" class="w-35 h-25">
                </div>

                <!-- Navigation Menu -->
                <div class="hidden sm:flex sm:space-x-8">
                    <a href="#" class="text-black hover:bg-white/20 px-3 py-2 rounded-md text-sm font-medium transition duration-150 ease-in-out">
                        Beranda
                    </a>
                    <a href="#" class="text-black hover:bg-white/20 px-3 py-2 rounded-md text-sm font-medium transition duration-150 ease-in-out">
                        Artikel
                    </a>
                    <a href="#" class="text-black hover:bg-white/20 px-3 py-2 rounded-md text-sm font-medium transition duration-150 ease-in-out">
                        Tentang Kami
                    </a>
                    <a href="{{ route('login') }}" class="text-black hover:bg-white/20 px-3 py-2 rounded-md text-sm font-medium transition duration-150 ease-in-out">
                        <i class="bi bi-person mr-1"></i>
                        Log In
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <style>
        /* Custom CSS untuk transisi halus */
        .navbar {
            transition: all 0.3s ease-in-out;
        }

        /* Hero section tinggi penuh viewport */
        .hero {
            height: 100vh;
            background: linear-gradient(135deg, #f0f9ff 0%, #e0f2fe 100%);
        }
    </style>
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
