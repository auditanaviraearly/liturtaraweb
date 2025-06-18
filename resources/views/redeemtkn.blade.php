<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>
        Liturtara Payment Success & Profile Points
    </title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&amp;display=swap" rel="stylesheet" />
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        /* For the banner text overlay */
        .banner-text {
            position: absolute;
            bottom: 1.5rem;
            left: 1.5rem;
            color: #0B1B4D;
            font-weight: 800;
            text-shadow: 0 0 4px rgba(255, 255, 255, 0.8);
        }

        /* Card hover and active effect */
        .point-card {
            cursor: pointer;
            transition: transform 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }

        .point-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
        }

        .point-card:active {
            transform: translateY(0);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body class="bg-gradient-to-r from-[#e9efff] via-[#f0f5ff] to-[#d9f0c6] min-h-screen flex flex-col">
    @include('navbartr')

    <main class="flex-grow max-w-7xl mx-auto p-6 w-full">
        <!-- Profile Header -->
        <div class="mb-6">
            <div class="flex items-center space-x-2">
                <h2 class="font-extrabold text-lg text-[#0B1B4D]">
                    Profil
                </h2>
                <span class="text-xs font-semibold bg-[#0B1B4D] text-white rounded px-2 py-[2px]">
                    Junior Researcher
                </span>
            </div>
            <p class="text-xs font-semibold text-[#0B1B4D] mt-1">
                Talent Researcher
            </p>
        </div>
        <!-- Profile Info -->
        <div class="flex flex-col sm:flex-row sm:items-center sm:space-x-6 mb-6">
            <img src="{{ asset('storage/ppcowo.png') }}"
                alt="Profile Picture"
                class="w-24 h-24 rounded-sm object-cover flex-shrink-0" />

            <div class="mt-3 sm:mt-0">
                <p class="text-xs text-gray-600 font-normal">
                    John Doe
                </p>
                <div class="flex items-center space-x-1 mt-1">
                    <img alt="Point icon" src="{{ asset('storage/icontkn.png') }}" class="w-4 h-4" width="16" height="16" />
                    <span class="text-xs text-gray-500 font-normal">
                        1000 point
                    </span>
                </div>
                <div class="flex items-center space-x-0.5 mt-1 text-yellow-400 text-sm">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt text-gray-300"></i>
                    <span class="text-xs text-gray-400 font-normal ml-1">
                        (4)
                    </span>
                </div>
            </div>
        </div>
        <!-- Banner -->
        <div class="relative w-full h-80 bg-cover bg-center mt-6 mb-6 rounded-lg overflow-hidden shadow-md"
            style="background-image: url('/storage/gambar2.png');">

            <div class="absolute inset-0 bg-black bg-opacity-30 flex items-end px-8 pb-6">
                <div class="text-white">
                    <h1 class="text-3xl font-bold">Layanan Talent Researcher</h1>
                    <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                </div>
            </div>
        </div>
        <!-- Points Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 mb-12">
            <!-- Repeat these cards with point-card class and data attributes -->
            <div class="bg-white rounded-lg shadow-lg p-4 point-card" data-price="Rp.50,000" data-points="50">
                <p class="text-xs font-normal text-gray-700 border-b border-gray-200 pb-2 mb-2">
                    Rp.50,000
                </p>
                <div class="flex items-center space-x-2 text-xs text-gray-500">
                    <img alt="Point icon" src="{{ asset('storage/icontkn.png') }}" class="w-4 h-4" width="16" height="16" />

                    <span>
                        50 point
                    </span>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-lg p-4 point-card" data-price="Rp.100,000" data-points="100">
                <p class="text-xs font-normal text-gray-700 border-b border-gray-200 pb-2 mb-2">
                    Rp.100,000
                </p>
                <div class="flex items-center space-x-2 text-xs text-gray-500">
                    <img alt="Point icon" src="{{ asset('storage/icontkn.png') }}" class="w-4 h-4" width="16" height="16" />
                    <span>
                        100 point
                    </span>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-lg p-4 point-card" data-price="Rp.150,000" data-points="150">
                <p class="text-xs font-normal text-gray-700 border-b border-gray-200 pb-2 mb-2">
                    Rp.150,000
                </p>
                <div class="flex items-center space-x-2 text-xs text-gray-500">
                    <img alt="Point icon" src="{{ asset('storage/icontkn.png') }}" class="w-4 h-4" width="16" height="16" />
                    <span>
                        150 point
                    </span>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-lg p-4 point-card" data-price="Rp.200,000" data-points="200">
                <p class="text-xs font-normal text-gray-700 border-b border-gray-200 pb-2 mb-2">
                    Rp.200,000
                </p>
                <div class="flex items-center space-x-2 text-xs text-gray-500">
                    <img alt="Point icon" src="{{ asset('storage/icontkn.png') }}" class="w-4 h-4" width="16" height="16" />
                    <span>
                        200 point
                    </span>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-lg p-4 point-card" data-price="Rp.50,000" data-points="50">
                <p class="text-xs font-normal text-gray-700 border-b border-gray-200 pb-2 mb-2">
                    Rp.250,000
                </p>
                <div class="flex items-center space-x-2 text-xs text-gray-500">
                    <img alt="Point icon" src="{{ asset('storage/icontkn.png') }}" class="w-4 h-4" width="16" height="16" />
                    <span>
                        250 point
                    </span>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-lg p-4 point-card" data-price="Rp.100,000" data-points="100">
                <p class="text-xs font-normal text-gray-700 border-b border-gray-200 pb-2 mb-2">
                    Rp.300,000
                </p>
                <div class="flex items-center space-x-2 text-xs text-gray-500">
                    <img alt="Point icon" src="{{ asset('storage/icontkn.png') }}" class="w-4 h-4" width="16" height="16" />
                    <span>
                        300 point
                    </span>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-lg p-4 point-card" data-price="Rp.150,000" data-points="150">
                <p class="text-xs font-normal text-gray-700 border-b border-gray-200 pb-2 mb-2">
                    Rp.350,000
                </p>
                <div class="flex items-center space-x-2 text-xs text-gray-500">
                    <img alt="Point icon" src="{{ asset('storage/icontkn.png') }}" class="w-4 h-4" width="16" height="16" />
                    <span>
                        350 point
                    </span>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-lg p-4 point-card" data-price="Rp.200,000" data-points="200">
                <p class="text-xs font-normal text-gray-700 border-b border-gray-200 pb-2 mb-2">
                    Rp.400,000
                </p>
                <div class="flex items-center space-x-2 text-xs text-gray-500">
                    <img alt="Point icon" src="{{ asset('storage/icontkn.png') }}" class="w-4 h-4" width="16" height="16" />
                    <span>
                        400 point
                    </span>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-lg p-4 point-card" data-price="Rp.50,000" data-points="50">
                <p class="text-xs font-normal text-gray-700 border-b border-gray-200 pb-2 mb-2">
                    Rp.450,000
                </p>
                <div class="flex items-center space-x-2 text-xs text-gray-500">
                    <img alt="Point icon" src="{{ asset('storage/icontkn.png') }}" class="w-4 h-4" width="16" height="16" />
                    <span>
                        450 point
                    </span>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-lg p-4 point-card" data-price="Rp.100,000" data-points="100">
                <p class="text-xs font-normal text-gray-700 border-b border-gray-200 pb-2 mb-2">
                    Rp.500,000
                </p>
                <div class="flex items-center space-x-2 text-xs text-gray-500">
                    <img alt="Point icon" src="{{ asset('storage/icontkn.png') }}" class="w-4 h-4" width="16" height="16" />
                    <span>
                        500 point
                    </span>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-lg p-4 point-card" data-price="Rp.150,000" data-points="150">
                <p class="text-xs font-normal text-gray-700 border-b border-gray-200 pb-2 mb-2">
                    Rp.550,000
                </p>
                <div class="flex items-center space-x-2 text-xs text-gray-500">
                    <img alt="Point icon" src="{{ asset('storage/icontkn.png') }}" class="w-4 h-4" width="16" height="16" />
                    <span>
                        550 point
                    </span>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-lg p-4 point-card" data-price="Rp.200,000" data-points="200">
                <p class="text-xs font-normal text-gray-700 border-b border-gray-200 pb-2 mb-2">
                    Rp.600,000
                </p>
                <div class="flex items-center space-x-2 text-xs text-gray-500">
                    <img alt="Point icon" src="{{ asset('storage/icontkn.png') }}" class="w-4 h-4" width="16" height="16" />
                    <span>
                        600 point
                    </span>
                </div>
            </div>
            <!-- Add more cards as needed with same structure and point-card class -->
        </div>

    </main>

    <!-- Modal -->
    <div id="modal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden z-50">
        <div class="bg-white rounded-lg shadow-lg max-w-sm w-full p-6 mx-4">
            <h2 class="text-lg font-semibold mb-4" id="modal-title">Apakah anda ingin membeli token ini?</h2>
            <p class="mb-6" id="modal-info"></p>
            <div class="flex justify-end space-x-4">
                <button id="modal-no" class="px-4 py-2 rounded border border-gray-300 hover:bg-gray-100">Tidak</button>
                <button id="modal-yes" class="px-4 py-2 rounded bg-blue-700 text-white hover:bg-blue-800">Ya</button>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-[#00114F] text-white py-20 px-16 mt-12">
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div>
                <img src="{{ asset('storage/liturtarawhite.svg') }}" alt="Liturtara Logo" class="h-12" />
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
        // Modal elements
        const modal = document.getElementById('modal');
        const modalTitle = document.getElementById('modal-title');
        const modalInfo = document.getElementById('modal-info');
        const modalYes = document.getElementById('modal-yes');
        const modalNo = document.getElementById('modal-no');

        // Store selected token info
        let selectedToken = null;

        // Add click event to all point cards
        document.querySelectorAll('.point-card').forEach(card => {
            card.addEventListener('click', () => {
                const price = card.getAttribute('data-price');
                const points = card.getAttribute('data-points');
                selectedToken = {
                    price,
                    points
                };
                modalInfo.textContent = `Token dengan harga ${price} dan ${points} point.`;
                modal.classList.remove('hidden');
            });
        });

        // Close modal on "Tidak"
        modalNo.addEventListener('click', () => {
            modal.classList.add('hidden');
            selectedToken = null;
        });

        // On "Ya" click, redirect to payment page with query params (example)
        modalYes.addEventListener('click', () => {
            if (selectedToken) {
                // Example redirect URL, adjust as needed
                const url = `/payment?price=${encodeURIComponent(selectedToken.price)}&points=${encodeURIComponent(selectedToken.points)}`;
                window.location.href = url;
            }
        });

        // Optional: close modal if clicking outside modal content
        modal.addEventListener('click', (e) => {
            if (e.target === modal) {
                modal.classList.add('hidden');
                selectedToken = null;
            }
        });
    </script>
</body>

</html>