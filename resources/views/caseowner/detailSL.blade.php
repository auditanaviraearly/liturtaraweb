<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>Liturtara</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet" />
</head>

<body class="bg-gradient-to-r from-[#e6f0f9] via-[#f0f9f4] to-[#e9f7d9] flex flex-col min-h-screen">
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

                document.querySelectorAll('[data-time]').forEach(function(element) {
                    const date = new Date(element.getAttribute('data-time'));
                    element.textContent = timeAgo(date);
                });

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
            <div class="bg-white rounded-xl shadow-lg max-w-xs w-full max-h-[400px] relative">
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
            <div class="flex-1 max-w-3xl">
                <h1 class="text-[#0C1E5B] font-extrabold text-xl mb-1">
                    Solution List
                </h1>
                <div class="flex justify-between text-xs text-[#1E293B]/70 font-normal mb-3 border-b border-[#1E293B]/10 pb-1">
                    <span>
                        3 Talent Submitting draft for client issues
                    </span>
                    <span>
                        Back
                    </span>
                </div>
                <div class="flex items-center gap-3 text-xs text-[#1E293B]/70 font-normal mb-6">
                    <div class="relative inline-block text-left">
                        <button id="dropdownButton" class="flex items-center gap-1 bg-gray-200 text-gray-700 px-4 py-2 rounded-md hover:bg-gray-300 focus:outline-none">
                            Latest Date
                            <i class="fas fa-chevron-down"></i>
                        </button>

                        <div id="dropdownMenu" class="absolute mt-2 w-48 bg-white border border-gray-200 rounded-md shadow-lg opacity-0 invisible transition-all duration-200">
                            <ul class="py-1 text-gray-700">
                                <li class="px-4 py-2 hover:bg-gray-100 cursor-pointer">Latest Date</li>
                                <li class="px-4 py-2 hover:bg-gray-100 cursor-pointer">Earliest Date</li>
                                <li class="px-4 py-2 hover:bg-gray-100 cursor-pointer">Talent Category</li>
                            </ul>
                        </div>
                    </div>

                    <script>
                        const button = document.getElementById('dropdownButton');
                        const menu = document.getElementById('dropdownMenu');

                        button.addEventListener('click', () => {
                            menu.classList.toggle('opacity-0');
                            menu.classList.toggle('invisible');
                        });

                        document.addEventListener('click', (e) => {
                            if (!button.contains(e.target)) {
                                menu.classList.add('opacity-0', 'invisible');
                            }
                        });
                    </script>

                    <button>
                        <i class="fas fa-search">
                        </i>
                    </button>
                </div>
                <!-- Solution Items -->
                <div class="space-y-6">
                    <!-- Item 1 -->
                    <div class="bg-white rounded-lg shadow-[0_10px_20px_rgba(0,0,0,0.05)] p-5 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                        <div class="flex-1">
                            <div class="flex justify-between items-start">
                                <h2 class="font-semibold text-[#0C1E5B] text-sm leading-tight max-w-[70%]">
                                    Lorem ipsum dolor sit amet
                                </h2>
                                <span class="text-[10px] text-[#1E293B]/70 pt-1">
                                    15 Desember 2025
                                </span>
                            </div>
                            <div class="mt-1 text-[10px] text-[#1E293B]/90 font-normal">
                                Submitted by
                                <span class="font-semibold block">
                                    Muhammad Patel
                                </span>
                            </div>
                            <div class="flex items-center gap-1 mt-1 text-yellow-400 text-[10px]">
                                <i class="fas fa-star">
                                </i>
                                <i class="fas fa-star">
                                </i>
                                <i class="fas fa-star">
                                </i>
                                <i class="fas fa-star">
                                </i>
                                <i class="fas fa-star-half-alt">
                                </i>
                                <span class="text-[#1E293B]/50 ml-1">
                                    (7)
                                </span>
                            </div>
                            <a class="text-[9px] text-[#1E293B] underline mt-1 inline-block" href="#">
                                View Talent Profile
                            </a>
                        </div>
                        <div class="flex gap-2 flex-wrap sm:flex-nowrap">
                            <button onClick="openReportModal()" class="text-[10px] border border-red-600 text-red-600 rounded px-3 py-1 hover:bg-red-50 transition">
                                Report
                            </button>
                            <button class="text-[10px] border border-[#1E293B]/20 text-[#1E293B]/90 bg-white rounded px-3 py-1 hover:bg-[#F4F7FF] transition">
                                Draft
                            </button>
                            <button class="text-[10px] bg-[#0C1E5B] text-white rounded px-3 py-1 flex items-center gap-1 hover:bg-[#0a1740] transition">
                                Approve Solution
                                <i class="fas fa-check">
                                </i>
                            </button>
                        </div>
                    </div>
                    <!-- Item 2 -->
                    <div class="bg-white rounded-lg shadow-[0_10px_20px_rgba(0,0,0,0.05)] p-5 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                        <div class="flex-1">
                            <div class="flex justify-between items-start">
                                <h2 class="font-semibold text-[#0C1E5B] text-sm leading-tight max-w-[70%]">
                                    Consectetur adipiscing elit
                                </h2>
                                <span class="text-[10px] text-[#1E293B]/70 pt-1">
                                    11 Desember 2025
                                </span>
                            </div>
                            <div class="mt-1 text-[10px] text-[#1E293B]/90 font-normal">
                                Submitted by
                                <span class="font-semibold block">
                                    Edi Androdi
                                </span>
                            </div>
                            <div class="flex items-center gap-1 mt-1 text-yellow-400 text-[10px]">
                                <i class="fas fa-star">
                                </i>
                                <i class="fas fa-star">
                                </i>
                                <i class="fas fa-star">
                                </i>
                                <i class="fas fa-star">
                                </i>
                                <i class="fas fa-star-half-alt">
                                </i>
                                <span class="text-[#1E293B]/50 ml-1">
                                    (6)
                                </span>
                            </div>
                            <a class="text-[9px] text-[#1E293B] underline mt-1 inline-block" href="#">
                                View Talent Profile
                            </a>
                        </div>
                        <div class="flex gap-2 flex-wrap sm:flex-nowrap">
                            <button onclick="openReportModal()"
                                class="text-[10px] border border-red-600 text-red-600 rounded px-3 py-1 hover:bg-red-50 transition">
                                Report
                            </button>
                            <button class="text-[10px] border border-[#1E293B]/20 text-[#1E293B]/90 bg-white rounded px-3 py-1 hover:bg-[#F4F7FF] transition">
                                Draft
                            </button>
                            <button class="text-[10px] bg-[#0C1E5B] text-white rounded px-3 py-1 flex items-center gap-1 hover:bg-[#0a1740] transition">
                                Approve Solution
                                <i class="fas fa-check">
                                </i>
                            </button>
                        </div>
                    </div>
                    <!-- Item 3 -->
                    <div class="bg-white rounded-lg shadow-[0_10px_20px_rgba(0,0,0,0.05)] p-5 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                        <div class="flex-1">
                            <div class="flex justify-between items-start">
                                <h2 class="font-semibold text-[#0C1E5B] text-sm leading-tight max-w-[70%]">
                                    Sed do eiusmod tempor incididunt
                                </h2>
                                <span class="text-[10px] text-[#1E293B]/70 pt-1">
                                    06 Desember 2025
                                </span>
                            </div>
                            <div class="mt-1 text-[10px] text-[#1E293B]/90 font-normal">
                                Submitted by
                                <span class="font-semibold block">
                                    Adi Mulyadi
                                </span>
                            </div>
                            <div class="flex items-center gap-1 mt-1 text-yellow-400 text-[10px]">
                                <i class="fas fa-star">
                                </i>
                                <i class="fas fa-star">
                                </i>
                                <i class="fas fa-star">
                                </i>
                                <i class="fas fa-star">
                                </i>
                                <i class="fas fa-star-half-alt">
                                </i>
                                <span class="text-[#1E293B]/50 ml-1">
                                    (6)
                                </span>
                            </div>
                            <a class="text-[9px] text-[#1E293B] underline mt-1 inline-block" href="#">
                                View Talent Profile
                            </a>
                        </div>
                        <div class="flex gap-2 flex-wrap sm:flex-nowrap">
                            <button onclick="openReportModal()"
                                class="text-[10px] border border-red-600 text-red-600 rounded px-3 py-1 hover:bg-red-50 transition">
                                Report
                            </button>
                            <button class="text-[10px] border border-[#1E293B]/20 text-[#1E293B]/90 bg-white rounded px-3 py-1 hover:bg-[#F4F7FF] transition">
                                Draft
                            </button>
                            <button class="text-[10px] bg-[#0C1E5B] text-white rounded px-3 py-1 flex items-center gap-1 hover:bg-[#0a1740] transition">
                                Approve Solution
                                <i class="fas fa-check">
                                </i>
                            </button>
                        </div>
                    </div>
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

    <!-- Modal Report -->
    <div id="reportOverlay"
        class="hidden fixed inset-0 bg-black bg-opacity-30 backdrop-blur-sm flex justify-center items-center z-50">
        <div class="bg-white w-3/4 md:w-1/2 lg:w-1/3 p-6 rounded-lg shadow-lg relative">
            <button onclick="closeReportModal()"
                class="absolute top-2 right-3 text-gray-500 hover:text-red-600 text-2xl">&times;</button>

            <h2 class="text-center text-xl font-bold mb-4 text-[#00114F]">Report</h2>

            <div class="space-y-4 text-sm text-gray-600">
                <p class="text-center font-bold">Why are you reporting this solution?</p>

                <div class="space-y-2">
                    <div class="space-y-2 text-sm text-gray-700">
                        <p>The solution provided does not match the problem described.</p>
                        <p>The solution contains inappropriate content.</p>
                        <p>The solution is spam or promotional content.</p>
                    </div>

                    <label class="flex items-center gap-2 text-sm text-gray-700">
                        <input type="checkbox" name="reportReason" value="Other" id="otherReason" class="form-checkbox text-red-600" onclick="toggleOtherInput()">
                        Other Report
                    </label>
                    
                </div>

                <textarea id="otherInput"
                    class="hidden w-full p-2 border border-gray-300 rounded-md"
                    placeholder="Please specify your reason..."></textarea>

                <button onclick="submitReport()"
                    class="bg-red-600 text-white px-4 py-2 rounded-md hover:bg-red-700 focus:outline-none w-full">
                    Report
                </button>
            </div>
        </div>
    </div>

    <script>
        // Open Modal
        function openReportModal() {
            document.getElementById('reportOverlay').classList.remove('hidden');
        }

        // Close Modal
        function closeReportModal() {
            document.getElementById('reportOverlay').classList.add('hidden');
        }

        // Toggle 'Other' Input
        function toggleOtherInput() {
            const otherInput = document.getElementById('otherInput');
            otherInput.classList.toggle('hidden');
        }

        // Submit Report
        function submitReport() {
            const selectedReason = document.querySelector('input[name="reportReason"]:checked');
            const otherText = document.getElementById('otherInput').value;

            if (!selectedReason) {
                alert('Please select a reason for reporting.');
                return;
            }

            const reportData = {
                reason: selectedReason.value,
                details: selectedReason.value === 'Other' ? otherText : null
            };

            console.log(reportData); // Data yang akan dikirim ke backend

            // Tutup modal setelah submit
            closeReportModal();
            alert('Your report has been submitted.');
        }
    </script>

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