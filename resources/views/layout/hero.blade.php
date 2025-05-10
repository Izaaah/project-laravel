<section class="relative min-h-[calc(100vh-4rem)] flex items-center bg-gradient-to-br from-gray-50 to-gray-100 overflow-hidden">
    <!-- Geometric Pattern -->
    <div class="absolute inset-0 overflow-hidden">
        <!-- Subtle Grid -->
        <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(circle, #999 1px, transparent 1px); background-size: 40px 40px;"></div>

        <!-- Animated Lines -->
        <div class="absolute inset-0">
            <div class="absolute top-0 left-1/4 w-px h-full bg-gray-300/40 animate-[lineAppear_1.5s_ease-out]"></div>
            <div class="absolute top-0 left-1/2 w-px h-full bg-gray-300/40 animate-[lineAppear_1.8s_ease-out]"></div>
            <div class="absolute top-0 left-3/4 w-px h-full bg-gray-300/40 animate-[lineAppear_2.1s_ease-out]"></div>
        </div>

        <!-- Floating Elements -->
        <div class="absolute top-1/3 left-1/5 w-3 h-3 rounded-full bg-gray-400/30 animate-[float_12s_ease-in-out_infinite]"></div>
        <div class="absolute top-2/5 right-1/4 w-2 h-2 rounded-full bg-gray-500/20 animate-[float_8s_ease-in-out_infinite_3s]"></div>

        <!-- Typography Focus Element -->
        <div class="absolute top-1/2 left-1/2 w-72 h-72 -translate-x-1/2 -translate-y-1/2 rounded-full border border-gray-300/30 animate-[pulse_10s_cubic-bezier(0.4,0,0.6,1)_infinite]"></div>
    </div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
        <div class="relative max-w-2xl mx-auto text-center">
            <div class="mb-8 animate-[fadeIn_0.8s_ease-out]">
                <span class="text-xs font-medium tracking-wider text-gray-500 uppercase">Platform Penulisan Modern</span>
            </div>

            <h1 class="text-5xl font-normal text-gray-800 sm:text-6xl md:text-7xl tracking-tight leading-tight">
                <span class="block animate-[fadeIn_1s_ease-out] font-serif italic">Tanda</span>
                <span class="block animate-[fadeIn_1.2s_ease-out] font-serif italic text-gray-600 mt-2">Baca</span>
            </h1>

            <p class="mt-8 text-gray-500 leading-relaxed max-w-lg mx-auto animate-[fadeIn_1.4s_ease-out]">
                Tempat di mana setiap titik, koma, dan huruf menemukan maknanya. Platform profesional untuk penulis yang menghargai detail.
            </p>

            <div class="mt-12 flex flex-col sm:flex-row justify-center gap-4 animate-[fadeIn_1.6s_ease-out]">
                <a href="#" class="inline-flex items-center px-8 py-3 text-sm font-medium rounded-full text-white bg-gray-800 hover:bg-gray-700 transition-all duration-300 group">
                    Mulai Menulis
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2 transition-transform duration-300 group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7" />
                    </svg>
                </a>
                <a href="#" class="inline-flex items-center px-8 py-3 text-sm font-medium rounded-full text-gray-700 bg-transparent border border-gray-300 hover:bg-gray-50 transition-all duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    Lihat Demo
                </a>
            </div>
        </div>
    </div>
</section>

<style>
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(10px); }
        to { opacity: 1; transform: translateY(0); }
    }

    @keyframes lineAppear {
        from { transform: scaleY(0); opacity: 0; }
        to { transform: scaleY(1); opacity: 1; }
    }

    @keyframes pulse {
        0%, 100% { transform: translate(-50%, -50%) scale(1); opacity: 0.1; }
        50% { transform: translate(-50%, -50%) scale(1.03); opacity: 0.3; }
    }

    @keyframes float {
        0%, 100% { transform: translate(0, 0); }
        25% { transform: translate(5px, -10px); }
        50% { transform: translate(10px, 5px); }
        75% { transform: translate(-5px, 10px); }
    }
</style>

