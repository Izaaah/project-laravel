@extends('layout.app')

<style>
    .swiper-slide {
        width: auto !important;
        height: auto;
    }

    @media (min-width: 640px) {
        .swiper-slide {
            width: calc(50% - 15px) !important;
        }
    }

    @media (min-width: 1024px) {
        .swiper-slide {
            width: calc(33.33% - 20px) !important;
        }
    }
</style>

<!-- Features Section - Elegant Version -->
<section id="features" class="py-24 bg-gray-50">
    <div class="max-w-7xl mx-auto px-6 lg:px-8 -mt-8 -mb-5">
        <div class="text-center mb-16">
            <span class="inline-block px-4 py-2 text-sm font-medium text-slate-600 bg-slate-100 rounded-full mb-4">Fitur Unggulan</span>
            <h2 class="text-4xl font-light text-gray-900 sm:text-5xl">Solusi Komprehensif untuk Penulis</h2>
            <div class="mt-6 max-w-2xl mx-auto">
                <div class="w-24 h-1 bg-gradient-to-r from-slate-300 to-transparent mx-auto"></div>
            </div>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <!-- Fitur 1 -->
            <div class="group relative bg-white p-8 rounded-2xl transition-all duration-300 hover:-translate-y-2 hover:shadow-xl border border-slate-100">
                <div class="absolute inset-0 rounded-2xl bg-gradient-to-br from-blue-50 to-white opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                <div class="relative z-10">
                    <div class="w-14 h-14 bg-white shadow-sm rounded-xl flex items-center justify-center mb-6 border border-slate-100 group-hover:border-blue-100 transition-colors">
                        <i class="fas fa-pen-fancy text-blue-500 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-medium text-gray-900 mb-3">Editor Intelejen</h3>
                    <p class="text-gray-600 leading-relaxed">Asisten menulis berbasis AI yang membantu menyempurnakan gaya bahasa dan struktur tulisan Anda secara real-time.</p>
                    <div class="mt-6">
                        <span class="inline-flex items-center text-sm font-medium text-blue-500 group-hover:text-blue-600 transition-colors">
                            Pelajari lebih lanjut
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </span>
                    </div>
                </div>
            </div>

            <!-- Fitur 2 -->
            <div class="group relative bg-white p-8 rounded-2xl transition-all duration-300 hover:-translate-y-2 hover:shadow-xl border border-slate-100">
                <div class="absolute inset-0 rounded-2xl bg-gradient-to-br from-purple-50 to-white opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                <div class="relative z-10">
                    <div class="w-14 h-14 bg-white shadow-sm rounded-xl flex items-center justify-center mb-6 border border-slate-100 group-hover:border-purple-100 transition-colors">
                        <i class="fas fa-layer-group text-purple-500 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-medium text-gray-900 mb-3">Manajemen Konten</h3>
                    <p class="text-gray-600 leading-relaxed">Sistem kategorisasi hierarkis dengan tagging canggih untuk mengorganisir konten secara efisien.</p>
                    <div class="mt-6">
                        <span class="inline-flex items-center text-sm font-medium text-purple-500 group-hover:text-purple-600 transition-colors">
                            Pelajari lebih lanjut
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </span>
                    </div>
                </div>
            </div>

            <!-- Fitur 3 -->
            <div class="group relative bg-white p-8 rounded-2xl transition-all duration-300 hover:-translate-y-2 hover:shadow-xl border border-slate-100">
                <div class="absolute inset-0 rounded-2xl bg-gradient-to-br from-emerald-50 to-white opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                <div class="relative z-10">
                    <div class="w-14 h-14 bg-white shadow-sm rounded-xl flex items-center justify-center mb-6 border border-slate-100 group-hover:border-emerald-100 transition-colors">
                        <i class="fas fa-bar-chart text-emerald-500 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-medium text-gray-900 mb-3">Analitik Mendalam</h3>
                    <p class="text-gray-600 leading-relaxed">Dashboard analitik dengan metrik pembaca, waktu baca, dan interaksi untuk optimasi konten.</p>
                    <div class="mt-6">
                        <span class="inline-flex items-center text-sm font-medium text-emerald-500 group-hover:text-emerald-600 transition-colors">
                            Pelajari lebih lanjut
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </span>
                    </div>
                </div>
            </div>

            <!-- Fitur 4 -->
            <div class="group relative bg-white p-8 rounded-2xl transition-all duration-300 hover:-translate-y-2 hover:shadow-xl border border-slate-100">
                <div class="absolute inset-0 rounded-2xl bg-gradient-to-br from-amber-50 to-white opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                <div class="relative z-10">
                    <div class="w-14 h-14 bg-white shadow-sm rounded-xl flex items-center justify-center mb-6 border border-slate-100 group-hover:border-amber-100 transition-colors">
                        <i class="fas fa-users-cog text-amber-500 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-medium text-gray-900 mb-3">Kolaborasi Tim</h3>
                    <p class="text-gray-600 leading-relaxed">Workflow kolaborasi dengan sistem approval bertingkat dan komentar kontekstual.</p>
                    <div class="mt-6">
                        <span class="inline-flex items-center text-sm font-medium text-amber-500 group-hover:text-amber-600 transition-colors">
                            Pelajari lebih lanjut
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </span>
                    </div>
                </div>
            </div>

            <!-- Fitur 5 -->
            <div class="group relative bg-white p-8 rounded-2xl transition-all duration-300 hover:-translate-y-2 hover:shadow-xl border border-slate-100">
                <div class="absolute inset-0 rounded-2xl bg-gradient-to-br from-rose-50 to-white opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                <div class="relative z-10">
                    <div class="w-14 h-14 bg-white shadow-sm rounded-xl flex items-center justify-center mb-6 border border-slate-100 group-hover:border-rose-100 transition-colors">
                        <i class="fas fa-rocket text-rose-500 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-medium text-gray-900 mb-3">Publikasi Otomatis</h3>
                    <p class="text-gray-600 leading-relaxed">Distribusi konten multi-platform dengan penjadwalan dan format adaptif.</p>
                    <div class="mt-6">
                        <span class="inline-flex items-center text-sm font-medium text-rose-500 group-hover:text-rose-600 transition-colors">
                            Pelajari lebih lanjut
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </span>
                    </div>
                </div>
            </div>

            <!-- Fitur 6 -->
            <div class="group relative bg-white p-8 rounded-2xl transition-all duration-300 hover:-translate-y-2 hover:shadow-xl border border-slate-100">
                <div class="absolute inset-0 rounded-2xl bg-gradient-to-br from-indigo-50 to-white opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                <div class="relative z-10">
                    <div class="w-14 h-14 bg-white shadow-sm rounded-xl flex items-center justify-center mb-6 border border-slate-100 group-hover:border-indigo-100 transition-colors">
                        <i class="fas fa-key text-indigo-500 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-medium text-gray-900 mb-3">Keamanan Data</h3>
                    <p class="text-gray-600 leading-relaxed">Enkripsi end-to-end dan backup otomatis untuk melindungi karya Anda.</p>
                    <div class="mt-6">
                        <span class="inline-flex items-center text-sm font-medium text-indigo-500 group-hover:text-indigo-600 transition-colors">
                            Pelajari lebih lanjut
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section - Elegant Version -->
<section id="demo" class="py-24 bg-gradient-to-r from-slate-900 to-slate-800 text-white">
    <div class="max-w-7xl mx-auto px-6 lg:px-8 text-center -mt-10 -mb-20">
        <div class="max-w-3xl mx-auto">
            <span class="inline-block px-4 py-2 text-sm font-medium text-slate-300 bg-slate-800 rounded-full mb-6">Mulai Sekarang</span>
            <h2 class="text-4xl font-light sm:text-5xl mb-8 leading-tight text-gray-700">Tingkatkan Kualitas <span class="font-medium">dan Produktivitas</span> Menulis Anda</h2>
            <div class="w-24 h-1 bg-gradient-to-r from-blue-400 to-transparent mx-auto mb-8"></div>
            <p class="text-lg text-slate-500 mb-10 max-w-2xl mx-auto leading-relaxed">Bergabunglah dengan komunitas penulis profesional yang sudah mempercayakan karya mereka pada platform kami.</p>
        </div>
    </div>
