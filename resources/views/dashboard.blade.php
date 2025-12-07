<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YOUR BEYOND IMAGINATION</title>
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
                    <a href="{{ url('/categories') }}" class="text-gray-600 hover:text-blue-600 font-medium">Shop</a>
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
                <div class="flex flex-col space-y-4">
                    <a href="{{ url('/') }}" class="text-gray-600 hover:text-blue-600 font-medium">Home</a>
                    <a href="{{ url('/shop') }}" class="text-gray-600 hover:text-blue-600 font-medium">Shop</a>
                    <a href="{{ url('/about') }}" class="text-gray-600 hover:text-blue-600 font-medium">About</a>
                    <a href="{{ url('/contact') }}" class="text-gray-600 hover:text-blue-600 font-medium">Contact Us</a>
                    <div class="border-t pt-4">
                        <a href="{{ route('login') }}" class="block py-2 text-gray-600 hover:text-blue-600">Daftar Masuk</a>
                        <a href="{{ route('register') }}" class="block py-2 text-gray-600 hover:text-blue-600">Daftar</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
   <section class="bg-[#F5F19A] text-[#4C6977] pt-20 pb-32 rounded-b-[100%]">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-6">YOUR BEYOND IMAGINATION</h1>
            <p class="text-xl md:text-2xl mb-8 leading-relaxed">
            <strong>Momen spesial nggak datang dua kali!</strong><br>
            ayo abadikan sekarang di fotobooth kita yang super estetik!
        </p>
        <div class="flex justify-center">
            <a href="{{ route('register') }}" class="bg-[#EC4D97] text-white px-8 py-4 rounded-lg font-bold text-lg hover:bg-[#D43D87] transition duration-300 shadow-lg">
                Daftar
            </a>
            <a href="{{ route('login') }}" class="bg-[#F7C9D7] text-gray-800 px-8 py-4 rounded-lg font-bold text-lg hover:bg-[#EC4D97] transition duration-300 shadow-lg border border-gray-300">
                Masuk
            </a>
        </div>
        </div>
    </section>

    <!-- Main Content -->
    <div class="bg-[#FFF8EF] shadow-sm sticky top-0 z-50">
        
        <!-- About Us Section -->
        <section class="mt-16 mb-16">
            <div class="max-w-6xl mx-auto">
                <h2 class="text-3xl font-bold text-[#4C6977] mb-8 text-center">ABOUT US</h2>
                
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Kolom 1 -->
                    <div class="bg-[#D9CFF0] rounded-2xl shadow-xl p-6 text-center">
                        <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-history text-[#4C6977] text-2xl"></i>
                        </div>
                        <h3 class="font-bold text-lg text-[#4C6977] mb-3">Sejarah</h3>
                        <p class="text-[#4C6977] text-sm leading-relaxed">
                            Dirintis sejak 2012 dengan nama Falcon Artsite di Bandung
                        </p>
                    </div>

                    <!-- Kolom 2 -->
                    <div class="bg-[#D9CFF0] rounded-2xl shadow-xl p-6 text-center">
                        <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-sync-alt text-[#4C6977] text-2xl"></i>
                        </div>
                        <h3 class="font-bold text-lg text-[#4C6977] mb-3">Transformasi</h3>
                        <p class="text-[#4C6977] text-sm leading-relaxed">
                            Berganti nama menjadi Denio Imagine pada tahun 2018
                        </p>
                    </div>

                    <!-- Kolom 3 -->
                    <div class="bg-[#D9CFF0] rounded-2xl shadow-xl p-6 text-center">
                        <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-map-marker-alt text-[#4C6977] text-2xl"></i>
                        </div>
                        <h3 class="font-bold text-lg text-[#4C6977] mb-3">Market</h3>
                        <p class="text-[#4C6977] text-sm leading-relaxed">
                            Fokus utama di kawasan Yogyakarta dengan layanan lengkap
                        </p>
                    </div>
                </div>

                <!-- Tombol Learn More di bawah kolom -->
                <div class="text-center mt-8">
                    <a href="{{ url('/about') }}" class="bg-[#EC4D97] text-white px-8 py-4 rounded-lg hover:bg-[#D43D87] transition duration-300 font-medium text-lg">
                        Learn More
                    </a>
                </div>
            </div>
        </section>

        <!-- Two Column Layout -->
        <div class="max-w-6xl mx-auto">
            
            <!-- Categories Section - Now on Top -->
            <div class="bg-[#FFF8EF] rounded-2xl shadow-xl p-8 mb-12">
                <h3 class="text-2xl font-bold text-[#4C6977] mb-8 text-center">THE CATEGORIES</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <!-- Self Photo -->
                    <a href="{{ url('/category/self-photo') }}" class="bg-[#C6E5CE] rounded-xl p-6 hover:shadow-lg transition duration-300 block text-center">
                        <i class="fas fa-camera text-blue-600 text-2xl"></i>
                        <h4 class="font-bold text-lg text-[#4C6977] mb-2">Self-Photo</h4>
                        <p class="text-gray-600 text-sm">Professional self photography services</p>
                    </a>

                    <!-- Yearbooks -->
                    <a href="{{ url('/category/yearbooks') }}" class="bg-[#D9CFF0] rounded-xl p-6 hover:shadow-lg transition duration-300 block text-center">
                        <i class="fas fa-book text-green-600 text-2xl"></i>
                        <h4 class="font-bold text-lg text-[#4C6977] mb-2">Yearbooks</h4>
                        <p class="text-gray-600 text-sm">Custom yearbook design and printing</p>
                    </a>

                    <!-- Rental Properties -->
                    <a href="{{ url('/category/rental-properties') }}" class="bg-[#F7C9D7] rounded-xl p-6 hover:shadow-lg transition duration-300 block text-center">
                        <i class="fas fa-home text-purple-600 text-2xl"></i>
                        <h4 class="font-bold text-lg text-[#4C6977] mb-2">Rental Properties</h4>
                        <p class="text-gray-600 text-sm">Property rental photography services</p>
                    </a>

                    <!-- Print -->
                    <a href="{{ url('/category/print') }}" class="bg-[#F5F19A] rounded-xl p-6 hover:shadow-lg transition duration-300 block text-center">
                        <i class="fas fa-print text-yellow-600 text-2xl"></i>
                        <h4 class="font-bold text-lg text-[#4C6977] mb-2">Print</h4>
                        <p class="text-gray-600 text-sm">High quality printing services</p>
                    </a>
                </div>
            </div>

            <!-- Location Section - Now Below Categories -->
            <div class="bg-white bg-opacity-70 rounded-2xl shadow-xl p-8 relative overflow-hidden">
                <!-- Background Peta Indonesia -->
                <div class="absolute inset-0 opacity-35 z-0">
                    <img src="{{ asset('images/map_denio.png') }}" 
                        alt="Peta Denio" 
                        class="w-full h-full object-cover">
                </div>
                <div class="relative z-10">
                    <h3 class="text-2xl font-bold text-[#4C6977] mb-6">LOCATION</h3>
                    <div class="space-y-4 mb-8">
                        <div class="flex items-center p-3 hover:bg-gray-50 rounded-lg transition duration-300">
                            <i class="fas fa-map-marker-alt w-8 text-red-500"></i>
                            <span class="text-gray-700">Rajagaluh, Majalengka</span>
                        </div>
                        <div class="flex items-center p-3 hover:bg-gray-50 rounded-lg transition duration-300">
                            <i class="fas fa-clock w-8 text-blue-500"></i>
                            <span class="text-gray-700">Open: 9:00 AM - 6:00 PM</span>
                        </div>
                        <div class="flex items-center p-3 hover:bg-gray-50 rounded-lg transition duration-300">
                            <i class="fas fa-phone w-8 text-green-500"></i>
                            <span class="text-gray-700">+62 838 3910 0428</span>
                        </div>
                    </div>
                    <a href="https://maps.app.goo.gl/ogVvCuMZbrmdjTVa6" target="_blank" class="bg-[#EC4D97] text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition duration-300 font-medium w-full text-center block">
                        View on Map
                    </a>
                </div>
            </div>
        </div>

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

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8">
        <div class="container mx-auto px-4 text-center">
            <p>&copy; 2024 YOUR BEYOND IMAGINATION. All rights reserved.</p>
        </div>
    </footer>

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