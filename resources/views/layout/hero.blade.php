<section class="relative min-h-[calc(100vh-4rem)] flex items-center bg-gradient-to-br from-sky-50 via-white to-sky-50 overflow-hidden">
    <!-- Structured Geometric Pattern -->
    <div class="absolute inset-0 overflow-hidden pattern-grid">
        <!-- Main Grid Lines -->
        <div class="absolute inset-0 grid-lines">
            <div class="absolute top-0 left-1/4 w-px h-full bg-sky-200/40"></div>
            <div class="absolute top-0 left-1/2 w-px h-full bg-sky-200/40"></div>
            <div class="absolute top-0 left-3/4 w-px h-full bg-sky-200/40"></div>
            <div class="absolute top-1/4 left-0 w-full h-px bg-sky-200/40"></div>
            <div class="absolute top-1/2 left-0 w-full h-px bg-sky-200/40"></div>
            <div class="absolute top-3/4 left-0 w-full h-px bg-sky-200/40"></div>
        </div>

        <!-- Focus Circle -->
        <div class="absolute top-1/2 left-1/2 w-64 h-64 -translate-x-1/2 -translate-y-1/2 rounded-full border-2 border-sky-300/50 animate-[pulse_6s_ease-in-out_infinite]"></div>

        <!-- Diagonal Accents -->
        <div class="absolute top-0 right-0 w-1/3 h-full overflow-hidden">
            <div class="absolute -left-20 top-1/4 w-64 h-px bg-sky-300 rotate-45 transform origin-left"></div>
            <div class="absolute -left-10 top-1/2 w-64 h-px bg-sky-300 rotate-45 transform origin-left"></div>
            <div class="absolute left-0 top-3/4 w-64 h-px bg-sky-300 rotate-45 transform origin-left"></div>
        </div>

        <!-- Corner Elements -->
        <div class="absolute top-8 left-8 w-16 h-16 border-t-2 border-l-2 border-sky-400"></div>
        <div class="absolute bottom-8 right-8 w-16 h-16 border-b-2 border-r-2 border-sky-400"></div>
    </div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center space-y-8">
            <h1 class="text-4xl font-bold text-sky-900 sm:text-5xl md:text-6xl tracking-tight">
                <span class="block animate-[fadeInUp_1s_ease-out]">Portal Informasi</span>
                <span class="block text-sky-600 mt-2 animate-[fadeInUp_1.2s_ease-out]">Modern & Terkini</span>
            </h1>

            <p class="max-w-2xl mx-auto text-lg text-gray-600 leading-relaxed animate-[fadeInUp_1.4s_ease-out]">
                Jelajahi artikel-artikel menarik dan wawasan terbaru tentang teknologi yang dikemas secara modern dan informatif.
            </p>

            <div class="flex justify-center gap-4 animate-[fadeInUp_1.6s_ease-out]">
                <a href="#" class="inline-flex items-center px-6 py-2.5 text-sm font-medium rounded-full text-white bg-sky-600 hover:bg-sky-700 transform transition-all duration-200 hover:scale-105 shadow-lg hover:shadow-sky-200">
                    Mulai Jelajahi
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>

<style>
    @keyframes fadeInUp {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }

    @keyframes pulse {
        0%, 100% { transform: translate(-50%, -50%) scale(1); opacity: 0.3; }
        50% { transform: translate(-50%, -50%) scale(1.1); opacity: 0.5; }
    }

    .pattern-grid {
        background-image:
            linear-gradient(to right, rgba(125, 211, 252, 0.05) 1px, transparent 1px),
            linear-gradient(to bottom, rgba(125, 211, 252, 0.05) 1px, transparent 1px);
        background-size: 40px 40px;
    }

    .grid-lines {
        background-image:
            linear-gradient(to right, rgba(125, 211, 252, 0.1) 1px, transparent 1px),
            linear-gradient(to bottom, rgba(125, 211, 252, 0.1) 1px, transparent 1px);
        background-size: 100px 100px;
    }
</style>
