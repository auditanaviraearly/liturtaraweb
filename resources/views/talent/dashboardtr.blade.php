<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Talent Researcher</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @vite(['resources/css/app.css'])
</head>
<body class="bg-gray-100">

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
            <a href="#" class="text-gray-700 hover:text-blue-700 block py-2 px-4">About</a>
            <a href="#" class="border border-blue-700 text-blue-700 px-4 py-2 rounded-md hover:bg-blue-700 hover:text-white block text-center md:inline-block">Account</a>
        </div>
    </nav>

    <!-- JavaScript untuk Toggle Menu -->
    <script>
        document.getElementById("menu-toggle").addEventListener("click", function() {
            let menu = document.getElementById("menu");
            if (menu.classList.contains("hidden")) {
                menu.classList.remove("hidden");
                menu.classList.add("flex", "flex-col");
            } else {
                menu.classList.add("hidden");
                menu.classList.remove("flex", "flex-col");
            }
        });
    </script>

    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-white via-blue-100 to-green-100 py-16 px-8 flex flex-col-reverse md:flex-row items-center justify-center">
        <div class="w-full md:w-1/2 text-center md:text-left">
            <h1 class="text-3xl font-bold text-blue-900">Welcome to Liturtara</h1>
            <p class="text-gray-600 mt-2">Enjoy our Talent Researcher service!</p>
            <button class="mt-4 bg-[#00114F] text-white px-6 py-2 rounded-md hover:bg-[#000C3D]">Explore Now →</button>
        </div>
        <div class="w-full md:w-1/2 flex justify-center">
            <img src="talent.png" alt="Talent" class="w-3/4 md:w-80">
        </div>
    </section>

    <!-- Main Content -->
    <section class="py-12 px-8">
        <h2 class="text-2xl font-bold text-blue-900 text-center">Talent Researcher Service's</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-6">
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
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div>
                <img src="{{ asset('storage/liturtarawhite.svg') }}" alt="Liturtara Logo" class="h-12">
                <p class="text-sm mt-3">PT. Literasi Jaya Nusantara</p>
                <p class="text-sm mt-1">Email: info@liturtara.com</p>
                <p class="text-sm mt-1">Phone: +62 812-3456-7890</p>
                <div class="flex space-x-4 mt-3">
                    <a href="#" class="text-gray-300 hover:text-white text-2xl"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="text-gray-300 hover:text-white text-2xl"><i class="fab fa-x"></i></a>
                    <a href="#" class="text-gray-300 hover:text-white text-2xl"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="text-gray-300 hover:text-white text-2xl"><i class="fab fa-linkedin"></i></a>
                </div>  
            </div>
            <div>
                <h3 class="font-semibold text-lg mb-3">Company</h3>
                <ul class="space-y-2">
                    <li><a href="#" class="text-gray-300 hover:text-white">Home Page</a></li>
                    <li><a href="#" class="text-gray-300 hover:text-white">About</a></li>
                    <li><a href="#" class="text-gray-300 hover:text-white">News</a></li>
                </ul>
            </div>
            <div>
                <h3 class="font-semibold text-lg mb-3">Service</h3>
                <ul class="space-y-2">
                    <li><a href="#" class="text-gray-300 hover:text-white">Case Owner</a></li>
                    <li><a href="#" class="text-gray-300 hover:text-white">Talent Researcher</a></li>
                </ul>
            </div>
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

</body>
</html>
