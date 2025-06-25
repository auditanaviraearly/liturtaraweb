<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>CV & Certificate</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap');

        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>

<body class="bg-white text-[#0B1B4D] min-h-screen">

    <!-- Navbar at the top -->
    @include('navbartr')

    <!-- Layout: Sidebar and Main Content -->
    <div class="mt-20 flex">
        <!-- Sidebar -->
        <aside class=" w-64 bg-white shadow-md min-h-screen p-6">
            <nav class="space-y-4">
                <a href="{{ route('accounttr') }}" class="block text-gray-700 hover:text-blue-700">Profile</a>
                <a href="{{ route('cv') }}"
                    class="block font-semibold text-white bg-blue-900 px-4 py-2 rounded-lg">CV & Certification</a>
                <a href="#" class="block text-gray-700 hover:text-blue-700">Project</a>
                <a href="#" class="block text-gray-700 hover:text-blue-700">Favorite</a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="block text-red-600 hover:text-red-800">
                        Logout →
                    </button>
                </form>
            </nav>
        </aside>

        <!-- Main content -->
        <main class="flex-1 p-8 max-w-5xl">
            <h1 class="text-2xl font-bold"> Profile
                <!-- Profile <span class="bg-blue-500 text-white text-xs px-2 py-1 rounded ml-2">SMEs</span> -->
            </h1>
            <p class="text-lg text-gray-700 mt-1">Talent Researcher</p>

            <div class="bg-white shadow-md rounded-lg p-6 mt-4">
                <!-- CV Upload -->
                <section class="mb-10 max-w-3xl">
                    <h2 class="text-sm font-semibold mb-3">Curriculum Vitae</h2>
                    <label for="cv-upload"
                        class="cursor-pointer flex flex-col items-center justify-center border-2 border-dashed border-[#0B1B4D] rounded-md py-12 text-center text-xs text-[#0B1B4D]">
                        <i class="fas fa-file-alt text-3xl mb-3"></i>
                        <span class="font-semibold mb-1">Upload Your Curriculum Vitae</span>
                        <span class="text-[9px]">Max File Size 10 Mb, With format pdf, jpg, png</span>
                        <input type="file" id="cv-upload" class="hidden" accept=".pdf,.jpg,.png" />
                    </label>
                </section>

                <!-- Certificate Upload -->
                <section class="mb-10 max-w-3xl">
                    <h2 class="text-sm font-semibold mb-3">Certificate</h2>
                    <label for="certificate-upload"
                        class="cursor-pointer flex flex-col items-center justify-center border-2 border-dashed border-[#0B1B4D] rounded-md py-12 text-center text-xs text-[#0B1B4D]">
                        <i class="fas fa-file-alt text-3xl mb-3"></i>
                        <span class="font-semibold mb-1">Upload Your Certificate</span>
                        <span class="text-[9px]">Max File Size 15 Mb, With format pdf, jpg, png</span>
                        <input type="file" id="certificate-upload" class="hidden" accept=".pdf,.jpg,.png" />
                    </label>
                </section>

                <button class="bg-[#0B1B4D] text-white text-xs font-semibold rounded px-4 py-2">Save Changes</button>
            </div>
        </main>
    </div>

    @include('bottom')
</body>

</html>
