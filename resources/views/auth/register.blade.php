@extends('layout.app')

@section('title', 'Register')
@section('content')
<div class="bg-gradient-to-br from-gray-50 to-gray-100 min-h-screen flex items-center justify-center p-4">
    <!-- Background Elements -->
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(circle, #999 1px, transparent 1px); background-size: 40px 40px;"></div>
        <div class="absolute top-0 left-1/3 w-px h-full bg-gray-300/40"></div>
        <div class="absolute top-0 left-2/3 w-px h-full bg-gray-300/40"></div>
        <div class="absolute top-1/4 right-1/4 w-4 h-4 rounded-full bg-gray-400/20 animate-[float_8s_ease-in-out_infinite]"></div>
    </div>

    <div class="relative w-full max-w-md">
        <!-- Logo/Header -->
        <div class="text-center mb-8 animate-[fadeIn_0.8s_ease-out]">
            <div class="mx-auto h-20 w-20 bg-gray-800 rounded-full flex items-center justify-center mb-5 shadow-md">
                <i class="fas fa-user-plus text-white text-2xl"></i>
            </div>
            <h1 class="text-3xl font-light text-gray-800 mb-2">Create Account</h1>
            <p class="text-gray-500">Join our community</p>
            <div class="w-16 h-0.5 bg-gray-300 mx-auto mt-4"></div>
        </div>

        <!-- Register Card -->
        <div class="bg-white rounded-xl shadow-sm p-8 border border-gray-200/60 animate-[fadeIn_1s_ease-out]">
            <!-- Name Input -->
            <div class="mb-6">
                <label class="block text-sm font-medium text-gray-700 mb-2 tracking-wide">Full Name</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <i class="fas fa-user text-gray-400 text-sm"></i>
                    </div>
                    <input
                        id="name"
                        type="text"
                        class="w-full pl-10 pr-4 py-3 text-sm border border-gray-300/80 rounded-lg focus:ring-2 focus:ring-gray-800 focus:border-gray-800 transition duration-200"
                        placeholder="John Doe">
                </div>
            </div>

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
                <label class="block text-sm font-medium text-gray-700 mb-2 tracking-wide">Password</label>
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
                <p class="mt-1 text-xs text-gray-500">Minimum 8 characters</p>
            </div>

            <!-- Confirm Password Input -->
            <div class="mb-6">
                <label class="block text-sm font-medium text-gray-700 mb-2 tracking-wide">Confirm Password</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <i class="fas fa-lock text-gray-400 text-sm"></i>
                    </div>
                    <input
                        id="password_confirmation"
                        type="password"
                        class="w-full pl-10 pr-4 py-3 text-sm border border-gray-300/80 rounded-lg focus:ring-2 focus:ring-gray-800 focus:border-gray-800 transition duration-200"
                        placeholder="••••••••">
                </div>
            </div>

            <!-- Terms Agreement -->
            <div class="flex items-start mb-8">
                <div class="flex items-center h-5">
                    <input
                        id="terms"
                        type="checkbox"
                        class="h-4 w-4 text-gray-800 focus:ring-gray-800 border-gray-300/80 rounded transition">
                </div>
                <label for="terms" class="ml-2 block text-sm text-gray-600">
                    I agree to the <a href="#" class="text-gray-700 hover:text-gray-900 font-medium">Terms</a> and <a href="#" class="text-gray-700 hover:text-gray-900 font-medium">Privacy Policy</a>
                </label>
            </div>

            <!-- Register Button -->
            <button
                type="button"
                class="w-full bg-gray-800 hover:bg-gray-700 text-white text-sm font-medium py-3 px-4 rounded-lg shadow-sm transition duration-200 flex items-center justify-center group">
                <span>Create Account</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2 transition-transform duration-300 group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7" />
                </svg>
            </button>
        </div>

        <!-- Login Link -->
        <div class="mt-8 text-center animate-[fadeIn_1.2s_ease-out]">
            <p class="text-sm text-gray-500">
                Already have an account?
                <a href="{{ route('login') }}" class="text-gray-700 hover:text-gray-900 font-medium transition">Sign in</a>
            </p>
        </div>
    </div>
</div>

<style>
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(10px); }
        to { opacity: 1; transform: translateY(0); }
    }
    @keyframes float {
        0%, 100% { transform: translateY(0) translateX(0); }
        50% { transform: translateY(-10px) translateX(5px); }
    }
</style>
@endsection
