@extends('layout.app')

@section('title', 'Login')
@section('content')
<div class="bg-gradient-to-br from-gray-50 to-gray-100 min-h-screen flex items-center justify-center p-4">
    <!-- Background Elements (similar to your hero section) -->
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(circle, #999 1px, transparent 1px); background-size: 40px 40px;"></div>
        <div class="absolute top-0 left-1/4 w-px h-full bg-gray-300/40"></div>
        <div class="absolute top-0 left-1/2 w-px h-full bg-gray-300/40"></div>
        <div class="absolute top-1/3 right-1/4 w-4 h-4 rounded-full bg-gray-400/20"></div>
    </div>

    <div class="relative w-full max-w-md">
        <!-- Logo/Header -->
        <div class="text-center mb-8 animate-[fadeIn_0.8s_ease-out]">
            <div class="mx-auto h-15 w-15 bg-gray-800 rounded-full flex items-center justify-center mb-0 shadow-md">
                <i class="fas fa-lock text-white text-2xl"></i>
            </div>
            <!-- Logo -->
                {{-- <div class="mx-auto items-center justify-center">
                    <img src="{{ asset('storage/img/TandaBaca_logo.png') }}" alt="Logo TandaBaca" class="w-55 h-45">
                </div> --}}
            <h1 class="text-3xl font-light text-gray-800 mb-2">Welcome Back</h1>
            <p class="text-gray-500">Sign in to your account</p>
            <div class="w-16 h-0.5 bg-gray-300 mx-auto mt-4 -mb-4"></div>
        </div>

        <!-- Login Card -->
        <div class="bg-white rounded-xl shadow-sm p-8 border border-gray-200/60 animate-[fadeIn_1s_ease-out]">
            <!-- Email Input -->
            <div class="mb-6">
                <label class="block text-sm font-medium text-gray-700 mb-2 tracking-wide">Email Address</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <i class="fas fa-envelope text-gray-400 text-sm"></i>
                    </div>
                    <input
                        id="email"
                        type="email"
                        class="w-full pl-10 pr-4 py-3 text-sm border border-gray-300/80 rounded-lg focus:ring-2 focus:ring-gray-800 focus:border-gray-800 transition duration-200"
                        placeholder="you@example.com">
                </div>
            </div>

            <!-- Password Input -->
            <div class="mb-6">
                <div class="flex justify-between items-center mb-2">
                    <label class="block text-sm font-medium text-gray-700 tracking-wide">Password</label>
                    <a href="#" class="text-xs text-gray-500 hover:text-gray-700 transition">Forgot password?</a>
                </div>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <i class="fas fa-lock text-gray-400 text-sm"></i>
                    </div>
                    <input
                        id="password"
                        type="password"
                        class="w-full pl-10 pr-4 py-3 text-sm border border-gray-300/80 rounded-lg focus:ring-2 focus:ring-gray-800 focus:border-gray-800 transition duration-200"
                        placeholder="••••••••">
                </div>
            </div>

            <!-- Remember Me -->
            <div class="flex items-center mb-8">
                <input
                    id="remember"
                    type="checkbox"
                    class="h-4 w-4 text-gray-800 focus:ring-gray-800 border-gray-300/80 rounded transition">
                <label for="remember" class="ml-2 block text-sm text-gray-600">
                    Remember me
                </label>
            </div>

            <!-- Login Button -->
            <button
                type="button"
                class="w-full bg-gray-800 hover:bg-gray-700 text-white text-sm font-medium py-3 px-4 rounded-lg shadow-sm transition duration-200 flex items-center justify-center group">
                <span>Sign In</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2 transition-transform duration-300 group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7" />
                </svg>
            </button>
        </div>

        <!-- Sign Up Link -->
        <div class="mt-8 text-center animate-[fadeIn_1.2s_ease-out]">
            <p class="text-sm text-gray-500">
                Don't have an account?
                <a href="{{ route('registrasi') }}" class="text-gray-700 hover:text-gray-900 font-medium transition">Sign up</a>
            </p>
        </div>
    </div>
</div>

<style>
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(10px); }
        to { opacity: 1; transform: translateY(0); }
    }
</style>
@endsection
