<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Liturtara Dashboard</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>

<body class="bg-gray-100 min-h-screen flex flex-col">

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


  <!-- Toggle Menu Script -->
  <script>
    document.getElementById("menu-toggle").addEventListener("click", function() {
      let menu = document.getElementById("menu");
      menu.classList.toggle("hidden");
      menu.classList.toggle("flex");
      menu.classList.toggle("flex-col");
    });

    document.getElementById("dropdownButton").addEventListener("click", function(event) {
      event.stopPropagation();
      document.getElementById("dropdownMenu").classList.toggle("hidden");
    });

    document.addEventListener("click", function(event) {
      const dropdown = document.getElementById("dropdownMenu");
      const button = document.getElementById("dropdownButton");
      if (!dropdown.contains(event.target) && !button.contains(event.target)) {
        dropdown.classList.add("hidden");
      }
    });
  </script>

  <!-- Hero Section -->
  <div class="relative w-full h-80 bg-cover bg-center mt-10" style="background-image: url('/storage/bgco1.png');">
    <div class="absolute inset-0 bg-black bg-opacity-30 flex items-end px-8 pb-6">
      <div class="text-white">
        <h1 class="text-3xl font-bold">Layanan Case Owner</h1>
        <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
      </div>
    </div>
  </div>

  <!-- Tab Navigasi -->
  <div class="flex border-b px-8 mt-4">
    <a href="#" class="px-4 py-2 font-semibold border-b-2 border-blue-700">Case Owner</a>
    <a href="talent/servicetr" class="px-4 py-2 text-gray-500">Talent Researcher</a>
  </div>

  <!-- Upload Section -->
  <div class="bg-green-500 text-white p-6 rounded-lg mx-8 mt-6 flex justify-between items-center">
    <p class="text-lg font-semibold">Upload masalah Anda, kami akan memberikan solusi</p>
    <div class="flex space-x-4">
      <button class="bg-white text-green-600 px-4 py-2 rounded-md">Unduh Template</button>
      <a href="{{ route('caseowner.casepub.form') }}" class="bg-blue-700 text-white px-4 py-2 rounded-md inline-block text-center">
        Upload Masalah
      </a>
    </div>
  </div>

  <!-- Content Section -->
  <div class="flex flex-col md:flex-row px-8 mt-6 gap-6">
    <!-- Sidebar -->
    <aside class="w-full md:w-1/4 bg-white p-4 rounded-lg shadow-md">
      <ul class="space-y-2">
        <li class="bg-blue-700 text-white p-2 rounded-md">Issue Sent</li>
        <li class="p-2 text-gray-700 hover:bg-gray-200 rounded-md">Issue Approved</li>
        <li class="p-2 text-gray-700 hover:bg-gray-200 rounded-md">Issue In Process</li>
        <li class="p-2 text-gray-700 hover:bg-gray-200 rounded-md">Issue Reviewed</li>
        <li class="p-2 text-gray-700 hover:bg-gray-200 rounded-md">Issue Resolved</li>
        <li class="p-2 text-gray-700 hover:bg-gray-200 rounded-md">Issue Rejected</li>
      </ul>
    </aside>

    <!-- Main Content -->
    <div class="w-full md:w-3/4">
      <div id="card-container" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-4"></div>

      <div class="flex justify-between items-center bg-white shadow-md p-4 mt-6">
        <button id="prevPage" class="text-blue-700 font-semibold px-4 py-2">← Back</button>
        <span id="pageNumber" class="text-gray-700">Page 1 dari X</span>
        <button id="nextPage" class="text-blue-700 font-semibold px-4 py-2">Next →</button>
      </div>
    </div>
  </div>

  <!-- Additional Hero Section -->
  <div class="relative w-full h-64 bg-cover bg-center mt-6" style="background-image: url('/storage/booklibrary.png');"></div>

  <!-- Footer -->
  <footer class="bg-[#00114F] text-white py-20 px-16 mt-10">
    <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
      <div>
        <img src="{{ asset('storage/liturtarawhite.svg') }}" alt="Liturtara Logo" class="h-12">
        <p class="text-sm mt-3">PT. Literasi Jaya Nusantara</p>
        <p class="text-sm">Email: info@liturtara.com</p>
        <p class="text-sm">Phone: +62 812-3456-7890</p>
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

  <!-- Card Generator Script -->
  <script>
    const cardContainer = document.getElementById("card-container");
    const pageInfo = document.getElementById("pageNumber");
    const prevPageBtn = document.getElementById("prevPage");
    const nextPageBtn = document.getElementById("nextPage");

    const totalCards = 30;
    const cardsPerPage = 6;
    const statusList = ["Sent", "Approved", "In Process", "Review", "Completed", "Rejected"];
    let currentPage = 1;
    let currentFilter = "all";
    const totalPages = Math.ceil(totalCards / cardsPerPage);

    function generateCards() {
      cardContainer.innerHTML = "";
      let filteredCards = [];

      for (let i = 0; i < totalCards; i++) {
        let randomStatus = statusList[i % statusList.length];
        if (currentFilter === "all" || currentFilter === randomStatus) {
          filteredCards.push({ id: i + 1, status: randomStatus });
        }
      }

      const start = (currentPage - 1) * cardsPerPage;
      const end = start + cardsPerPage;
      const cardsToShow = filteredCards.slice(start, end);

      cardsToShow.forEach(card => {
        cardContainer.innerHTML += `
          <div class="bg-white rounded-lg shadow-md p-4 relative" data-status="${card.status}">
            <span class="absolute top-2 right-2 px-2 py-1 text-xs rounded ${
              card.status === "Sent" ? "bg-blue-500" :
              card.status === "Approve" ? "bg-green-500" :
              card.status === "In Progress" ? "bg-yellow-500" :
              card.status === "Review" ? "bg-gray-500" :
              card.status === "Completed" ? "bg-green-700" : "bg-red-500"
            } text-white">${card.status}</span>

            <div class="flex flex-col justify-center items-start mt-6 mb-10">
              <h2 class="text-lg font-bold text-blue-900">Issue ${card.id}</h2>
              <p class="text-gray-600 text-sm mt-1">Category: ??</p>
              <p class="text-gray-500 text-xs mt-1">User - ${card.id} Oktober 2024</p>
            </div>

            <div class="absolute bottom-2 left-2 bg-gray-300 bg-opacity-50 text-gray-700 text-xs px-2 py-1 rounded">
              29 April 2025
            </div>
            
            <a href="{{ route('detail', ['id']) }}">
                <button class="absolute bottom-2 right-2 bg-blue-700 text-white text-sm font-semibold px-3 py-1 rounded hover:bg-blue-800 transition">
                    View →
                </button>
            </a>


          </div>
        `;
      });

      pageInfo.textContent = `Page ${totalPages === 0 ? 0 : currentPage} to ${totalPages}`;
      prevPageBtn.disabled = currentPage === 1;
      nextPageBtn.disabled = currentPage === totalPages || totalPages === 0;
    }

    function changePage(step) {
      currentPage += step;
      generateCards();
    }

    prevPageBtn.addEventListener("click", () => changePage(-1));
    nextPageBtn.addEventListener("click", () => changePage(1));

    document.querySelectorAll("aside ul li").forEach(item => {
      item.addEventListener("click", function() {
        currentFilter = this.textContent.trim();
        currentPage = 1;
        generateCards();
        highlightActiveMenu(this);
      });
    });

    function highlightActiveMenu(activeItem) {
      document.querySelectorAll("aside ul li").forEach(item => {
        item.classList.remove("bg-blue-700", "text-white");
        item.classList.add("text-gray-700", "hover:bg-gray-200");
      });
      activeItem.classList.add("bg-blue-700", "text-white");
    }

    generateCards();
  </script>

</body>
</html>