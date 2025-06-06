<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>
        Liturtara Payment Success
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

<body class="bg-gradient-to-r from-[#e9efff] via-[#f0f5ff] to-[#d9f0c6] min-h-screen flex flex-col">
    <!-- Navbar -->
    <nav class="bg-white shadow-md py-4 px-6 flex justify-between items-center relative">
        <!-- Logo -->
        <div class="flex items-center space-x-3">
            <img src="{{ asset('storage/liturtaralogo.svg') }}" alt="Liturtara Logo" class="h-8">
        </div>

        <!-- Menu Navigasi (Left Side) -->
        <div class="hidden md:flex flex-row md:space-x-4 flex-grow ml-6">
            <a href="{{ route('dashboardtr') }}" class="text-gray-700 hover:text-blue-700 py-2 px-4">Home</a>
            <a href="#" class="text-gray-700 hover:text-blue-700 py-2 px-4">About Us</a>
            <a href="{{ route('servicetr') }}" class="text-gray-700 hover:text-blue-700 py-2 px-4">Service</a>
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
            <a href="#" id="notifButton">
                <button class="text-black-700 px-2 py-2 rounded-md hover:text-blue-700">
                    <i class="fas fa-bell h-6 w-6"></i>
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
    <!-- Main content -->
    <main class="flex-grow max-w-[1200px] mx-auto w-full px-6 py-12 flex flex-col md:flex-row items-center justify-center gap-12">
        <div class="relative flex justify-center items-center w-64 h-64 md:w-80 md:h-80">
  <img
    class="relative z-10 w-64 h-64 md:w-80 md:h-80 object-cover rounded-md"
    height="320"
    src="Group 678.png"
    width="320"
    alt="Thankful Image"
  />
  
  <div
    class="absolute top-1/2 left-1/2 rounded-full border-4 border-[#0a1a4f] w-64 h-64 md:w-80 md:h-80
           transform -translate-x-1/2 -translate-y-1/2"
  ></div>
  
  <div
    class="absolute top-1/2 left-1/2 rounded-full border-4 border-[#2a7a2a] w-56 h-56 md:w-72 md:h-72
           transform -translate-x-1/2 -translate-y-1/2"
  ></div>
  
  <div
    class="absolute top-1/2 left-1/2 rounded-full border-4 border-[#0a1a4f] w-48 h-48 md:w-64 md:h-64
           transform -translate-x-1/2 -translate-y-1/2"
  ></div>
</div>

        <div class="max-w-md text-[#0a1a4f] font-extrabold text-2xl md:text-3xl leading-snug">
            Payment successful,
            <br />
            please enjoy Liturtara services
            <button class="mt-8 bg-[#0a1a4f] text-white px-5 py-2 rounded-md text-sm font-semibold flex items-center space-x-2 hover:bg-[#08143a] transition" type="button">
                <i class="fas fa-arrow-left">
                </i>
                <span>
                    Back
                </span>
            </button>
        </div>
    </main>
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

        <script>
            document.getElementById("menu-toggle").addEventListener("click", function() {
                document.getElementById("menu").classList.toggle("hidden");
            });

            const cardContainer = document.getElementById("card-container");
            const prevButton = document.getElementById("prevPage");
            const nextButton = document.getElementById("nextPage");
            const pageInfo = document.getElementById("pageNumber");

            const totalCards = 30;
            const cardsPerPage = 6;
            let currentPage = 1;
            const totalPages = Math.ceil(totalCards / cardsPerPage); // Total halaman

            function generateCards() {
                cardContainer.innerHTML = "";
                let start = (currentPage - 1) * cardsPerPage;
                let end = start + cardsPerPage;
                for (let i = start; i < end && i < totalCards; i++) {
                    let card = `<div class="bg-white rounded-lg shadow-md p-4 relative">
                    <span class="absolute top-2 right-2 bg-blue-700 text-white px-2 py-1 text-xs rounded">Tersedia</span>
                    <h2 class="text-lg font-bold text-blue-900">Masalah ${i + 1}</h2>
                    <p class="text-gray-600 text-sm">Kategori: Acak</p>
                    <p class="text-gray-500 text-xs mt-1">User - ${i + 1} Oktober 2024</p>
                    <button class="bg-red-700 text-white px-4 py-2 rounded-md mt-2">Hapus X</button>
                    <button class="bg-blue-700 text-white px-4 py-2 rounded-md mt-2">Lihat →</button>
                </div>`;
                    cardContainer.innerHTML += card;
                }

                // Update teks halaman
                pageInfo.textContent = `Halaman ${currentPage} dari ${totalPages}`;

                // Disable tombol jika di halaman pertama atau terakhir
                prevButton.disabled = currentPage === 1;
                nextButton.disabled = currentPage === totalPages;
            }

            prevButton.addEventListener("click", () => {
                if (currentPage > 1) {
                    currentPage--;
                    generateCards();
                }
            });

            nextButton.addEventListener("click", () => {
                if (currentPage < totalPages) {
                    currentPage++;
                    generateCards();
                }
            });

            generateCards();
        </script>
</body>

</html>