<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Case - Liturtara</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
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
            <a href="#" id="notifButton">
                <button class="text-black-700 px-2 py-2 rounded-md hover:text-blue-700">
                    <i class="fas fa-bell h-6 w-6"></i>
                </button>
            </a>

            <!-- Popup Notifikasi -->
            <div id="notifOverlay" class="hidden fixed inset-0 bg-black bg-opacity-10 backdrop-blur-sm z-40 flex items-start justify-center">
                <div class="bg-white rounded-lg shadow-xl w-80 relative z-50">
                    <div class="p-4 border-b font-semibold text-gray-700 flex justify-between items-center">
                        Notification
                        <button id="closeNotif" class="text-gray-500 hover:text-red-600 text-xl font-bold">&times;</button>
                    </div>
                    <ul class="max-h-64 overflow-y-auto">
                        <li class="p-3 text-sm text-black-600 border-b hover:bg-gray-100">
                            Case data is incomplete
                            <span class="block text-xs text-gray-400" data-time="2025-05-05T12:00:00Z"></span>
                        </li>
                        <li class="p-3 text-sm text-black-600 border-b hover:bg-gray-100">
                            A solution has been provided
                            <span class="block text-xs text-gray-400" data-time="2025-05-04T09:30:00Z"></span>
                        </li>
                        <li class="p-3 text-sm text-black-600 border-b hover:bg-gray-100">
                            Case has been taken over
                            <span class="block text-xs text-gray-400" data-time="2025-05-02T15:00:00Z"></span>
                        </li>
                        <li class="p-3 text-sm text-black-600 border-b hover:bg-gray-100">
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
                    document.getElementById('notifOverlay').classList.toggle('hidden');
                });

                document.getElementById('closeNotif').addEventListener('click', function() {
                    document.getElementById('notifOverlay').classList.add('hidden');
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

    <!-- Hero Section -->
    <div class="relative w-full h-80 bg-cover bg-center mt-10" style="background-image: url('/storage/bgco1.png');">
        <div class="absolute inset-0 bg-black bg-opacity-30 flex items-end px-8 pb-6">
            <div class="text-white">
                <h1 class="text-3xl font-bold">Layanan Case Owner</h1>
                <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
            </div>
        </div>
    </div>

    <!-- Form Wrapper -->
    <div class="container mx-auto my-8 p-6 bg-white rounded-lg shadow-md">
        <form action="{{ route('casepub.step1') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- STEP 1 -->
            <div id="step1" class="step">
                @include('caseowner.casepub.step1')
            </div>

            <!-- STEP 2 -->
            <div id="step2" class="step hidden">
                @include('caseowner.casepub.step2')
            </div>

            <!-- STEP 3 -->
            <div id="step3" class="step hidden">
                @include('caseowner.casepub.step3')
            </div>

            <!-- STEP 4 -->
            <div id="step4" class="step hidden">
                @include('caseowner.casepub.step4')
            </div>

            <div id="upload" class="step hidden">
                @include('caseowner.casepub.uploadDocument')
            </div>

        </form>
    </div>

    <!-- Footer -->
    <footer class="bg-[#00114F] text-white py-10 px-4 md:px-16">
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-4 gap-8">

            <!-- Logo, Alamat & Media Sosial -->
            <div>
                <img src="{{ asset('storage/liturtarawhite.svg') }}" alt="Liturtara Logo" class="h-12">
                <p class="text-sm mt-3">
                    PT. Literasi Jaya Nusantara
                </p>
                <p class="text-sm mt-1">Email: info@liturtara.com</p>
                <p class="text-sm mt-1">Phone: +62 812-3456-7890</p>

                <!-- Media Sosial -->
                <div class="flex space-x-4 mt-4">
                    <a href="#" class="text-gray-300 hover:text-white text-2xl"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="text-gray-300 hover:text-white text-2xl"><i class="fab fa-twitter"></i></a>
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

    <!-- JavaScript -->
    <script>
        // Burger menu toggle for mobile
        document.getElementById("menu-toggle").addEventListener("click", function() {
            const mobileMenu = document.getElementById("mobile-menu");
            mobileMenu.classList.toggle("hidden");
        });

        let currentStep = 1;
        const totalSteps = 4;

        function showStep(step) {
            // Hide all steps
            document.querySelectorAll('.step').forEach((el) => el.classList.add('hidden'));
            // Show current step
            document.getElementById('step' + step).classList.remove('hidden');

            // Change button text to "Submit" on the last step
            document.querySelectorAll('.nextBtn').forEach(btn => {
                if (step === totalSteps) {
                    btn.textContent = "Submit";
                    btn.type = "submit";
                } else {
                    btn.textContent = "Next";
                    btn.type = "button";
                }
            });
        }

        function nextStep() {
            if (currentStep < totalSteps) {
                currentStep++;
                showStep(currentStep);
            }
        }

        function prevStep() {
            if (currentStep > 1) {
                currentStep--;
                showStep(currentStep);
            }
        }

        // Add event listener to "Next" buttons
        document.querySelectorAll('.nextBtn').forEach(btn => {
            btn.addEventListener('click', nextStep);
        });

        // Add event listener to "Prev" buttons
        document.querySelectorAll('.prevBtn').forEach(btn => {
            btn.addEventListener('click', prevStep);
        });

        // Show the first step when the page loads
        document.addEventListener('DOMContentLoaded', () => {
            showStep(currentStep);
        });
    </script>

</body>

</html>