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
    @include('navbartr')
    <!-- Main content -->
    <main class="flex-grow max-w-[1200px] mx-auto w-full px-6 py-12 flex flex-col md:flex-row items-center justify-center gap-12">
        <div class="relative flex justify-center items-center w-64 h-64 md:w-80 md:h-80">
            <img
                class="relative z-10 w-64 h-64 md:w-80 md:h-80 object-cover rounded-md"
                height="320"
                src="Group 678.png"
                width="320"
                alt="Thankful Image" />

            <div
                class="absolute top-1/2 left-1/2 rounded-full border-4 border-[#0a1a4f] w-64 h-64 md:w-80 md:h-80
           transform -translate-x-1/2 -translate-y-1/2"></div>

            <div
                class="absolute top-1/2 left-1/2 rounded-full border-4 border-[#2a7a2a] w-56 h-56 md:w-72 md:h-72
           transform -translate-x-1/2 -translate-y-1/2"></div>

            <div
                class="absolute top-1/2 left-1/2 rounded-full border-4 border-[#0a1a4f] w-48 h-48 md:w-64 md:h-64
           transform -translate-x-1/2 -translate-y-1/2"></div>
        </div>

        <div class="max-w-md text-[#0a1a4f] font-extrabold text-2xl md:text-3xl leading-snug">
            Thank you for
            <br />
            take the case
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