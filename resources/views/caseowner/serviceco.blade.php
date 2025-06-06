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

@include('navbar')

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
    <a href="#" class="px-4 py-2 text-gray-500">Talent Researcher</a>
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

        <!-- Hero Section -->
        <div class="relative w-full h-64 bg-cover bg-center" style="background-image: url('/storage/booklibrary.png');">
            <div class="absolute inset-0 bg-black bg-opacity-30 flex flex-col justify-end px-8 pb-6">
                <div class="text-white">
                    <h1 class="text-3xl font-bold">
                        The future of your business, <br>
                        starts with Liturtara
                    </h1>
                    <p class="text-sm mt-2">
                        Lorem ipsum dolor sit amet, consectetur adipiscing
                    </p>
                    <a href="{{ route('servicetr') }}">
                        <button class="mt-4 bg-[#1fc92b] text-white px-6 py-2 rounded-md hover:bg-[#4aea56]">
                            Contact Now →
                        </button>
                    </a>
                </div>
            </div>
        </div>
@include('bottom')

</body>
</html>