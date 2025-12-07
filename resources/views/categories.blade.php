<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories - Denio Imagine</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-[#FFF8EF]">

    <!-- Header/Navigation -->
    <header class="bg-[#FFF8EF] shadow-sm sticky top-0 z-50">
            <div class="container mx-auto px-4 py-4">
                <div class="flex justify-between items-center">
                    <!-- Logo -->
                    <a href="{{ url('/') }}" class="flex items-center space-x-3">
                        <img src="{{ asset('images/logo.png') }}" alt="Logo" class="w-32 h-auto" onerror="this.src='https://via.placeholder.com/128x40'">
                    </a>

                    <!-- Desktop Navigation -->
                    <nav class="hidden md:flex items-center space-x-8">
                        <a href="{{ url('/dashboard') }}" class="text-gray-600 hover:text-blue-600 font-medium">Home</a>
                        <a href="{{ url('/shop') }}" class="text-gray-600 hover:text-blue-600 font-medium">Shop</a>
                        <a href="{{ url('/about') }}" class="text-gray-600 hover:text-blue-600 font-medium">About</a>
                        <a href="{{ url('/contact') }}" class="text-gray-600 hover:text-blue-600 font-medium">Contact Us</a>
                    </nav>

                    <!-- Right Side Icons -->
                    <div class="flex items-center space-x-6">
                        <!-- Cart Icon -->
                        <a href="{{ url('/cart') }}" class="text-gray-600 hover:text-blue-600 relative">
                            <i class="fas fa-shopping-cart text-xl"></i>
                            <span class="absolute -top-2 -right-2 bg-red-500 text-white text-xs rounded-full h-5 w-5 flex items-center justify-center">3</span>
                        </a>

                        <!-- Account Dropdown -->
                        <div class="relative group">
                            <button class="text-gray-600 hover:text-blue-600 flex items-center space-x-2">
                                <i class="fas fa-user-circle text-xl"></i>
                                <span class="hidden md:inline">Account</span>
                                <i class="fas fa-chevron-down text-xs"></i>
                            </button>
                            <div class="absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-xl py-2 hidden group-hover:block">
                                <a href="{{ route('login') }}" class="block px-4 py-2 text-gray-700 hover:bg-blue-50">Daftar Masuk</a>
                                <a href="{{ route('register') }}" class="block px-4 py-2 text-gray-700 hover:bg-blue-50">Daftar</a>
                                <div class="border-t my-1"></div>
                                <a href="{{ url('/profile') }}" class="block px-4 py-2 text-gray-700 hover:bg-blue-50">Profile</a>
                                <a href="{{ url('/orders') }}" class="block px-4 py-2 text-gray-700 hover:bg-blue-50">Orders</a>
                            </div>
                        </div>

                        <!-- Mobile Menu Button -->
                        <button class="md:hidden text-gray-600">
                            <i class="fas fa-bars text-xl"></i>
                        </button>
                    </div>
                </div>

                <!-- Mobile Navigation -->
                <div class="md:hidden mt-4 hidden" id="mobileMenu">
                    <nav class="hidden md:flex items-center space-x-8">
                <a href="{{ url('/dashboard') }}" class="flex items-center space-x-3">
                <a href="{{ url('/dashboard') }}" class="text-gray-600 hover:text-blue-600 font-medium">Home</a>
                <a href="{{ url('/categories') }}" class="text-gray-600 hover:text-blue-600 font-medium">Shop</a>
                <a href="{{ url('/about') }}" class="text-[#EC4D97] font-medium border-b-2 border-[#EC4D97]">About</a>
                <a href="{{ url('/contact') }}" class="text-gray-600 hover:text-blue-600 font-medium">Contact Us</a>
                </nav>
                </div>
            </div>
        </header>

   <section class="text-[#4C6977] pt-20 pb-32 rounded-b-[100%]">
        <div class="container mx-auto px-4">
            <div class="flex items-center">
                
                <div class="bg-[#F5F19A] text-[#4C6977] rounded-full p-12 h-40 flex items-center justify-center w-1/2 -ml-14 mr-4">
                    <h1 class="text-4xl md:text-6xl font-bold text-[#4C6977] text-center">PRICELIST</h1>
                </div>

                <!-- Kolom Kanan - Deskripsi (setengah width) -->
                <div class="bg-[#F7C9D7] text-[#4C6977] rounded-full w-40 h-40 flex items-center justify-center">
                    <i class="fas fa-tags text-4xl"> </i>
                </div>
            </div>
        </div>
    </section>

    <!-- Kolom 1 -->
    <section class="py-16">
        <div class="bg-[#C6E5CE] text-[#4C6977] rounded-[50px] p-10 flex items-center justify-center w-5/6 mx-auto">
            <p class="text-xl md:text-2xl leading-relaxed">
                <br>
                ada kualitas visual, tapi juga kebahagiaan di setiap prosesnya.<br>
                <br>
            </p>
        </div>
    </section>

    <!-- Contact Us Section -->
<!-- Footer Section -->
<footer class="bg-gradient-to-r from-[#F7C9D7] to-[#F5F19A] text-gray-800 mt-16">
    <div class="container mx-auto px-4 py-12">
        <!-- Newsletter Section -->
        <div class="max-w-md mx-auto mb-12 text-center">
            <h3 class="text-2xl font-bold mb-4">Enter your email</h3>
            <div class="flex">
                <input type="email" placeholder="Your email address" class="flex-1 px-4 py-3 rounded-l-lg text-gray-800 focus:outline-none border border-gray-300">
                <button class="bg-gray-800 text-white hover:bg-gray-700 px-6 py-3 rounded-r-lg font-semibold transition duration-300">
                    Subscribe
                </button>
            </div>
        </div>

        <!-- Links Section -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8 max-w-6xl mx-auto">
            <!-- Services Column -->
            <div>
                <h4 class="font-bold text-lg mb-4">Services</h4>
                <ul class="space-y-2">
                    <li><a href="#" class="text-gray-700 hover:text-gray-900 transition duration-300">Website</a></li>
                    <li><a href="#" class="text-gray-700 hover:text-gray-900 transition duration-300">Social Media</a></li>
                    <li><a href="#" class="text-gray-700 hover:text-gray-900 transition duration-300">Branding</a></li>
                </ul>
            </div>

            <!-- About Column -->
            <div>
                <h4 class="font-bold text-lg mb-4">About</h4>
                <ul class="space-y-2">
                    <li><a href="#" class="text-gray-700 hover:text-gray-900 transition duration-300">Our projects</a></li>
                    <li><a href="#" class="text-gray-700 hover:text-gray-900 transition duration-300">Careers</a></li>
                </ul>
            </div>

            <!-- Support Column -->
            <div>
                <h4 class="font-bold text-lg mb-4">Support</h4>
                <ul class="space-y-2">
                    <li><a href="#" class="text-gray-700 hover:text-gray-900 transition duration-300">Support request</a></li>
                    <li><a href="#" class="text-gray-700 hover:text-gray-900 transition duration-300">Contact</a></li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div>
                <h4 class="font-bold text-lg mb-4">Connect With Us</h4>
                <div class="flex space-x-4">
                    <a href="#" class="text-gray-700 hover:text-gray-900 transition duration-300">
                        <i class="fab fa-facebook text-xl"></i>
                    </a>
                    <a href="#" class="text-gray-700 hover:text-gray-900 transition duration-300">
                        <i class="fab fa-twitter text-xl"></i>
                    </a>
                    <a href="#" class="text-gray-700 hover:text-gray-900 transition duration-300">
                        <i class="fab fa-instagram text-xl"></i>
                    </a>
                    <a href="#" class="text-gray-700 hover:text-gray-900 transition duration-300">
                        <i class="fab fa-linkedin text-xl"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Copyright -->
        <div class="border-t border-gray-400 mt-8 pt-8 text-center">
            <p class="text-gray-600">All rights reserved 2025</p>
        </div>
    </div>
</footer>
    </div>

    <!-- JavaScript untuk Mobile Menu -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuButton = document.querySelector('button.md\\:hidden');
            const mobileMenu = document.getElementById('mobileMenu');
            
            if (mobileMenuButton && mobileMenu) {
                mobileMenuButton.addEventListener('click', function() {
                    mobileMenu.classList.toggle('hidden');
                });
            }

            // Close mobile menu when clicking outside
            document.addEventListener('click', function(event) {
                if (!event.target.closest('header')) {
                    if (mobileMenu && !mobileMenu.classList.contains('hidden')) {
                        mobileMenu.classList.add('hidden');
                    }
                }
            });
        });
    </script>

</body>
</html>