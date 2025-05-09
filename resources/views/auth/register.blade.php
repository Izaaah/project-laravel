@extends('layout.app')

@section('title', 'Register')
@section('content')
<div class="bg-gradient-to-r from-blue-50 to-indigo-50">
    <div class="min-h-screen flex items-center justify-center p-4">
        <div class="w-full max-w-md">
            <!-- Logo/Header -->
            <div class="text-center mb-8">
                <div class="mx-auto h-16 w-16 bg-sky-700 rounded-full flex items-center justify-center mb-4">
                    <i class="fas fa-user-plus text-white text-2xl"></i>
                </div>
                <h1 class="text-3xl font-bold text-gray-800">Create Account</h1>
                <p class="text-gray-600 mt-2">Join us today</p>
            </div>

            <!-- Register Card -->
            <div class="bg-white rounded-xl shadow-lg p-5">
                <!-- Name Input -->
                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-medium mb-2" for="name">
                        Full Name
                    </label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fas fa-user text-gray-400"></i>
                        </div>
                        <input
                            id="name"
                            type="text"
                            class="w-full pl-10 pr-3 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition"
                            placeholder="John Doe">
                    </div>
                </div>

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
                    <label class="block text-gray-700 text-sm font-medium mb-2" for="password">
                        Password
                    </label>
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
                    <p class="mt-1 text-xs text-gray-500">Minimum 8 characters</p>
                </div>

                <!-- Confirm Password Input -->
                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-medium mb-2" for="password_confirmation">
                        Confirm Password
                    </label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fas fa-lock text-gray-400"></i>
                        </div>
                        <input
                            id="password_confirmation"
                            type="password"
                            class="w-full pl-10 pr-3 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition"
                            placeholder="••••••••">
                    </div>
                </div>

                <!-- Terms Agreement -->
                <div class="flex items-center mb-6">
                    <input
                        id="terms"
                        type="checkbox"
                        class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                    <label for="terms" class="ml-2 block text-sm text-gray-700">
                        I agree to the <a href="#" class="text-indigo-600 hover:text-indigo-500">Terms</a> and <a href="#" class="text-indigo-600 hover:text-indigo-500">Privacy Policy</a>
                    </label>
                </div>

                <!-- Register Button -->
                <button
                    type="button"
                    class="w-full bg-sky-700 hover:bg-indigo-800 text-white font-medium py-3 px-4 rounded-lg shadow-md transition duration-200 flex items-center justify-center">
                    <i class="fas fa-user-plus mr-2"></i>
                    Create Account
                </button>

                <!-- Login Link -->
                <div class="mt-6 text-center">
                    <p class="text-gray-600">
                        Already have an account?
                        <a href="{{ route('login') }}" class="text-indigo-600 hover:text-indigo-500 font-medium">Sign in</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