<section class="relative min-h-[calc(100vh-4rem)] flex items-center bg-gradient-to-br from-gray-100 via-gray-50 to-gray-200 overflow-hidden">
    <!-- Geometric Pattern -->
    <div class="absolute inset-0 overflow-hidden">
        <!-- Subtle Grid -->
        <div class="absolute inset-0 opacity-20" style="background-image: radial-gradient(circle, #999 1px, transparent 1px); background-size: 20px 20px;"></div>

        <!-- Animated Lines -->
        <div class="absolute inset-0 grid-lines">
            <div class="absolute top-0 left-1/4 w-px h-full bg-gray-300/50 animate-[lineAppear_2s_ease-out]"></div>
            <div class="absolute top-0 left-1/2 w-px h-full bg-gray-300/50 animate-[lineAppear_2.2s_ease-out]"></div>
            <div class="absolute top-0 left-3/4 w-px h-full bg-gray-300/50 animate-[lineAppear_2.4s_ease-out]"></div>
            <div class="absolute top-1/4 left-0 w-full h-px bg-gray-300/50 animate-[lineAppear_2.6s_ease-out]"></div>
            <div class="absolute top-1/2 left-0 w-full h-px bg-gray-300/50 animate-[lineAppear_2.8s_ease-out]"></div>
            <div class="absolute top-3/4 left-0 w-full h-px bg-gray-300/50 animate-[lineAppear_3s_ease-out]"></div>
        </div>

        <!-- Floating Circles -->
        <div class="absolute top-1/3 left-1/4 w-8 h-8 rounded-full bg-gray-300/30 animate-[float_8s_ease-in-out_infinite]"></div>
        <div class="absolute top-2/3 right-1/4 w-12 h-12 rounded-full bg-gray-400/20 animate-[float_10s_ease-in-out_infinite_2s]"></div>

        <!-- Focus Circle -->
        <div class="absolute top-1/2 left-1/2 w-64 h-64 -translate-x-1/2 -translate-y-1/2 rounded-full border border-gray-300/40 animate-[pulse_8s_cubic-bezier(0.4,0,0.6,1)_infinite]"></div>

        <!-- Diagonal Accents -->
        <div class="absolute top-0 right-0 w-1/3 h-full overflow-hidden">
            <div class="absolute -left-20 top-1/4 w-64 h-px bg-gray-300 rotate-45 transform origin-left"></div>
            <div class="absolute -left-10 top-1/2 w-64 h-px bg-gray-300 rotate-45 transform origin-left"></div>
            <div class="absolute left-0 top-3/4 w-64 h-px bg-gray-300 rotate-45 transform origin-left"></div>
        </div>

        <!-- Corner Elements -->
        <div class="absolute top-8 left-8 w-16 h-16 border-t-2 border-l-2 border-gray-400"></div>
        <div class="absolute bottom-8 right-8 w-16 h-16 border-b-2 border-r-2 border-gray-400"></div>
    </div>

    <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
        <div class="relative max-w-2xl mx-auto text-center">
            <h1 class="text-sm font-light text-gray-800 sm:text-sm md:text-6xl tracking-tight">
                <span class="block animate-[fadeIn_1s_ease-out]">Portal Informasi</span>
                <span class="block text-gray-600 mt-4 font-normal">
                    <span class="typed-text"></span>
                    <span class="cursor animate-blink">|</span>
                </span>
            </h1>

            <p class="mt-8 text-gray-500 leading-relaxed animate-[fadeIn_1.4s_ease-out]">
                Jelajahi wawasan terkini dengan penyajian elegan dan pengalaman yang immersive.
            </p>

            <div class="mt-10 animate-[fadeIn_1.6s_ease-out]">
                <a href="#" class="inline-flex items-center px-8 py-3 text-sm font-medium rounded-full text-white bg-gray-800 hover:bg-gray-700 transition-all duration-300 group">
                    Mulai Eksplorasi
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2 transition-transform duration-300 group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>

<style>
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(10px); }
        to { opacity: 1; transform: translateY(0); }
    }

    @keyframes lineAppear {
        from { transform: scaleY(0); opacity: 0; }
        to { transform: scaleY(1); opacity: 1; }
    }

    @keyframes pulse {
        0%, 100% { transform: translate(-50%, -50%) scale(1); opacity: 0.2; }
        50% { transform: translate(-50%, -50%) scale(1.05); opacity: 0.4; }
    }

    @keyframes float {
        0%, 100% { transform: translateY(0) translateX(0); }
        50% { transform: translateY(-20px) translateX(10px); }
    }

    @keyframes blink {
        0%, 100% { opacity: 1; }
        50% { opacity: 0; }
    }

    .pattern-grid {
        background-image:
            linear-gradient(to right, rgba(156, 163, 175, 0.05) 1px, transparent 1px),
            linear-gradient(to bottom, rgba(156, 163, 175, 0.05) 1px, transparent 1px);
        background-size: 40px 40px;
    }

    .grid-lines {
        background-image:
            linear-gradient(to right, rgba(156, 163, 175, 0.1) 1px, transparent 1px),
            linear-gradient(to bottom, rgba(156, 163, 175, 0.1) 1px, transparent 1px);
        background-size: 100px 100px;
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const typedTextSpan = document.querySelector(".typed-text");
    const cursorSpan = document.querySelector(".cursor");

    const textArray = ["Modern & Terkini", "Inovatif", "Interaktif", "Bermanfaat"];
    const typingDelay = 100;
    const erasingDelay = 50;
    const newTextDelay = 2000;
    let textArrayIndex = 0;
    let charIndex = 0;

    function type() {
        if (charIndex < textArray[textArrayIndex].length) {
            typedTextSpan.textContent += textArray[textArrayIndex].charAt(charIndex);
            charIndex++;
            setTimeout(type, typingDelay);
        } else {
            setTimeout(erase, newTextDelay);
        }
    }

    function erase() {
        if (charIndex > 0) {
            typedTextSpan.textContent = textArray[textArrayIndex].substring(0, charIndex-1);
            charIndex--;
            setTimeout(erase, erasingDelay);
        } else {
            textArrayIndex++;
            if(textArrayIndex >= textArray.length) textArrayIndex=0;
            setTimeout(type, typingDelay + 500);
        }
    }

    if(textArray.length) setTimeout(type, newTextDelay + 250);
});
</script>

