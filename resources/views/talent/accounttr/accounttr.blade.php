<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account - Talent Researcher</title>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet" />
</head>

<body class="bg-gray-100 flex flex-col min-h-screen">

    @include('navbartr')

    <!-- Sidebar -->
    <div class="flex flex-1">
     @include('left')

        <!-- Profil Section -->
        <main class="flex-1 p-10">
            <h1 class="text-2xl font-bold">
                Profile <span class="bg-blue-500 text-white text-xs px-2 py-1 rounded ml-2">SMEs</span>
            </h1>
            <p class="text-lg text-gray-700 mt-1">Talent Researcher</p>

            <div class="bg-white shadow-md rounded-lg p-6 mt-4">
                <!-- Profile Image and Edit Buttons -->
  <div class="flex items-center space-x-4">
    <!-- Foto Profil -->
    <div class="w-24 h-24 bg-gray-300 rounded-lg overflow-hidden">
        <img src="{{ asset('storage/ppcowo.png') }}" alt="Gambar" class="w-full h-full object-cover">
    </div>

    <!-- Rating dan Tombol -->
    <div>
        <!-- Rating Bintang -->
        <div class="flex items-center gap-1 mt-1 text-yellow-400 text-[10px]">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
            <span class="text-[#1E293B]/50 ml-1">(6)</span>
        </div>

        <!-- Tombol -->
        <div class="mt-2 space-y-2">
            <button class="border border-blue-700 text-blue-700 px-4 py-2 rounded-md hover:bg-blue-700 hover:text-white">
                Change Photo
            </button>
            <button class="border border-red-500 text-red-500 px-4 py-2 rounded-md hover:bg-red-500 hover:text-white ml-2">
                Delete
            </button>
        </div>
    </div>
</div>


                <div class="mt-6 space-y-4">
                    <!-- Full Name -->
                    <div class="flex flex-col">
                        <label class="text-gray-700">Full Name</label>
                        <div class="flex items-center space-x-4">
                            <input type="text" class="border px-4 py-2 rounded w-2/3" value="John Doe" readonly>
                            <button class="border border-blue-700 text-blue-700 px-4 py-2 rounded-md hover:bg-blue-700 hover:text-white">
                                Edit
                            </button>
                        </div>
                    </div>

                    <!-- Date of Birth -->
                    <div class="flex flex-col">
                        <label class="text-gray-700">Date of Birth</label>
                        <div class="flex items-center space-x-4">
                            <input type="date" class="border px-4 py-2 rounded w-2/3" value="1999-10-10" readonly>
                            <button class="border border-blue-700 text-blue-700 px-4 py-2 rounded-md hover:bg-blue-700 hover:text-white">
                                Edit
                            </button>
                        </div>
                    </div>

                    <!-- Domicile -->
                    <div class="flex flex-col">
                        <label class="text-gray-700">Domicile</label>
                        <div class="flex items-center space-x-4">
                            <input type="text" class="border px-4 py-2 rounded w-2/3" value="Kota Bandung" readonly>
                            <button class="border border-blue-700 text-blue-700 px-4 py-2 rounded-md hover:bg-blue-700 hover:text-white">
                                Edit
                            </button>
                        </div>
                    </div>

                    <!-- Gender -->
                    <div class="flex flex-col">
                        <label class="text-gray-700 mb-2">Gender</label>
                        <div class="flex space-x-4">
                            <label class="flex items-center space-x-2">
                                <input type="radio" name="gender" value="Laki-laki" class="form-radio text-blue-600">
                                <span>Male</span>
                            </label>

                            <label class="flex items-center space-x-2">
                                <input type="radio" name="gender" value="Perempuan" class="form-radio text-blue-600">
                                <span>Female</span>
                            </label>

                            <label class="flex items-center space-x-2">
                                <input type="radio" name="gender" value="Lainnya" class="form-radio text-blue-600">
                                <span>Others</span>
                            </label>
                        </div>
                    </div>

                    <!-- Phone Number -->
                    <div class="flex flex-col">
                        <label class="text-gray-700">Phone Number</label>
                        <div class="flex items-center space-x-4">
                            <input type="text" class="border px-4 py-2 rounded w-2/3" value="081234567890" readonly>
                            <button class="border border-blue-700 text-blue-700 px-4 py-2 rounded-md hover:bg-blue-700 hover:text-white">
                                Edit
                            </button>
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="flex flex-col">
                        <label class="text-gray-700">Email</label>
                        <div class="flex items-center space-x-4">
                            <input type="text" class="border px-4 py-2 rounded w-2/3" value="liturtara@gmail.com" readonly>
                            <button class="border border-blue-700 text-blue-700 px-4 py-2 rounded-md hover:bg-blue-700 hover:text-white">
                                Edit
                            </button>
                        </div>
                    </div>

                    <!-- Password -->
                    <div class="flex flex-col">
                        <label class="text-gray-700">Password</label>
                        <div class="flex items-center space-x-4">
                            <input type="text" class="border px-4 py-2 rounded w-2/3" readonly>
                            <button class="border border-blue-700 text-blue-700 px-4 py-2 rounded-md hover:bg-blue-700 hover:text-white">
                                Edit
                            </button>
                        </div>
                    </div>

                </div>
            </div>

            <div class="flex justify-center">
                <button class="mt-6 bg-blue-900 text-white px-6 py-2 rounded-md hover:bg-blue-800">Save</button>
            </div>
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

            <!-- Company, Service, Help (Sections) -->
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