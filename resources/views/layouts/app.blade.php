<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>{{ $title ?? 'Layanan Case Owner' }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css') <!-- Make sure Vite is set up correctly -->
    <!-- Include Font Awesome icons if not already loaded -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body class="bg-white text-gray-900 antialiased">
    <!-- Navbar -->
    <nav class="bg-white shadow-md py-4 px-6 flex justify-between items-center relative">
        <div class="flex items-center space-x-3">
            <img src="{{ asset('storage/liturtaralogo.svg') }}" alt="Liturtara Logo" class="h-8">
        </div>

        <!-- Tombol Burger Menu (Mobile) -->
        <button id="menu-toggle" class="md:hidden text-gray-700 focus:outline-none">
            <i class="fas fa-bars text-2xl"></i>
        </button>

        <!-- Menu Navigasi -->
        <div id="menu" class="hidden md:flex flex-col md:flex-row md:space-x-6 absolute md:relative top-full left-0 w-full md:w-auto bg-white md:bg-transparent shadow-md md:shadow-none p-4 md:p-0 transition-all duration-300">
            <a href="#" class="text-gray-700 hover:text-blue-700 block py-2 px-4">Home</a>
            <a href="#" class="text-gray-700 hover:text-blue-700 block py-2 px-4">Service</a>
            <a href="#" class="text-gray-700 hover:text-blue-700 block py-2 px-4">Contact Us</a>
            <a href="{{ route('accountco') }}">
                <button class="border border-blue-700 text-blue-700 px-4 py-2 rounded-md hover:bg-blue-700 hover:text-white block text-center md:inline-block">
                    Account
                </button>
            </a>
        </div>
    </nav>

    <!-- Header -->
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
            <h1 class="text-xl font-bold text-blue-700">Layanan Case Owner</h1>
            <nav class="space-x-4 text-sm">
                <a href="#" class="text-gray-700 hover:text-blue-600">Case Owner</a>
                <a href="#" class="text-gray-700 hover:text-blue-600">Talent Researcher</a>
            </nav>
        </div>
    </header>

    <!-- Content -->
    <section class="py-12 px-8">
        <h2 class="text-2xl font-bold text-blue-900 text-center">Case Owner Service's</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-6">
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="font-semibold text-lg">Manage Cases</h3>
                <p class="text-gray-600 mt-2">View and organize the cases you are working on.</p>
                <button class="mt-4 text-blue-700 border border-blue-700 px-4 py-2 rounded-md hover:bg-blue-700 hover:text-white">View Cases</button>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="font-semibold text-lg">Reports & Analysis</h3>
                <p class="text-gray-600 mt-2">Get an in-depth report on your case.</p>
                <button class="mt-4 text-blue-700 border border-blue-700 px-4 py-2 rounded-md hover:bg-blue-700 hover:text-white">View Report</button>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="font-semibold text-lg">Account Settings</h3>
                <p class="text-gray-600 mt-2">Manage your account information easily.</p>
                <button class="mt-4 text-blue-700 border border-blue-700 px-4 py-2 rounded-md hover:bg-blue-700 hover:text-white">Manage Account</button>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-[#00114F] text-white py-20 px-16">
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-4 gap-8">
            <!-- Logo, Alamat & Media Sosial -->
            <div>
                <img src="{{ asset('storage/liturtarawhite.svg') }}" alt="Liturtara Logo" class="h-12">
                <p class="text-sm mt-3">
                    PT. Literasi Jaya Nusantara
                </p>
                <p class="text-sm mt-1">Email: info@liturtara.com</p>
                <p class="text-sm mt-1">Phone: +62 812-3456-7890</p>

                <!-- Media Sosial -->
                <div class="flex space-x-4 mt-3">
                    <a href="#" class="text-gray-300 hover:text-white text-2xl"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="text-gray-300 hover:text-white text-2xl"><i class="fab fa-x"></i></a>
                    <a href="#" class="text-gray-300 hover:text-white text-2xl"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="text-gray-300 hover:text-white text-2xl"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>

            <!-- Perusahaan -->
            <div>
                <h3 class="font-semibold text-lg mb-3">Company</h3>
                <ul class="space-y-2">
                    <li><a href="#" class="text-gray-300 hover:text-white">Home Page</a></li>
                    <li><a href="#" class="text-gray-300 hover:text-white">About</a></li>
                    <li><a href="#" class="text-gray-300 hover:text-white">News</a></li>
                </ul>
            </div>

            <!-- Layanan -->
            <div>
                <h3 class="font-semibold text-lg mb-3">Service</h3>
                <ul class="space-y-2">
                    <li><a href="#" class="text-gray-300 hover:text-white">Case Owner</a></li>
                    <li><a href="#" class="text-gray-300 hover:text-white">Talent Researcher</a></li>
                </ul>
            </div>

            <!-- Bantuan -->
            <div>
                <h3 class="font-semibold text-lg mb-3">Help</h3>
                <ul class="space-y-2">
                    <li><a href="#" class="text-gray-300 hover:text-white">Contact Us</a></li>
                    <li><a href="#" class="text-gray-300 hover:text-white">FAQ</a></li>
                    <li><a href="#" class="text-gray-300 hover:text-white">Terms and Condition</a></li>
                    <li><a href="#" class="text-gray-300 hover:text-white">Privacy Policy</a></li>
                </ul>
            </div>
        </div>
        <div class="text-center text-gray-400 text-sm mt-12">
            &copy; 2025 Liturtara. All Rights Reserved.
        </div>
    </footer>

    <!-- JavaScript for Mobile Menu Toggle -->
    <script>
        document.getElementById("menu-toggle").addEventListener("click", function() {
            const menu = document.getElementById("menu");
            menu.classList.toggle("hidden");
        });
    </script>
</body>
</html>