</section>

<!-- Artikel Section with Slider - Elegant Version -->
<section class="py-24 bg-gray-200">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="text-center mb-5 -mt-10">
            <span class="inline-block px-4 py-2 text-sm font-medium text-slate-600 bg-slate-100 rounded-full mb-4">Konten Terbaru</span>
            <h2 class="text-4xl font-light text-bold text-gray-900 sm:text-5xl">Artikel & Panduan</h2>
            <div class="mt-6 max-w-2xl mx-auto">
                <div class="w-24 h-1 bg-gradient-to-r from-slate-300 to-transparent mx-auto"></div>
            </div>
        </div>

        <!-- Slider Container -->
        <div class="relative">
            <!-- Slider Navigation -->
            <div class="flex justify-between items-center mb-8">
                <div>
                    <h3 class="text-xl font-medium text-gray-900 inline-flex items-center">
                        <span>Kategori Terpilih:</span>
                        <span class="ml-2 px-3 py-1 bg-blue-100 text-blue-600 rounded-full text-sm font-medium">Semua</span>
                    </h3>
                </div>
                <div class="flex space-x-3">
                    <button class="slider-prev w-12 h-12 rounded-full bg-white shadow-sm flex items-center justify-center text-gray-700 hover:bg-gray-50 transition border border-slate-200 hover:border-slate-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                        </svg>
                    </button>
                    <button class="slider-next w-12 h-12 rounded-full bg-white shadow-sm flex items-center justify-center text-gray-700 hover:bg-gray-50 transition border border-slate-200 hover:border-slate-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Slider -->
            <div class="swiper-container article-slider">
                <div class="swiper-wrapper pb-14">
                    <!-- Artikel 1 -->
                    <div class="swiper-slide">
                        <article class="group relative bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-all h-full flex flex-col border border-slate-100 hover:border-slate-200">
                            <div class="relative pt-[56.25%] overflow-hidden">
                                <img src="https://th.bing.com/th/id/OIP.kgM70ENBNiQ9bfHaHMYkUgHaEr?rs=1&pid=ImgDetMain" alt="Artikel 1" class="absolute inset-0 w-full h-full object-cover transition duration-500 group-hover:scale-105">
                                <span class="absolute top-4 left-4 bg-blue-500 text-white text-xs font-medium px-3 py-1 rounded-full">Tutorial</span>
                            </div>
                            <div class="p-6 flex-grow">
                                <div class="flex items-center text-sm text-slate-500 mb-4">
                                    <span class="flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                        </svg>
                                        15 Mei 2023
                                    </span>
                                    <span class="mx-2">•</span>
                                    <span class="flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        5 min read
                                    </span>
                                </div>
                                <h3 class="text-xl font-medium text-slate-900 mb-3 group-hover:text-blue-600 transition-colors">Strategi Menulis Konten SEO yang Efektif</h3>
                                <p class="text-slate-600 mb-4 leading-relaxed">Teknik terbaru untuk mengoptimalkan konten Anda di mesin pencari dengan pendekatan yang manusiawi.</p>
                                <div class="mt-auto">
                                    <a href="#" class="inline-flex items-center text-sm font-medium text-blue-500 hover:text-blue-600 transition-colors group">
                                        Baca Artikel
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2 transition-transform duration-300 group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </article>
                    </div>

                    <!-- Artikel 2 -->
                    <div class="swiper-slide">
                        <article class="group relative bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-all h-full flex flex-col border border-slate-100 hover:border-slate-200">
                            <div class="relative pt-[56.25%] overflow-hidden">
                                <img src="https://www.yellowdotgroup.com/wp-content/uploads/2015/10/greatContentCreator.jpg" alt="Artikel 2" class="absolute inset-0 w-full h-full object-cover transition duration-500 group-hover:scale-105">
                                <span class="absolute top-4 left-4 bg-purple-500 text-white text-xs font-medium px-3 py-1 rounded-full">Tips</span>
                            </div>
                            <div class="p-6 flex-grow">
                                <div class="flex items-center text-sm text-slate-500 mb-4">
                                    <span class="flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                        </svg>
                                        10 Mei 2023
                                    </span>
                                    <span class="mx-2">•</span>
                                    <span class="flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        3 min read
                                    </span>
                                </div>
                                <h3 class="text-xl font-medium text-slate-900 mb-3 group-hover:text-blue-600 transition-colors">10 Tools Esensial untuk Content Creator</h3>
                                <p class="text-slate-600 mb-4 leading-relaxed">Kumpulan alat produktivitas terbaik yang akan membantu proses kreatif Anda. <br></p>
                                <div class="mt-auto">
                                    <a href="#" class="inline-flex items-center text-sm font-medium text-blue-500 hover:text-blue-600 transition-colors group">
                                        Baca Artikel
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2 transition-transform duration-300 group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </article>
                    </div>

                    <!-- Artikel 3 -->
                    <div class="swiper-slide">
                        <article class="group relative bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-all h-full flex flex-col border border-slate-100 hover:border-slate-200">
                            <div class="relative pt-[56.25%] overflow-hidden">
                                <img src="https://assets.digination.id/crop/0x0:0x0/750x500/photo/2022/12/08/520340512.jpg" alt="Artikel 3" class="absolute inset-0 w-full h-full object-cover transition duration-500 group-hover:scale-105">
                                <span class="absolute top-4 left-4 bg-emerald-500 text-white text-xs font-medium px-3 py-1 rounded-full">Trend</span>
                            </div>
                            <div class="p-6 flex-grow">
                                <div class="flex items-center text-sm text-slate-500 mb-4">
                                    <span class="flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                        </svg>
                                        5 Mei 2023
                                    </span>
                                    <span class="mx-2">•</span>
                                    <span class="flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        7 min read
                                    </span>
                                </div>
                                <h3 class="text-xl font-medium text-slate-900 mb-3 group-hover:text-blue-600 transition-colors">Tren Konten 2023: Apa yang Berhasil?</h3>
                                <p class="text-slate-600 mb-4 leading-relaxed">Analisis mendalam tentang format konten yang paling efektif di tahun ini.</p>
                                <div class="mt-auto">
                                    <a href="#" class="inline-flex items-center text-sm font-medium text-blue-500 hover:text-blue-600 transition-colors group">
                                        Baca Artikel
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2 transition-transform duration-300 group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </article>
                    </div>

                    <!-- Artikel 4 -->
                    <div class="swiper-slide">
                        <article class="group relative bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-all h-full flex flex-col border border-slate-100 hover:border-slate-200">
                            <div class="relative pt-[56.25%] overflow-hidden">
                                <img src="https://th.bing.com/th/id/R.94d1ffcc9e6f7eb6eb9ab3c2d3591ca0?rik=xYCJlTVsBtJcNA&riu=http%3a%2f%2fwww.ogdenmarsh.com%2fwp-content%2fuploads%2f2021%2f09%2fTraffic-Website-Adalah.png&ehk=%2bXuABkIhxHmBP4zLzTpbJo5tuireEvubiDFkwxK20rA%3d&risl=&pid=ImgRaw&r=0" alt="Artikel 4" class="absolute inset-0 w-full h-full object-cover transition duration-500 group-hover:scale-105">
                                <span class="absolute top-4 left-4 bg-amber-500 text-white text-xs font-medium px-3 py-1 rounded-full">Studi Kasus</span>
                            </div>
                            <div class="p-6 flex-grow">
                                <div class="flex items-center text-sm text-slate-500 mb-4">
                                    <span class="flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                        </svg>
                                        28 Apr 2023
                                    </span>
                                    <span class="mx-2">•</span>
                                    <span class="flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        10 min read
                                    </span>
                                </div>
                                <h3 class="text-xl font-medium text-slate-900 mb-3 group-hover:text-blue-600 transition-colors">Meningkatkan Traffic 300% dengan Konten</h3>
                                <p class="text-slate-600 mb-4 leading-relaxed">Bagaimana startup ini mengubah strategi konten mereka untuk hasil luar biasa.</p>
                                <div class="mt-auto">
                                    <a href="#" class="inline-flex items-center text-sm font-medium text-blue-500 hover:text-blue-600 transition-colors group">
                                        Baca Artikel
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2 transition-transform duration-300 group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>

                <!-- Slider Pagination -->
                <div class="swiper-pagination !relative !bottom-0 mt-10"></div>
            </div>
        </div>
    </div>
