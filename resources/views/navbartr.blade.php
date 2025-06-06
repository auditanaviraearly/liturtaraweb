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
            <a href="{{ route('tkntopup') }}">
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
            <a href="{{ route('accounttr') }}">
                <button class="border border-[#0B1B4D] text-[#0B1B4D] px-4 py-2 rounded-md hover:bg-[#0B1B4D] hover:text-white">
                    Account
                </button>
            </a>

            <!-- Tombol Burger Menu (Mobile) -->
            <button id="menu-toggle" class="md:hidden text-gray-700 focus:outline-none">
                <i class="fas fa-bars text-2xl"></i>
            </button>
        </div>

    </nav>