@extends('layout.app')

@section('title', 'Login')

<head>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

@section('content')
<div class="bg-gradient-to-r from-blue-50 to-indigo-50">
    <div class="min-h-screen flex items-center justify-center p-4">
        <div class="w-full max-w-md">
            <!-- Logo/Header -->
            <div class="text-center mb-8">
                <div class="mx-auto h-16 w-16 bg-indigo-600 rounded-full flex items-center justify-center mb-4">
                    <i class="fas fa-lock text-white text-2xl"></i>
                </div>
                <h1 class="text-3xl font-bold text-gray-800">Welcome Back</h1>
                <p class="text-gray-600 mt-2">Sign in to your account</p>
            </div>

            <!-- Login Card -->
            <div class="bg-white rounded-xl shadow-lg p-8">
                <!-- Email Input -->
                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-medium mb-2" for="email">
                        Email Address
                    </label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fas fa-envelope text-gray-400"></i>
                        </div>
                        <input
                            id="email"
                            type="email"
                            class="w-full pl-10 pr-3 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition"
                            placeholder="you@example.com">
                    </div>
                </div>

                <!-- Password Input -->
                <div class="mb-6">
                    <div class="flex justify-between items-center mb-2">
                        <label class="block text-gray-700 text-sm font-medium" for="password">
                            Password
                        </label>
                        <a href="#" class="text-sm text-indigo-600 hover:text-indigo-500">Forgot?</a>
                    </div>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fas fa-lock text-gray-400"></i>
                        </div>
                        <input
                            id="password"
                            type="password"
                            class="w-full pl-10 pr-3 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition"
                            placeholder="••••••••">
                    </div>
                </div>

                <!-- Remember Me -->
                <div class="flex items-center mb-6">
                    <input
                        id="remember"
                        type="checkbox"
                        class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                    <label for="remember" class="ml-2 block text-sm text-gray-700">
                        Remember me
                    </label>
                </div>

                <!-- Login Button -->
                <button
                    type="button"
                    class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-medium py-3 px-4 rounded-lg shadow-md transition duration-200 flex items-center justify-center">
                    <i class="fas fa-sign-in-alt mr-2"></i>
                    Sign In
                </button>

                <!-- Divider -->
                <div class="relative my-6">
                    <div class="absolute inset-0 flex items-center">
                        <div class="w-full border-t border-gray-300"></div>
                    </div>
                    <div class="relative flex justify-center text-sm">
                        <span class="px-2 bg-white text-gray-500">Or continue with</span>
                    </div>
                </div>

                <!-- Social Login -->
                <div class="grid grid-cols-2 gap-4">
                    <button
                        type="button"
                        class="flex items-center justify-center py-2 px-4 border border-gray-300 rounded-lg hover:bg-gray-50 transition">
                        <i class="fab fa-google text-red-500 mr-2"></i>
                        Google
                    </button>
                    <button
                        type="button"
                        class="flex items-center justify-center py-2 px-4 border border-gray-300 rounded-lg hover:bg-gray-50 transition">
                        <i class="fab fa-facebook-f text-blue-600 mr-2"></i>
                        Facebook
                    </button>
                </div>
            </div>

            <!-- Sign Up Link -->
            <div class="mt-6 text-center">
                <p class="text-gray-600">
                    Don't have an account?
                    <a href="#" class="text-indigo-600 hover:text-indigo-500 font-medium">Sign up</a>
                </p>
            </div>
        </div>
    </div>

    <!-- Demo Alert -->
    <div class="fixed bottom-4 right-4">
        <div class="bg-indigo-100 border-l-4 border-indigo-500 text-indigo-700 p-4 rounded-lg shadow-lg" role="alert">
            <div class="flex items-center">
                <div class="py-1"><i class="fas fa-info-circle fa-lg mr-4"></i></div>
                <div>
                    <p class="font-bold">Demo Only</p>
                    <p class="text-sm">This is a frontend-only demo with no backend functionality.</p>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- <div class="left-side">
    <h1>TulisAja</h1>
    <img src="{{ asset('storage/img/cover_regis.png') }}" alt="Buku dan Laptop">
</div>




<div class="right-side">
    <div class="container">
        <h2>Form Login</h2>
        <form action="/proses_login" method="POST">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" placeholder="Masukkan username" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Masukkan password" required>

            <input type="submit" value="Daftar">
            <p class="signup-link">Belum punya akun? <a href="{{  route('registrasi') }}">Daftar Sekarang</a></p>
        </form>
    </div>
</div> --}}
@endsection
