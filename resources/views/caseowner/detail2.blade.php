<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>Liturtara</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet" />
</head>

<body class="bg-gradient-to-r from-[#e6f0f9] via-[#f0f9f4] to-[#e9f7d9] min-h-screen flex flex-col">
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
                    Token
                </button>
            </a>

            <!-- Notifikasi Lonceng -->
            <a href="#">
                <button id="notifButton" class="text-black-700 px-2 py-2 rounded-md hover:text-blue-700">
                    <i class="fas fa-bell text-xl"></i> <!-- FontAwesome Bell Icon -->
                </button>
            </a>

            <!-- Popup Notifikasi -->
            <div id="notifOverlay" class="hidden fixed inset-0 bg-black bg-opacity-30 backdrop-blur-sm z-40 flex items-start justify-center">
                <div class="bg-white rounded-lg shadow-xl w-80 relative z-50">
                    <div class="p-4 border-b font-semibold text-gray-700 flex justify-between items-center">
                        Notification
                        <button id="closeNotif" class="text-gray-500 hover:text-red-600 text-xl font-bold">&times;</button>
                    </div>
                    <ul class="max-h-64 overflow-y-auto">
                        <li class="p-3 text-sm text-gray-600 border-b hover:bg-gray-100">
                            Case data is incomplete
                            <span class="block text-xs text-gray-400" data-time="2025-05-05T12:00:00Z"></span> <!-- Waktu -->
                        </li>
                        <li class="p-3 text-sm text-gray-600 border-b hover:bg-gray-100">
                            A solution has been provided
                            <span class="block text-xs text-gray-400" data-time="2025-05-04T09:30:00Z"></span>
                        </li>
                        <li class="p-3 text-sm text-gray-600 border-b hover:bg-gray-100">
                            Case has been taken over
                            <span class="block text-xs text-gray-400" data-time="2025-05-02T15:00:00Z"></span>
                        </li>
                        <li class="p-3 text-sm text-gray-600 border-b hover:bg-gray-100">
                            Case has been taken over
                            <span class="block text-xs text-gray-400" data-time="2023-05-06T12:00:00Z"></span>
                        </li>
                    </ul>
                </div>
            </div>

            <script>
                // Fungsi untuk menghitung selisih waktu
                function timeAgo(date) {
                    const now = new Date();
                    const seconds = Math.floor((now - date) / 1000);
                    const minutes = Math.floor(seconds / 60);
                    const hours = Math.floor(minutes / 60);
                    const days = Math.floor(hours / 24);
                    const years = Math.floor(days / 365);

                    if (years > 0) return `${years} year${years > 1 ? 's' : ''} ago`;
                    if (days > 0) return `${days} day${days > 1 ? 's' : ''} ago`;
                    if (hours > 0) return `${hours} hour${hours > 1 ? 's' : ''} ago`;
                    if (minutes > 0) return `${minutes} minute${minutes > 1 ? 's' : ''} ago`;
                    return `${seconds} second${seconds > 1 ? 's' : ''} ago`;
                }

                // Menghitung dan menampilkan waktu relatif di elemen-elemen yang sesuai
                document.querySelectorAll('[data-time]').forEach(function(element) {
                    const date = new Date(element.getAttribute('data-time'));
                    element.textContent = timeAgo(date);
                });

                // Event listener untuk membuka dan menutup overlay notifikasi
                document.getElementById('notifButton').addEventListener('click', function() {
                    document.getElementById('notifOverlay').classList.toggle('hidden'); // Toggle visibility
                });

                document.getElementById('closeNotif').addEventListener('click', function() {
                    document.getElementById('notifOverlay').classList.add('hidden'); // Hide the overlay
                });
            </script>

            <!-- Point Button -->
            <a href="{{ route('accountco') }}">
                <button class="text-black-700 px-4 py-2 rounded-md hover:text-blue-700">
                    Point
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

    <!-- MAIN CONTENT -->
    <main class="flex-grow max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
        <div class="flex flex-col md:flex-row md:space-x-12">
            <!-- Left card -->
            <div class="bg-white rounded-xl shadow-lg max-w-xs w-full relative">
                <div onclick="history.back()" class="px-5 pt-5 pb-3 flex items-center space-x-2 text-sm text-[#0c1e4f] font-semibold cursor-pointer select-none">
                    <i class="fas fa-arrow-left"></i>
                    <span>Back</span>
                </div>

                <div class="border border-gray-200 rounded-xl mx-5 mb-5 p-6 pt-10 relative">
                    <div class="absolute top-2 right-1 bg-[#989EA0] text-white text-xs font-semibold rounded-md px-3 py-1 select-none">
                        Waiting
                    </div>
                    <h2 class="text-2xl font-bold text-[#0c1e4f] mb-8 select-none text-center">Headline</h2>
                    <img src="{{ asset('storage/liturtaralogo.svg') }}" alt="LITURTARA Logo" class="mx-auto mb-6" height="50" width="150" />
                    <div class="text-center">
                        <p class="font-semibold text-[#0c1e4f] select-none">John Doe</p>
                        <p class="text-sm text-gray-600 select-none">UD Maju Jaya</p>
                    </div>
                    <p class="text-xs text-gray-500 mt-10 text-center select-none">20 Oktober 2024</p>
                </div>
            </div>
            <!-- Right content -->
            <section class="flex-1 mt-10 md:mt-0">
                <h1 class="text-[#0c1e4f] font-extrabold text-xl md:text-2xl mb-3 select-none">
                    Lorem ipsum dolor sit amet
                </h1>
                <div class="flex flex-wrap gap-2 mb-4">
                    <span class="text-xs text-[#0c1e4f] border border-[#0c1e4f] rounded-full px-3 py-0.5 select-none cursor-default">
                        Kategori
                    </span>
                    <span class="text-xs text-[#0c1e4f] border border-[#0c1e4f] rounded-full px-3 py-0.5 select-none cursor-default">
                        Kategori
                    </span>
                </div>

                <!-- Grid untuk dua card pertama di kiri dan kanan -->
                <div class="grid grid-cols-2 gap-4">
                    <!-- Card pertama -->
                    <div class="bg-white border border-gray-300 rounded-lg p-4 max-w-xs select-none text-[#0c1e4f] text-sm">
                        <div class="flex items-center space-x-2 mb-2">
                            <i class="fas fa-user"></i>
                            <span>John Doe</span>
                        </div>
                        <div class="flex items-center space-x-2 mb-2">
                            <i class="fas fa-building"></i>
                            <span>UD Maju Jaya</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <i class="fas fa-calendar-alt"></i>
                            <span>15 Des 2024</span>
                        </div>
                        <div class="text-xs text-right mt-2">
                            <a class="text-[#0c1e4f] underline" href="#">View Profile</a>
                        </div>
                    </div>

                    <!-- Card Draft Solusi -->
                    <div class="bg-white border border-gray-300 rounded-lg p-4 max-w-xs shadow-md flex">
                        <div class="flex flex-col justify-start items-start pr-4 border-r border-gray-300">
                            <span class="font-semibold text-lg leading-tight text-gray-900">Draft<br />Solusi</span>
                            <span class="font-extrabold text-6xl leading-none text-gray-900 mt-1">3</span>
                        </div>
                        <div class="flex flex-col justify-between flex-1 pl-4">
                            <div>
                                <div class="font-semibold text-gray-900 text-base leading-tight">Lorem Ipsum</div>
                                <div class="text-gray-400 text-sm leading-tight mb-1">Lorem Ipsum</div>
                                <hr class="border-gray-400" />
                            </div>
                            <div class="mt-2">
                                <div class="font-semibold text-gray-900 text-base leading-tight">Consectetur Adipiscing</div>
                                <div class="text-gray-400 text-sm leading-tight mb-1">Lorem Ipsum</div>
                                <hr class="border-gray-400" />
                            </div>
                            <div class="mt-3 text-sm text-blue-900 underline cursor-pointer self-end">View All Solution</div>
                        </div>
                    </div>
                </div>

                <p class="text-xs text-gray-500 mb-3 max-w-xl leading-tight">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                    laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                    voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                </p>
                <p class="text-xs text-gray-500 max-w-xl leading-tight">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                    laboris nisi ut aliquip ex ea commodo consequat.
                </p>
                <button class="mt-6 bg-red-600 hover:bg-red-700 text-white text-sm font-semibold px-4 py-2 rounded flex items-center space-x-2 ml-auto" type="button" id="deleteBtn">
                    <span>Rejected Case</span>
                    <i class="fas fa-times"></i>
                </button>

                <!-- Confirmation Modal -->
                <div id="confirmationModal" class="hidden fixed inset-0 bg-black bg-opacity-50 backdrop-blur-sm z-50 flex justify-center items-center">
                    <div class="bg-white p-6 rounded-lg shadow-lg max-w-sm w-full ">
                        <h2 class="text-xl font-semibold text-gray-800 mb-8 text-center">
                            Are you sure you want to Rejected Case this file?
                        </h2>
                        <div class="flex justify-center space-x-4">
                            <button id="cancelBtn" class="bg-[#00114F] text-white px-4 py-2 rounded-md hover:bg-[#00114F] hover:text-white transition duration-200">
                                No
                            </button>
                            <button id="confirmDeleteBtn" class="bg-gray-300 text-black px-4 py-2 rounded-md hover:bg-red-600 hover:text-white transition duration-200">
                                Yes
                            </button>
                        </div>
                    </div>
                </div>

                <script>
                    // Get elements
                    const deleteBtn = document.getElementById('deleteBtn');
                    const confirmationModal = document.getElementById('confirmationModal');
                    const cancelBtn = document.getElementById('cancelBtn');
                    const confirmDeleteBtn = document.getElementById('confirmDeleteBtn');

                    // Show the modal when delete button is clicked
                    deleteBtn.addEventListener('click', function() {
                        confirmationModal.classList.remove('hidden');
                    });

                    // Hide the modal when cancel button is clicked
                    cancelBtn.addEventListener('click', function() {
                        confirmationModal.classList.add('hidden');
                    });

                    // Handle delete action (confirm delete)
                    confirmDeleteBtn.addEventListener('click', function() {
                        // Add the logic to delete the file here (e.g., send a request to the server)
                        alert('File deleted'); // Placeholder for actual delete logic
                        confirmationModal.classList.add('hidden');
                    });
                </script>



            </section>
        </div>
    </main>

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
                <div class="flex space-x-4 mt-6">
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
</body>

</html>