<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Service Talent</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <style>
        /* Custom scrollbar for filter panel */
        aside::-webkit-scrollbar {
            width: 6px;
        }

        aside::-webkit-scrollbar-thumb {
            background-color: #0B1E5B;
            border-radius: 3px;
        }
    </style>
</head>

<body class="bg-gray-100 min-h-screen flex flex-col">

    @include('navbartr')

    <!-- Hero Section -->
    <div class="relative w-full h-80 bg-cover bg-center mt-10" style="background-image: url('/storage/gambar2.png');">
        <div class="absolute inset-0 bg-black bg-opacity-30 flex items-end px-8 pb-6">
            <div class="text-white">
                <h1 class="text-3xl font-bold">Layanan Talent Researcher</h1>
                <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing</p>
            </div>
        </div>
    </div>

    <!-- Tab Navigasi -->
    <div class="flex border-b px-8">
        <a href="{{ url('servicedtr') }}"
            class="px-4 py-2 font-semibold border-b-2 {{ Request::is('servicetr') ? 'border-blue-700 text-black' : 'border-transparent text-gray-500' }}">
            Case List
        </a>
        <a href="{{ url('#') }}"
            class="px-4 py-2 font-semibold border-b-2 {{ Request::is('#') ? 'border-blue-700 text-black' : 'border-transparent text-gray-500' }}">
            Selection Status
        </a>
    </div>

    <!-- Content Wrapper Left-->
    <div class="bg-[#F7F9FF] text-[#0B1E5B] min-h-screen w-full">
        <div class="max-w-[1200px] px-4 sm:px-6 lg:px-8 pt-6 pb-12 mx-auto">

            <!-- Search Section -->
            <section class="relative w-full max-w-[1200px] h-[250px] bg-cover bg-center" style="background-image: url('/storage/bgtrsearch.png');">
                <div class="relative w-full h-64 bg-cover bg-center flex flex-col items-center justify-center px-4">
                    <h1 class="text-center text-[#0B1E5B] font-semibold text-xl sm:text-2xl mb-6">
                        Find the ones you need!
                    </h1>
                    <form class="w-full max-w-[600px] relative" role="search" aria-label="Search cases">
                        <input type="search" placeholder="Search"
                            class="w-full rounded-md border border-[#D9E0EC] py-3 pl-4 pr-12 text-[#0B1E5B] placeholder-[#7A8BB3] text-sm focus:outline-none focus:ring-2 focus:ring-[#0B1E5B]"
                            aria-label="Search input" />
                        <button type="submit"
                            class="absolute right-2 top-1/2 -translate-y-1/2 bg-[#0B1E5B] text-white rounded-md px-3 py-2 text-sm flex items-center space-x-2 hover:bg-[#091a44] focus:outline-none"
                            aria-label="Search button">
                            <i class="fas fa-search"></i>
                            <span>Search</span>
                        </button>
                    </form>
                </div>
            </section>
        </div>

        <div class="max-w-[1200px] mx-8 px-4 sm:px-6 lg:px-8 pt-6 pb-1 mx-auto">
            <div class="flex flex-col md:flex-row mt-6 gap-6">
                <!-- Filter Panel -->
                <aside class="w-full md:w-1/4 bg-white p-4 rounded-lg shadow-md max-h-[500px] overflow-auto">
                    <h2 class="text-[#0B1E5B] font-semibold text-sm mb-4">Filter</h2>
                    <ul class="space-y-4 text-sm text-[#0B1E5B]">

                        <!-- Category -->
                        <div class="mb-6">
                            <h3 class="text-[#0B1E5B] font-semibold text-xs mb-3">Category</h3>
                            <div class="flex flex-wrap gap-2">
                                <button type="button"
                                    class="text-[#7A8BB3] text-xs font-semibold border border-[#D9E0EC] rounded-md px-3 py-1 hover:border-[#0B1E5B] hover:text-[#0B1E5B] focus:outline-none">
                                    Category
                                </button>
                                <button type="button"
                                    class="text-[#7A8BB3] text-xs font-semibold border border-[#D9E0EC] rounded-md px-3 py-1 hover:border-[#0B1E5B] hover:text-[#0B1E5B] focus:outline-none">
                                    Category
                                </button>
                                <button type="button"
                                    class="text-[#7A8BB3] text-xs font-semibold border border-[#D9E0EC] rounded-md px-3 py-1 hover:border-[#0B1E5B] hover:text-[#0B1E5B] focus:outline-none">
                                    Category
                                </button>
                                <button type="button"
                                    class="text-[#7A8BB3] text-xs font-semibold border border-[#D9E0EC] rounded-md px-3 py-1 hover:border-[#0B1E5B] hover:text-[#0B1E5B] focus:outline-none">
                                    Category
                                </button>
                            </div>
                        </div>

                        <!-- Upload Time -->
                        <li>
                            <h3 class="text-xs font-semibold mb-2">Upload Time</h3>
                            <ul class="space-y-1 text-[#7A8BB3]">
                                <li><label><input type="radio" name="upload-time" class="mr-2" />Last 24 hours</label></li>
                                <li><label><input type="radio" name="upload-time" class="mr-2" />Last 7 days</label></li>
                                <li><label><input type="radio" name="upload-time" class="mr-2" />Last 30 days</label></li>
                            </ul>
                        </li>

                        <!-- Sort -->
                        <li>
                            <h3 class="text-xs font-semibold mb-2">Sort</h3>
                            <ul class="space-y-1 text-[#7A8BB3]">
                                <li><label><input type="radio" name="sort" class="mr-2" />A to Z</label></li>
                                <li><label><input type="radio" name="sort" class="mr-2" />Z to A</label></li>
                            </ul>
                        </li>

                    </ul>

                    <button type="button"
                        class="mt-6 w-full bg-[#0B1E5B] text-white text-xs font-semibold py-2 rounded-md hover:bg-[#091a44]">
                        Next
                    </button>
                </aside>

                <!-- Cards Grid -->
                <main class="flex-1 grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <!-- Card Template Start -->
                    <article
                        class="bg-white rounded-lg shadow-md p-5 flex flex-col justify-between"
                        aria-label="Case card">
                        <div>
                            <div class="flex justify-between items-start mb-3">
                                <h3 class="text-[#0B1E5B] font-semibold text-sm leading-tight max-w-[70%]">
                                    Lorem ipsum dolor sit amet Lorem
                                </h3>
                                <span
                                    class="bg-[#0B1E5B] text-white text-xs font-semibold rounded-md px-2 py-1">Available</span>
                            </div>
                            <p class="text-[#7A8BB3] text-xs mb-3 leading-snug">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                eiusmod tempor
                            </p>
                            <div class="flex flex-wrap gap-2 text-[#7A8BB3] text-xs mb-3">
                                <div class="flex items-center space-x-1">
                                    <i class="fas fa-user"></i>
                                    <span>John Doe</span>
                                </div>
                                <div class="flex items-center space-x-1">
                                    <i class="fas fa-calendar-alt"></i>
                                    <span>2 October 2018</span>
                                </div>
                            </div>
                            <div class="flex items-center space-x-2 text-xs text-[#7A8BB3]">
                                <i class="fas fa-clock"></i>
                                <span>15 hrs 20m</span>
                            </div>
                        </div>
                        <div class="mt-4 flex space-x-3">
                            <button
                                type="button"
                                class="border border-red-600 text-red-600 text-xs font-semibold rounded-md px-3 py-1 hover:bg-red-600 hover:text-white focus:outline-none report-btn">
                                Report
                            </button>

                            <button
                                type="button"
                                class="border border-[#0B1E5B] text-[#0B1E5B] text-xs font-semibold rounded-md px-3 py-1 hover:bg-[#0B1E5B] hover:text-white focus:outline-none">
                                Take
                            </button>
                            <button
                                type="button"
                                class="bg-[#0B1E5B] text-white text-xs font-semibold rounded-md px-3 py-1 hover:bg-[#091a44] focus:outline-none">
                                View
                            </button>
                        </div>
                    </article>
                    <!-- Card Template End -->

                    <!-- Duplicate cards with same content but some with "Unavailable" -->
                    <article
                        class="bg-white rounded-lg shadow-md p-5 flex flex-col justify-between"
                        aria-label="Case card">
                        <div>
                            <div class="flex justify-between items-start mb-3">
                                <h3 class="text-[#0B1E5B] font-semibold text-sm leading-tight max-w-[70%]">
                                    Lorem ipsum dolor sit amet Lorem
                                </h3>
                                <span
                                    class="bg-[#1E293B] text-white text-xs font-semibold rounded-md px-2 py-1">Unavailable</span>
                            </div>
                            <p class="text-[#7A8BB3] text-xs mb-3 leading-snug">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                eiusmod tempor
                            </p>
                            <div class="flex flex-wrap gap-2 text-[#7A8BB3] text-xs mb-3">
                                <div class="flex items-center space-x-1">
                                    <i class="fas fa-user"></i>
                                    <span>John Doe</span>
                                </div>
                                <div class="flex items-center space-x-1">
                                    <i class="fas fa-calendar-alt"></i>
                                    <span>2 October 2018</span>
                                </div>
                            </div>
                            <div class="flex items-center space-x-2 text-xs text-[#7A8BB3]">
                                <i class="fas fa-clock"></i>
                                <span>15 hrs 20m</span>
                            </div>
                        </div>
                        <div class="mt-4 flex space-x-3">
                            <button
                                type="button"
                                class="border border-red-600 text-red-600 text-xs font-semibold rounded-md px-3 py-1 hover:bg-red-600 hover:text-white focus:outline-none report-btn">
                                Report
                            </button>

                            <button
                                type="button"
                                class="border border-[#0B1E5B] text-[#0B1E5B] text-xs font-semibold rounded-md px-3 py-1 hover:bg-[#0B1E5B] hover:text-white focus:outline-none">
                                Take
                            </button>
                            <button
                                type="button"
                                class="bg-[#0B1E5B] text-white text-xs font-semibold rounded-md px-3 py-1 hover:bg-[#091a44] focus:outline-none">
                                View
                            </button>
                        </div>
                    </article>

                    <article
                        class="bg-white rounded-lg shadow-md p-5 flex flex-col justify-between"
                        aria-label="Case card">
                        <div>
                            <div class="flex justify-between items-start mb-3">
                                <h3 class="text-[#0B1E5B] font-semibold text-sm leading-tight max-w-[70%]">
                                    Lorem ipsum dolor sit amet Lorem
                                </h3>
                                <span
                                    class="bg-[#0B1E5B] text-white text-xs font-semibold rounded-md px-2 py-1">Available</span>
                            </div>
                            <p class="text-[#7A8BB3] text-xs mb-3 leading-snug">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                eiusmod tempor
                            </p>
                            <div class="flex flex-wrap gap-2 text-[#7A8BB3] text-xs mb-3">
                                <div class="flex items-center space-x-1">
                                    <i class="fas fa-user"></i>
                                    <span>John Doe</span>
                                </div>
                                <div class="flex items-center space-x-1">
                                    <i class="fas fa-calendar-alt"></i>
                                    <span>2 October 2018</span>
                                </div>
                            </div>
                            <div class="flex items-center space-x-2 text-xs text-[#7A8BB3]">
                                <i class="fas fa-clock"></i>
                                <span>15 hrs 20m</span>
                            </div>
                        </div>
                        <div class="mt-4 flex space-x-3">
                            <button
                                type="button"
                                class="border border-red-600 text-red-600 text-xs font-semibold rounded-md px-3 py-1 hover:bg-red-600 hover:text-white focus:outline-none report-btn">
                                Report
                            </button>

                            <button
                                type="button"
                                class="border border-[#0B1E5B] text-[#0B1E5B] text-xs font-semibold rounded-md px-3 py-1 hover:bg-[#0B1E5B] hover:text-white focus:outline-none">
                                Take
                            </button>
                            <button
                                type="button"
                                class="bg-[#0B1E5B] text-white text-xs font-semibold rounded-md px-3 py-1 hover:bg-[#091a44] focus:outline-none">
                                View
                            </button>
                        </div>
                    </article>

                    <article
                        class="bg-white rounded-lg shadow-md p-5 flex flex-col justify-between"
                        aria-label="Case card">
                        <div>
                            <div class="flex justify-between items-start mb-3">
                                <h3 class="text-[#0B1E5B] font-semibold text-sm leading-tight max-w-[70%]">
                                    Lorem ipsum dolor sit amet Lorem
                                </h3>
                                <span
                                    class="bg-[#0B1E5B] text-white text-xs font-semibold rounded-md px-2 py-1">Available</span>
                            </div>
                            <p class="text-[#7A8BB3] text-xs mb-3 leading-snug">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                eiusmod tempor
                            </p>
                            <div class="flex flex-wrap gap-2 text-[#7A8BB3] text-xs mb-3">
                                <div class="flex items-center space-x-1">
                                    <i class="fas fa-user"></i>
                                    <span>John Doe</span>
                                </div>
                                <div class="flex items-center space-x-1">
                                    <i class="fas fa-calendar-alt"></i>
                                    <span>2 October 2018</span>
                                </div>
                            </div>
                            <div class="flex items-center space-x-2 text-xs text-[#7A8BB3]">
                                <i class="fas fa-clock"></i>
                                <span>15 hrs 20m</span>
                            </div>
                        </div>
                        <div class="mt-4 flex space-x-3">
                            <button
                                type="button"
                                class="border border-red-600 text-red-600 text-xs font-semibold rounded-md px-3 py-1 hover:bg-red-600 hover:text-white focus:outline-none report-btn">
                                Report
                            </button>

                            <button
                                type="button"
                                class="border border-[#0B1E5B] text-[#0B1E5B] text-xs font-semibold rounded-md px-3 py-1 hover:bg-[#0B1E5B] hover:text-white focus:outline-none">
                                Take
                            </button>
                            <button
                                type="button"
                                class="bg-[#0B1E5B] text-white text-xs font-semibold rounded-md px-3 py-1 hover:bg-[#091a44] focus:outline-none">
                                View
                            </button>
                        </div>
                    </article>

                    <article
                        class="bg-white rounded-lg shadow-md p-5 flex flex-col justify-between"
                        aria-label="Case card">
                        <div>
                            <div class="flex justify-between items-start mb-3">
                                <h3 class="text-[#0B1E5B] font-semibold text-sm leading-tight max-w-[70%]">
                                    Lorem ipsum dolor sit amet Lorem
                                </h3>
                                <span
                                    class="bg-[#1E293B] text-white text-xs font-semibold rounded-md px-2 py-1">Unavailable</span>
                            </div>
                            <p class="text-[#7A8BB3] text-xs mb-3 leading-snug">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                eiusmod tempor
                            </p>
                            <div class="flex flex-wrap gap-2 text-[#7A8BB3] text-xs mb-3">
                                <div class="flex items-center space-x-1">
                                    <i class="fas fa-user"></i>
                                    <span>John Doe</span>
                                </div>
                                <div class="flex items-center space-x-1">
                                    <i class="fas fa-calendar-alt"></i>
                                    <span>2 October 2018</span>
                                </div>
                            </div>
                            <div class="flex items-center space-x-2 text-xs text-[#7A8BB3]">
                                <i class="fas fa-clock"></i>
                                <span>15 hrs 20m</span>
                            </div>
                        </div>
                        <div class="mt-4 flex space-x-3">
                            <button
                                type="button"
                                class="border border-red-600 text-red-600 text-xs font-semibold rounded-md px-3 py-1 hover:bg-red-600 hover:text-white focus:outline-none report-btn">
                                Report
                            </button>

                            <button
                                type="button"
                                class="border border-[#0B1E5B] text-[#0B1E5B] text-xs font-semibold rounded-md px-3 py-1 hover:bg-[#0B1E5B] hover:text-white focus:outline-none">
                                Take
                            </button>
                            <button
                                type="button"
                                class="bg-[#0B1E5B] text-white text-xs font-semibold rounded-md px-3 py-1 hover:bg-[#091a44] focus:outline-none">
                                View
                            </button>
                        </div>
                    </article>

                    <article
                        class="bg-white rounded-lg shadow-md p-5 flex flex-col justify-between"
                        aria-label="Case card">
                        <div>
                            <div class="flex justify-between items-start mb-3">
                                <h3 class="text-[#0B1E5B] font-semibold text-sm leading-tight max-w-[70%]">
                                    Lorem ipsum dolor sit amet Lorem
                                </h3>
                                <span
                                    class="bg-[#0B1E5B] text-white text-xs font-semibold rounded-md px-2 py-1">Available</span>
                            </div>
                            <p class="text-[#7A8BB3] text-xs mb-3 leading-snug">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                eiusmod tempor
                            </p>
                            <div class="flex flex-wrap gap-2 text-[#7A8BB3] text-xs mb-3">
                                <div class="flex items-center space-x-1">
                                    <i class="fas fa-user"></i>
                                    <span>John Doe</span>
                                </div>
                                <div class="flex items-center space-x-1">
                                    <i class="fas fa-calendar-alt"></i>
                                    <span>2 October 2018</span>
                                </div>
                            </div>
                            <div class="flex items-center space-x-2 text-xs text-[#7A8BB3]">
                                <i class="fas fa-clock"></i>
                                <span>15 hrs 20m</span>
                            </div>
                        </div>
                        <div class="mt-4 flex space-x-3">
                            <button
                                type="button"
                                class="border border-red-600 text-red-600 text-xs font-semibold rounded-md px-3 py-1 hover:bg-red-600 hover:text-white focus:outline-none report-btn">
                                Report
                            </button>

                            <button
                                type="button"
                                class="border border-[#0B1E5B] text-[#0B1E5B] text-xs font-semibold rounded-md px-3 py-1 hover:bg-[#0B1E5B] hover:text-white focus:outline-none">
                                Take
                            </button>
                            <button
                                type="button"
                                class="bg-[#0B1E5B] text-white text-xs font-semibold rounded-md px-3 py-1 hover:bg-[#091a44] focus:outline-none">
                                View
                            </button>
                        </div>
                    </article>

                    <article
                        class="bg-white rounded-lg shadow-md p-5 flex flex-col justify-between"
                        aria-label="Case card">
                        <div>
                            <div class="flex justify-between items-start mb-3">
                                <h3 class="text-[#0B1E5B] font-semibold text-sm leading-tight max-w-[70%]">
                                    Lorem ipsum dolor sit amet Lorem
                                </h3>
                                <span
                                    class="bg-[#1E293B] text-white text-xs font-semibold rounded-md px-2 py-1">Unavailable</span>
                            </div>
                            <p class="text-[#7A8BB3] text-xs mb-3 leading-snug">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                eiusmod tempor
                            </p>
                            <div class="flex flex-wrap gap-2 text-[#7A8BB3] text-xs mb-3">
                                <div class="flex items-center space-x-1">
                                    <i class="fas fa-user"></i>
                                    <span>John Doe</span>
                                </div>
                                <div class="flex items-center space-x-1">
                                    <i class="fas fa-calendar-alt"></i>
                                    <span>2 October 2018</span>
                                </div>
                            </div>
                            <div class="flex items-center space-x-2 text-xs text-[#7A8BB3]">
                                <i class="fas fa-clock"></i>
                                <span>15 hrs 20m</span>
                            </div>
                        </div>
                        <div class="mt-4 flex space-x-3">
                            <button
                                type="button"
                                class="border border-red-600 text-red-600 text-xs font-semibold rounded-md px-3 py-1 hover:bg-red-600 hover:text-white focus:outline-none report-btn">
                                Report
                            </button>

                            <button
                                type="button"
                                class="border border-[#0B1E5B] text-[#0B1E5B] text-xs font-semibold rounded-md px-3 py-1 hover:bg-[#0B1E5B] hover:text-white focus:outline-none">
                                Take
                            </button>
                            <button
                                type="button"
                                class="bg-[#0B1E5B] text-white text-xs font-semibold rounded-md px-3 py-1 hover:bg-[#091a44] focus:outline-none">
                                View
                            </button>
                        </div>
                    </article>
                </main>
            </div>

            <!-- Pagination -->
            <div class="mt-10 flex justify-center items-center space-x-4 text-xs text-[#7A8BB3] font-semibold">
                <button type="button"
                    class="bg-[#0B1E5B] text-white rounded-md px-3 py-1 hover:bg-[#091a44] focus:outline-none">
                    Next →
                </button>
                <div>
                    Page <span class="text-[#0B1E5B]">1</span> of <span>2</span>
                </div>
            </div>

        </div>

        <!-- Hero Section -->
        <div class="relative w-full h-64 bg-cover bg-center" style="background-image: url('/storage/booklibrary.png');">
            <div class="absolute inset-0 bg-black bg-opacity-30 flex flex-col justify-end px-8 pb-6">
                <div class="text-white">
                    <h1 class="text-3xl font-bold">
                        The future of your business, <br />
                        starts with Liturtara
                    </h1>
                    <p class="text-sm mt-2">
                        Lorem ipsum dolor sit amet, consectetur adipiscing
                    </p>
                    <a href="{{ route('servicetr') }}">
                        <button
                            class="mt-4 bg-[#1fc92b] text-white px-6 py-2 rounded-md hover:bg-[#4aea56]">
                            Contact Now →
                        </button>
                    </a>
                </div>
            </div>
        </div>

    @include('bottom')
    </div>

    <!-- Modal backdrop -->
    <div id="reportModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
        <div class="bg-white rounded-2xl max-w-md w-full p-8 drop-shadow-lg mx-4">
            <h1 class="text-[#0B1B4D] text-2xl font-extrabold mb-2">Report Case</h1>
            <p class="text-gray-800 text-base mb-6">Why do you want to report this case</p>

            <label for="reason" class="block text-gray-900 text-sm mb-1">Choose the reason</label>
            <select id="reason" name="reason"
                class="w-full rounded-lg bg-gray-100 border border-gray-200 text-gray-700 py-3 px-4 mb-6 appearance-none"
                style="background-color:#F3F4F6;">
                <option>Reason</option>
                <option>Spam</option>
                <option>Inappropriate Content</option>
                <option>Harassment</option>
                <option>Other</option>
            </select>

            <label for="comment" class="block text-gray-900 text-sm mb-1">Add a comment to the report:</label>
            <textarea id="comment" name="comment" rows="4" placeholder="Start typing your comment here"
                class="w-full rounded-lg bg-gray-100 border border-gray-200 text-gray-400 py-3 px-4 mb-8 resize-none"
                style="background-color:#F3F4F6;"></textarea>

            <div class="flex space-x-6 justify-center">
                <button id="cancelBtn" type="button"
                    class="w-32 py-3 rounded-lg border border-black text-black text-base font-normal">
                    Cancel
                </button>
                <button id="submitBtn" type="submit"
                    class="w-32 py-3 rounded-lg bg-[#0B1B4D] text-white text-base font-normal">
                    Submit
                </button>
            </div>
        </div>
    </div>

    <!-- Thank You Modal -->
    <div id="thankYouModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-60">
        <div class="bg-white rounded-2xl max-w-md w-full p-8 drop-shadow-lg mx-4 flex flex-col items-center">
            <h2 class="text-[#0A1F44] text-xl font-bold mb-4">Thank you</h2>
            <div class="border-4 border-[#0A1F44] rounded-2xl p-4 mb-6">
                <i class="fas fa-check text-[#0A1F44]" style="font-size: 3.5rem;"></i>
            </div>
            <p class="text-center text-gray-700 mb-6 leading-relaxed">
                Your report has been successfully sent to us<br />
                We will be verify the problem and notify you<br />
                back in short notice
            </p>
            <p class="text-center text-gray-700 mb-8">Thank you for your contribution</p>
            <button id="thankYouCloseBtn" class="bg-[#0A1F44] text-white rounded-xl w-48 py-3 text-lg font-normal">
                Close
            </button>
        </div>
    </div>

    <script>
        // Show report modal when any report button is clicked
        document.querySelectorAll('.report-btn').forEach(btn => {
            btn.addEventListener('click', () => {
                document.getElementById('reportModal').classList.remove('hidden');
                document.getElementById('reportModal').classList.add('flex');
            });
        });

        // Hide report modal on cancel button click
        document.getElementById('cancelBtn').addEventListener('click', () => {
            document.getElementById('reportModal').classList.add('hidden');
            document.getElementById('reportModal').classList.remove('flex');
        });

        // Hide report modal on clicking outside the modal content
        document.getElementById('reportModal').addEventListener('click', (e) => {
            if (e.target === e.currentTarget) {
                document.getElementById('cancelBtn').click();
            }
        });

        // Submit button handler: hide report modal and show thank you modal
        document.getElementById('submitBtn').addEventListener('click', () => {
            // You can add form validation or submission logic here
            alert('Report submitted!');
            // Hide report modal
            document.getElementById('reportModal').classList.add('hidden');
            document.getElementById('reportModal').classList.remove('flex');
            // Show thank you modal
            document.getElementById('thankYouModal').classList.remove('hidden');
            document.getElementById('thankYouModal').classList.add('flex');
        });

        // Close thank you modal on button click
        document.getElementById('thankYouCloseBtn').addEventListener('click', () => {
            document.getElementById('thankYouModal').classList.add('hidden');
            document.getElementById('thankYouModal').classList.remove('flex');
        });

        // Optional: Close thank you modal on clicking outside the modal content
        document.getElementById('thankYouModal').addEventListener('click', (e) => {
            if (e.target === e.currentTarget) {
                document.getElementById('thankYouCloseBtn').click();
            }
        });
    </script>
</body>

</html>