</section>
{{--
<!-- Dashboard Preview - Elegant Version -->
<section class="py-24 bg-slate-50">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="text-center mb-20">
            <span class="inline-block px-4 py-2 text-sm font-medium text-slate-600 bg-slate-100 rounded-full mb-4">Workspace</span>
            <h2 class="text-4xl font-light text-gray-900 sm:text-5xl">Antarmuka yang Dirancang untuk <span class="font-medium">Kreativitas</span></h2>
            <div class="mt-6 max-w-2xl mx-auto">
                <div class="w-24 h-1 bg-gradient-to-r from-slate-300 to-transparent mx-auto"></div>
            </div>
        </div>

        <div class="bg-white rounded-2xl shadow-xl overflow-hidden border border-slate-200">
            <!-- Mockup Browser Bar -->
            <div class="bg-slate-900 px-6 py-4 flex items-center">
                <div class="flex space-x-2">
                    <div class="w-3 h-3 rounded-full bg-red-500"></div>
                    <div class="w-3 h-3 rounded-full bg-yellow-500"></div>
                    <div class="w-3 h-3 rounded-full bg-green-500"></div>
                </div>
                <div class="ml-4 text-sm text-slate-400 font-mono">https://app.tulisaja.com/editor</div>
            </div>

            <!-- Dashboard Content -->
            <div class="p-1 bg-gradient-to-br from-slate-50 to-white">
                <img src="https://via.placeholder.com/1200x700/f8fafc/cccccc?text=Editor+Penulisan+TulisAja" alt="Editor TulisAja" class="w-full h-auto rounded-b-lg shadow-inner">
            </div>
        </div>
    </div>
</section>

<!-- Testimoni Penulis - Elegant Version -->
<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="text-center mb-20">
            <span class="inline-block px-4 py-2 text-sm font-medium text-slate-600 bg-slate-100 rounded-full mb-4">Testimonial</span>
            <h2 class="text-4xl font-light text-gray-900 sm:text-5xl">Dipercaya oleh <span class="font-medium">Penulis Profesional</span></h2>
            <div class="mt-6 max-w-2xl mx-auto">
                <div class="w-24 h-1 bg-gradient-to-r from-slate-300 to-transparent mx-auto"></div>
            </div>
        </div>

        <div class="grid md:grid-cols-2 gap-8 max-w-4xl mx-auto">
            <!-- Testimonial 1 -->
            <div class="group relative bg-white p-8 rounded-2xl shadow-sm hover:shadow-md transition-all border border-slate-100 hover:border-slate-200">
                <div class="absolute -inset-1 rounded-2xl bg-gradient-to-r from-blue-100 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 -z-10"></div>
                <div class="flex items-start mb-6">
                    <img src="https://randomuser.me/api/portraits/women/43.jpg" class="w-14 h-14 rounded-full mr-4 border-2 border-white shadow-sm" alt="User">
                    <div>
                        <h4 class="font-medium text-gray-900">Sarah Mitchell</h4>
                        <p class="text-sm text-slate-500">Penulis Konten @MajalahLiterasi</p>
                        <div class="mt-2 text-amber-400">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 --}}
