<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>
        Liturtara Page
    </title>
    <script src="https://cdn.tailwindcss.com">
    </script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&amp;display=swap" rel="stylesheet" />
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>

<body class="bg-[#F8FAFF] text-[#1B1B1B]">
    @include('navbartr')
    <!-- Main content -->
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 flex flex-col md:flex-row md:space-x-12">
        <!-- Left card -->
        <section class="relative bg-white rounded-lg shadow-md w-full max-w-sm mb-10 md:mb-0">
            <div class="absolute top-0 right-0 bg-[#B9B8B8] text-white text-xs font-semibold rounded-bl-md px-3 py-1 select-none">
                Waiting
            </div>
            <div class="p-6 pt-10 flex flex-col items-center space-y-6">
                <a class="self-start text-[#0B1B4D] text-sm font-semibold flex items-center space-x-1 hover:underline" href="#">
                    <svg class="w-4 h-4" fill="none" stroke="#0B1B4D" stroke-width="2" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15 19l-7-7 7-7" stroke-linecap="round" stroke-linejoin="round">
                        </path>
                    </svg>
                    <span>
                        Back
                    </span>
                </a>
                <h2 class="text-xl font-semibold text-[#1B1B1B]">
                    Headline
                </h2>
                <img alt="Liturtara logo, stylized geometric shape with text LITURTARA in navy blue" class="w-30 h-10 object-contain" height="40" src="storage/liturtaralogo.svg" width="120" />
                <div class="text-center">
                    <p class="font-semibold text-[#1B1B1B]">
                        John Doe
                    </p>
                    <p class="text-sm text-[#6B7280]">
                        UD Maju Jaya
                    </p>
                </div>
                <p class="text-xs text-[#6B7280] mt-6">
                    20 Oktober 2024
                </p>
            </div>
        </section>
        <!-- Right content -->
        <section class="flex-1">
            <h1 class="text-[#0B1B4D] font-semibold text-xl mb-3">
                Lorem ipsum dolor sit amet
            </h1>
            <div class="flex space-x-2 mb-4">
                <button class="text-xs text-[#0B1B4D] border border-[#0B1B4D] rounded-full px-3 py-1 font-semibold hover:bg-[#0B1B4D] hover:text-white transition">
                    Category
                </button>
                <button class="text-xs text-[#0B1B4D] border border-[#0B1B4D] rounded-full px-3 py-1 font-semibold hover:bg-[#0B1B4D] hover:text-white transition">
                    Category
                </button>
            </div>

            <!-- Container Flex -->
            <div class="flex gap-4 flex-wrap">
                <div class="relative w-full sm:w-[300px]">
                    <!-- Label pojok kanan atas -->
                    <div class="absolute top-0 right-0 bg-[#CDD2D4] text-[#0B1B4D] text-xs font-semibold rounded-bl-md px-3 py-1 select-none">
                        <i class="fas fa-clock"></i>
                        15 Desember 2025
                    </div>

                    <!-- Card utama -->
                    <div class="bg-white rounded-md shadow-md p-4 mb-6 text-[#0B1B4D] text-sm space-y-2" style="box-shadow: 0 0 10px rgba(11, 27, 77, 0.15);">
                        <div class="flex items-center space-x-2">
                            <i class="fas fa-user"></i>
                            <span>John Doe</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <i class="fas fa-building"></i>
                            <span>UD Maju Jaya</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <i class="fas fa-calendar-alt"></i>
                            <span>02 Oktober 2024</span>
                        </div>
                        <a class="text-xs text-[#0B1B4D] hover:underline block text-right font-semibold" href="#">View Profile</a>
                    </div>
                </div>


                <div class="bg-white rounded-md shadow-md p-4 mb-6 w-full sm:w-[300px] text-[#0B1B4D] text-sm space-y-2" style="box-shadow: 0 0 10px rgba(11, 27, 77, 0.15);">
                    <div class="flex items-center space-x-2">
                        <span class="text-gray-500">Solved by :</span>
                    </div>

                    <div class="flex items-center space-x-2">
                        <i class="fas fa-user-circle"></i>
                        <span>Muhammad Patel</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <i class="fas fa-university"></i>
                        <span>Haluoleo University</span>
                    </div>
                    <a href="#" class="flex items-center justify-between text-[#0B1B4D] hover:underline text-xs font-semibold w-full max-w-[300px]">
                        <div class="flex items-center gap-1 text-yellow-400 text-[10px]">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <span class="text-[#1E293B]/50 ml-1">(6)</span>
                        </div>
                        <span>View Profile</span>
                    </a>


                </div>
            </div>

            <p class="text-xs text-[#6B7280] mb-4 max-w-xl leading-relaxed">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
            </p>
            <p class="text-xs text-[#6B7280] max-w-xl leading-relaxed">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
            </p>
            <div class="mt-8 flex justify-end space-x-4 max-w-xl">
                <button aria-label="Add to favorites" class="border-2 border-[#FF0000] rounded-md p-2 text-[#FF0000] hover:bg-[#FF0000] hover:text-white transition">
                    <i class="far fa-heart">
                    </i>
                </button>
                <button class="bg-[#0B1B4D] text-white rounded-md px-6 py-2 text-sm font-semibold flex items-center space-x-2 hover:bg-[#0B1B4D]/90 transition">
                    <span>
                        Take
                    </span>
                    <i class="fas fa-download">
                    </i>
                </button>
            </div>
        </section>
    </main>
    @include('bottom')
</body>

</html>