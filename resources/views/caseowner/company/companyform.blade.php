<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company - Case Owner</title>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex flex-col min-h-screen">

    <!-- Navbar -->
    <nav class="bg-white shadow-md py-4 px-6 flex justify-between items-center">
        <div class="flex items-center space-x-3">
            <img src="{{ asset('storage/liturtaralogo.svg') }}" alt="Liturtara Logo" class="h-8">
        </div>
        <div class="flex space-x-6 justify-start">
            <a href="#" class="text-gray-700 hover:text-blue-700">Home</a>
            <a href="{{ route('serviceco') }}" class="text-gray-700 hover:text-blue-700">Service</a>
            <a href="#" class="text-gray-700 hover:text-blue-700">Contact Us</a>
            <a href="{{ route('company') }}">
                <button class="border border-blue-700 text-blue-700 px-4 py-2 rounded-md hover:bg-blue-700 hover:text-white">
                    Account
                </button>
            </a>
        </div>
    </nav>
    
    <!-- Sidebar -->
    <div class="flex flex-1">
        <aside class="w-64 bg-white shadow-md min-h-screen p-6">
            <nav class="space-y-4">
                <a href="{{ route('accountco') }}" class="block text-gray-700 hover:text-blue-700">Profile</a>
                <a href="#" class="block font-semibold text-white bg-blue-900 px-4 py-2 rounded-lg">Company</a>
                <a href="#" class="block text-gray-700 hover:text-blue-700">Project</a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="block text-red-600 hover:text-red-800">
                        Logout →
                    </button>
                </form>
            </nav>
        </aside>

        <!-- Main Section -->
        <main class="flex-1 p-10">
            <h1 class="text-2xl font-bold">
                Company <span class="bg-blue-500 text-white text-xs px-2 py-1 rounded ml-2">SMEs</span>
            </h1>
            <p class="text-lg text-gray-700 mt-1">Case Owner</p>
            
            <div class="bg-white shadow-md rounded-lg p-6 mt-4">
                <!-- Profile Image and Edit Buttons -->
                <div class="flex items-end space-x-4">
                    <div class="w-300 h-180 bg-gray-300 rounded-lg overflow-hidden">
                        <img src="{{ asset('storage/expimg.png') }}" alt="Gambar" class="w-full h-full object-cover">
                    </div>
                    
                    <div class="flex flex-col space-y-6 items -center">
                        <div class="w-90 h-20 bg-gray-300 rounded-lg overflow-hidden">
                            <img src="{{ asset('storage/expimg.png') }}" alt="Gambar" class="w-full h-full object-cover">
                        </div>

                        <div class="w-90 h-20 bg-gray-300 rounded-lg overflow-hidden">
                            <img src="{{ asset('storage/expimg.png') }}" alt="Gambar" class="w-full h-full object-cover">
                        </div>
                    </div>

                    <div>
                        <div class="flex flex-col space-y-2 "> <!-- Menambahkan jarak antar tombol -->
                            <button class="border border-blue-700 text-blue-700 px-4 py-2 rounded-md hover:bg-blue-700 hover:text-white">
                                View
                            </button>
                            <button class="border border-blue-700 text-blue-700 px-4 py-2 rounded-md hover:bg-blue-700 hover:text-white">
                                Add
                            </button>
                        </div>

                    </div>
                </div>
                
                <!-- Form Section -->
                <div class="bg-white rounded-lg shadow-md p-6 mt-6">
                    <form action="{{ route('company.submit') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <!-- Step 1 -->
                        <div id="step1" class="step">
                            @include('caseowner.company.step1')
                        </div>

                        <!-- Step 2 -->
                        <div id="step2" class="step hidden">
                            @include('caseowner.company.step2')
                        </div>

                    <!-- Navigation Buttons -->
                    <div class="flex justify-center gap-4 mt-6">
                        <button type="button" class="prevBtn bg-gray-300 text-gray-800 px-4 py-2 rounded hover:bg-gray-400">← Previous</button>
                        <button type="button" class="nextBtn bg-blue-700 text-white px-6 py-2 rounded hover:bg-blue-800">Next →</button>
                    </div>

                    </form>
                </div>
            </div>

            <!-- Save Button
            <div class="flex justify-center mt-6">
                <button class="bg-blue-900 text-white px-6 py-2 rounded-md hover:bg-blue-800">Save</button>
            </div> -->
        </main>
    </div>

    <!-- Footer -->
    <footer class="bg-[#00114F] text-white py-20 px-16">
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-4 gap-8">
            
            <!-- Logo, Alamat & Media Sosial -->
            <div>
                <img src="{{ asset('storage/liturtarawhite.svg') }}" alt="Liturtara Logo" class="h-12">
                <p class="text-sm mt-3">PT. Literasi Jaya Nusantara</p>
                <p class="text-sm mt-1">Email: info@liturtara.com</p>
                <p class="text-sm mt-1">Phone: +62 812-3456-7890</p>

                <div class="flex space-x-4">
                    <a href="#" class="text-gray-300 hover:text-white text-2xl"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="text-gray-300 hover:text-white text-2xl"><i class="fab fa-x"></i></a>
                    <a href="#" class="text-gray-300 hover:text-white text-2xl"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="text-gray-300 hover:text-white text-2xl"><i class="fab fa-linkedin"></i></a>
                </div>  
            </div>

            <!-- Company, Service, Help Sections -->
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
                    <li><a href="#" class="text-gray-300 hover:text-white">Terms and Conditions</a></li>
                    <li><a href="#" class="text-gray-300 hover:text-white">Privacy Policy</a></li>
                </ul>
            </div>
        </div>
    </footer>

</body>
</html>
