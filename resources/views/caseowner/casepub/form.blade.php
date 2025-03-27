<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Case - Liturtara</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <!-- Navbar -->
    <nav class="bg-white shadow-md py-4 px-6 flex justify-between items-center">
        <div class="flex items-center space-x-3">
            <img src="{{ asset('storage/liturtaralogo.svg') }}" alt="Liturtara Logo" class="h-8">
        </div>
        <div class="flex space-x-6 justify-start hidden md:flex">
            <a href="#" class="text-gray-700 hover:text-blue-700">Home</a>
            <a href="#" class="text-gray-700 hover:text-blue-700">Service</a>
            <a href="#" class="text-gray-700 hover:text-blue-700">Contact Us</a>
            <a href="{{ route('accountco') }}">
                <button class="border border-blue-700 text-blue-700 px-4 py-2 rounded-md hover:bg-blue-700 hover:text-white">
                    Account
                </button>
            </a>
        </div>

        <!-- Burger Menu (Mobile) -->
        <button id="menu-toggle" class="md:hidden text-gray-700 focus:outline-none">
            <i class="fas fa-bars text-2xl"></i>
        </button>

        <!-- Mobile Navigation -->
        <div id="mobile-menu" class="hidden absolute top-16 right-0 bg-white w-48 p-4 space-y-4 rounded-md shadow-lg">
            <a href="#" class="text-gray-700 hover:text-blue-700">Home</a>
            <a href="#" class="text-gray-700 hover:text-blue-700">Service</a>
            <a href="#" class="text-gray-700 hover:text-blue-700">Contact Us</a>
            <a href="{{ route('accountco') }}">
                <button class="border border-blue-700 text-blue-700 px-4 py-2 rounded-md hover:bg-blue-700 hover:text-white">
                    Account
                </button>
            </a>
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
        <form action="{{ route('submit_case') }}" method="POST" enctype="multipart/form-data">
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
