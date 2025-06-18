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

    <div class="flex flex-1">
        <!-- Sidebar -->
        <aside class="w-64 bg-white shadow-md min-h-screen p-6">
            <nav class="space-y-4">
                <a href="{{ route('accounttr') }}" class="block font-semibold text-white bg-blue-900 px-4 py-2 rounded-lg">Profile</a>
                <a href="{{ route('cv') }}" class="block text-gray-700 hover:text-blue-700">CV & Certification</a>
                <a href="#" class="block text-gray-700 hover:text-blue-700">Project</a>
                <a href="#" class="block text-gray-700 hover:text-blue-700">Favorite</a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="block text-red-600 hover:text-red-800">
                        Logout →
                    </button>
                </form>
            </nav>
        </aside>

        <main class="flex-1 p-10" x-data="{ step: 1 }">
            <h1 class="text-2xl font-bold">
                Profile <span class="bg-blue-500 text-white text-xs px-2 py-1 rounded ml-2">SMEs</span>
            </h1>
            <p class="text-lg text-gray-700 mt-1">Talent Researcher</p>

            <!-- Step 1: Data Pribadi -->
            <div class="bg-white shadow-md rounded-lg p-6 mt-4" x-show="step === 1">
                <div class="flex items-center space-x-4">
                    <div class="w-24 h-24 bg-gray-300 rounded-lg overflow-hidden">
                        <img src="{{ asset('storage/ppcowo.png') }}" alt="Gambar" class="w-full h-full object-cover">
                    </div>

                    <div>
                        <div class="flex items-center gap-1 mt-1 text-yellow-400 text-[10px]">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <span class="text-[#1E293B]/50 ml-1">(6)</span>
                        </div>

                        <div class="mt-2 space-y-2">
                            <button class="border border-blue-700 text-blue-700 px-4 py-2 rounded-md hover:bg-blue-700 hover:text-white">Change Photo</button>
                            <button class="border border-red-500 text-red-500 px-4 py-2 rounded-md hover:bg-red-500 hover:text-white ml-2">Delete</button>
                        </div>
                    </div>
                </div>

                <div class="mt-6 space-y-4">
                    <!-- Full Name -->
                    <div class="flex flex-col">
                        <label class="text-gray-700">Full Name</label>
                        <div class="flex items-center space-x-4">
                            <input type="text" class="border px-4 py-2 rounded w-2/3" value="John Doe" readonly>
                            <button class="border border-blue-700 text-blue-700 px-4 py-2 rounded-md hover:bg-blue-700 hover:text-white">Edit</button>
                        </div>
                    </div>

                    <!-- Date of Birth -->
                    <div class="flex flex-col">
                        <label class="text-gray-700">Date of Birth</label>
                        <div class="flex items-center space-x-4">
                            <input type="date" class="border px-4 py-2 rounded w-2/3" value="1999-10-10" readonly>
                            <button class="border border-blue-700 text-blue-700 px-4 py-2 rounded-md hover:bg-blue-700 hover:text-white">Edit</button>
                        </div>
                    </div>

                    <!-- Domicile -->
                    <div class="flex flex-col">
                        <label class="text-gray-700">Domicile</label>
                        <div class="flex items-center space-x-4">
                            <input type="text" class="border px-4 py-2 rounded w-2/3" value="Kota Bandung" readonly>
                            <button class="border border-blue-700 text-blue-700 px-4 py-2 rounded-md hover:bg-blue-700 hover:text-white">Edit</button>
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

                    <hr class="space-x-4 space-y-4 my-4 border-gray-300">

                    <!-- Phone Number -->
                    <div class="flex flex-col">
                        <label class="text-gray-700">Agency Name</label>
                        <div class="flex items-center space-x-4">
                            <input type="text" class="border px-4 py-2 rounded w-2/3" value="081234567890" readonly>
                            <button class="border border-blue-700 text-blue-700 px-4 py-2 rounded-md hover:bg-blue-700 hover:text-white">Edit</button>
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="flex flex-col">
                        <label class="text-gray-700">Last Education</label>
                        <div class="flex items-center space-x-4">
                            <input type="text" class="border px-4 py-2 rounded w-2/3" value="liturtara@gmail.com" readonly>
                            <button class="border border-blue-700 text-blue-700 px-4 py-2 rounded-md hover:bg-blue-700 hover:text-white">Edit</button>
                        </div>
                    </div>

                    <!-- Password -->
                    <div class="flex flex-col">
                        <label class="text-gray-700">Achievements</label>
                        <div class="flex items-center space-x-4">
                            <input type="text" class="border px-4 py-2 rounded w-2/3" readonly>
                            <button class="border border-blue-700 text-blue-700 px-4 py-2 rounded-md hover:bg-blue-700 hover:text-white">Edit</button>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center">
                    <button @click="step = 2" class="mt-6 bg-blue-900 text-white px-6 py-2 rounded-md hover:bg-blue-800">Continue</button>
                </div>
            </div>

            <!-- Step 2: Social Media -->
            <div class="bg-white shadow-md rounded-lg p-6 mt-4" x-show="step === 2">
                <!-- <h2 class="text-xl font-semibold mb-4">Social Media Links</h2> -->

                <div class="space-y-4">
                    <!-- Phone Number -->
                    <div class="flex flex-col">
                        <label class="text-gray-700">Phone Number</label>
                        <div class="flex items-center space-x-4">
                            <input type="text" class="border px-4 py-2 rounded w-2/3" value="081234567890" readonly>
                            <button class="border border-blue-700 text-blue-700 px-4 py-2 rounded-md hover:bg-blue-700 hover:text-white">Edit</button>
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="flex flex-col">
                        <label class="text-gray-700">Email</label>
                        <div class="flex items-center space-x-4">
                            <input type="text" class="border px-4 py-2 rounded w-2/3" value="liturtara@gmail.com" readonly>
                            <button class="border border-blue-700 text-blue-700 px-4 py-2 rounded-md hover:bg-blue-700 hover:text-white">Edit</button>
                        </div>
                    </div>

                    <!-- Password -->
                    <div class="flex flex-col">
                        <label class="text-gray-700">Password</label>
                        <div class="flex items-center space-x-4">
                            <input type="text" class="border px-4 py-2 rounded w-2/3" readonly>
                            <button class="border border-blue-700 text-blue-700 px-4 py-2 rounded-md hover:bg-blue-700 hover:text-white">Edit</button>
                        </div>
                    </div>
                </div>

                <hr class="my-4 border-gray-300">

                <div class="flex flex-col">
                    <label class="text-gray-700">LinkedIn</label>
                    <input type="text" class="border px-4 py-2 rounded w-full" placeholder="https://linkedin.com/in/username">
                </div>
                <div class="flex flex-col">
                    <label class="text-gray-700">Instagram</label>
                    <input type="text" class="border px-4 py-2 rounded w-full" placeholder="https://instagram.com/username">
                </div>
                <div class="flex justify-between mt-6">
                    <button @click="step = 1" class="bg-gray-300 text-gray-700 px-6 py-2 rounded-md hover:bg-gray-400">Back</button>
                    <button class="bg-blue-900 text-white px-6 py-2 rounded-md hover:bg-blue-800">Save Changes</button>
                </div>
            </div>


    </div>
    </main>
    </div>

    @include('bottom')

</body>

</html>