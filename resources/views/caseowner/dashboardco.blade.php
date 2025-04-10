<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Case Owner</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    @vite(['resources/css/app.css'])
</head>

<body class="bg-gray-100">

    <!-- Navbar -->
    <nav class="bg-white shadow-md py-4 px-6 flex justify-between items-center relative">
        <!-- Logo -->
        <div class="flex items-center space-x-3">
            <img src="{{ asset('storage/liturtaralogo.svg') }}" alt="Liturtara Logo" class="h-8">
        </div>

        <!-- Menu Navigasi (Left Side) -->
        <div class="hidden md:flex flex-row md:space-x-4 flex-grow ml-6">
            <a href="{{ route('dashboardco') }}" class="text-gray-700 hover:text-blue-700 py-2 px-4">Home</a>
            <a href="#" class="text-gray-700 hover:text-blue-700 py-2 px-4">About Us</a>
            <a href="{{ route('serviceco') }}" class="text-gray-700 hover:text-blue-700 py-2 px-4">Service</a>
            <a href="#" class="text-gray-700 hover:text-blue-700 py-2 px-4">News</a>
            <a href="#" class="text-gray-700 hover:text-blue-700 py-2 px-4">Our Contact</a>
        </div>

        <!-- Account Button (Right Side) -->
        <div class="flex items-center space-x-4">
            <!-- Token Button -->
            <a href="{{ route('accountco') }}">
                <button class="text-black-700 px-4 py-2 rounded-md hover:text-blue-700">
                    00 Token
                </button>
            </a>

            <!-- Notifikasi Lonceng -->
            <a href="#">
                <button class="text-black-700 px-2 py-2 rounded-md hover:text-blue-700">
                    <img src="{{ asset('storage/notifications.png') }}" alt="Notifikasi" class="h-6 w-6">
                </button>
            </a>

            <!-- Point Button -->
            <a href="{{ route('accountco') }}">
                <button class="text-black-700 px-4 py-2 rounded-md hover:text-blue-700">
                    100 Point
                </button>
            </a>

            <!-- Account Button -->
            <a href="{{ route('accountco') }}">
                <button class="border border-blue-700 text-blue-700 px-4 py-2 rounded-md hover:bg-blue-700 hover:text-white">
                    Account
                </button>
            </a>

            <!-- Tombol Burger Menu (Mobile) -->
            <button id="menu-toggle" class="md:hidden text-gray-700 focus:outline-none">
                <i class="fas fa-bars text-2xl"></i>
            </button>
        </div>

    </nav>


    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-white via-blue-100 to-green-100 py-16 px-8 flex items-center justify-center">
        <div class="w-1/2">
            <h1 class="text-3xl font-bold text-blue-900">Welcome to Liturtara</h1>
            <p class="text-gray-600 mt-2">Enjoy our Case Owner service!</p>
            <a href="{{ route('serviceco') }}">
                <button class="mt-4 bg-[#00114F] text-white px-6 py-2 rounded-md hover:bg-[#000C3D]">
                    Explore Now →
                </button>
            </a>
        </div>
        <div class="w-1/2 flex justify-center">
            <img src="caseowner.png" alt="Case Owner" class="w-80">
        </div>
    </section>

    <!-- Main Content -->
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

                <!-- Media Sosial    -->
                <div class="flex space-x-4">
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

    <!-- JavaScript untuk Toggle Menu -->
    <script>
        document.getElementById("menu-toggle").addEventListener("click", function() {
            document.getElementById("menu").classList.toggle("hidden");
        });
    </script>

</body>

</html>