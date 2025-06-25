<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>
        Service Talent
    </title>
    <script src="https://cdn.tailwindcss.com">
    </script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet" />
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
    <div class="mt-20 relative w-full h-80 mt-10">
        <img src="{{ asset('storage/gambar2.png') }}"
            alt="Gambar 2"
            class="w-full h-full object-cover"
            width="1920"
            height="320">

        <div class="absolute inset-0 bg-black bg-opacity-30 flex items-end px-8 pb-6">
            <div class="text-white">
                <h1 class="text-3xl font-bold">
                    Layanan Talent Researcher
                </h1>
                <p class="text-sm">
                    Lorem ipsum dolor sit amet, consectetur adipiscing
                </p>
            </div>
        </div>
    </div>
    <!-- Tab Navigasi -->
    <div class="flex border-b px-8">
        <a class="px-4 py-2 font-semibold border-b-2 {{ Request::is('caselist') ? 'border-blue-700 text-black' : 'border-transparent text-gray-500' }}" href="{{ url('caselist') }}">
            Case List
        </a>
        <a class="px-4 py-2 font-semibold border-b-2 {{ Request::is('solutionstatus') ? 'border-blue-700 text-black' : 'border-transparent text-gray-500' }}" href="{{ url('solutionstatus') }}">
            Selection Status
        </a>
    </div>
    <!-- Content Wrapper Left-->
    <div class="bg-[#F7F9FF] text-[#0B1E5B] w-full flex-grow">
        <div class="max-w-[1200px] px-4 sm:px-6 lg:px-8 pt-6 pb-12 mx-auto">
<section class="relative w-full max-w-[1200px] h-[250px] mx-auto overflow-hidden">
    <img src="{{ asset('storage/bgtrsearch.png') }}"
        alt="Gambar tr"
        class="absolute inset-0 w-full h-full object-cover z-0"
        width="1920"
        height="320">

    <div class="relative w-full h-full flex flex-col items-center justify-center px-4 z-10">
        <h1 class="text-center text-[#0B1E5B] font-semibold text-xl sm:text-2xl mb-6">
            Find the ones you need!
        </h1>
        <form aria-label="Search cases" class="w-full max-w-[600px] relative" role="search">
            <input aria-label="Search input"
                   class="w-full rounded-md border border-[#D9E0EC] py-3 pl-4 pr-12 text-[#0B1E5B] placeholder-[#7A8BB3] text-sm focus:outline-none focus:ring-2 focus:ring-[#0B1E5B]"
                   placeholder="Search"
                   type="search" />
            <button aria-label="Search button"
                    class="absolute right-2 top-1/2 -translate-y-1/2 bg-[#0B1E5B] text-white rounded-md px-3 py-2 text-sm flex items-center space-x-2 hover:bg-[#091a44] focus:outline-none"
                    type="submit">
                <i class="fas fa-search"></i>
                <span>Search</span>
            </button>
        </form>
    </div>
</section>

            <!-- Main Content -->
            <div class="flex flex-col md:flex-row gap-8 max-w-6xl mx-auto mt-8">
                <div>                <!-- Left Menu -->
                <nav aria-label="Case status navigation" class="bg-white rounded-lg shadow-md w-full md:w-64 p-4 space-y-3">
                    <button aria-current="true" class="w-full text-left bg-[#0B1B4D] text-white text-sm font-semibold rounded px-4 py-2 flex items-center space-x-3">
                        <i class="fas fa-check-circle text-white">
                        </i>
                        <span>
                            Solution Approval
                        </span>
                    </button>
                    <button class="w-full text-left text-[#0B1B4D] text-sm font-semibold rounded px-4 py-2 flex items-center space-x-3 hover:bg-gray-100">
                        <i class="fas fa-spinner text-[#0B1B4D]">
                        </i>
                        <span>
                            Solution in Progress
                        </span>
                    </button>
                    <button class="w-full text-left text-[#0B1B4D] text-sm font-semibold rounded px-4 py-2 flex items-center space-x-3 hover:bg-gray-100">
                        <i class="fas fa-search text-[#0B1B4D]">
                        </i>
                        <span>
                            Solution Review
                        </span>
                    </button>
                    <button class="w-full text-left text-[#0B1B4D] text-sm font-semibold rounded px-4 py-2 flex items-center space-x-3 hover:bg-gray-100">
                        <i class="fas fa-check text-[#0B1B4D]">
                        </i>
                        <span>
                            Solution Solved
                        </span>
                    </button>
                    <button class="w-full text-left text-[#0B1B4D] text-sm font-semibold rounded px-4 py-2 flex items-center space-x-3 hover:bg-gray-100">
                        <i class="fas fa-times text-[#0B1B4D]">
                        </i>
                        <span>
                            Solution Rejected
                        </span>
                    </button>
                </nav>
            </div>

                <!-- Right Cards Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 flex-1">
                    <!-- Card 1 -->
                    <article class="bg-white rounded-lg shadow-md p-5 relative flex flex-col justify-between">
                        <div class="flex justify-between items-start">
                            <div class="space-y-1 max-w-[75%]">
                                <h3 class="font-semibold text-sm leading-snug text-[#0B1B4D]">
                                    Lorem ipsum dolor sit amet Lorem
                                </h3>
                                <div class="flex flex-wrap gap-2 mt-1">
                                    <span class="text-xs text-[#0B1B4D] bg-[#E9F0FF] rounded px-2 py-0.5">
                                        Category
                                    </span>
                                    <span class="text-xs text-[#0B1B4D] bg-[#E9F0FF] rounded px-2 py-0.5">
                                        Category
                                    </span>
                                </div>
                            </div>
                            <span class="text-xs bg-[#0B1B4D] text-white rounded px-3 py-1 font-semibold">
                                Waiting
                            </span>
                        </div>
                        <p class="text-xs text-[#6B7280] mt-2 leading-tight">
                            John Doe
                            <i class="far fa-calendar-alt mx-1">
                            </i>
                            2 October 2024
                        </p>
                        <p class="text-xs text-[#6B7280] mt-1 leading-tight">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        </p>
                        <p class="text-xs text-[#6B7280] mt-1 leading-tight">
                            15 Dec 2024
                        </p>
                        <button aria-label="View details" class="absolute bottom-4 right-4 bg-[#0B1B4D] text-white text-xs font-semibold rounded px-3 py-1 flex items-center hover:bg-[#0a1740] transition-colors">
                            View
                            <i class="fas fa-arrow-right ml-2">
                            </i>
                        </button>
                    </article>
                    <!-- Card 2 -->
                    <article class="bg-white rounded-lg shadow-md p-5 relative flex flex-col justify-between">
                        <div class="flex justify-between items-start">
                            <div class="space-y-1 max-w-[75%]">
                                <h3 class="font-semibold text-sm leading-snug text-[#0B1B4D]">
                                    Lorem ipsum dolor sit amet Lorem
                                </h3>
                                <div class="flex flex-wrap gap-2 mt-1">
                                    <span class="text-xs text-[#0B1B4D] bg-[#E9F0FF] rounded px-2 py-0.5">
                                        Category
                                    </span>
                                    <span class="text-xs text-[#0B1B4D] bg-[#E9F0FF] rounded px-2 py-0.5">
                                        Category
                                    </span>
                                </div>
                            </div>
                            <span class="text-xs bg-[#0B1B4D] text-white rounded px-3 py-1 font-semibold">
                                Waiting
                            </span>
                        </div>
                        <p class="text-xs text-[#6B7280] mt-2 leading-tight">
                            John Doe
                            <i class="far fa-calendar-alt mx-1">
                            </i>
                            2 October 2024
                        </p>
                        <p class="text-xs text-[#6B7280] mt-1 leading-tight">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        </p>
                        <p class="text-xs text-[#6B7280] mt-1 leading-tight">
                            15 Dec 2024
                        </p>
                        <button aria-label="View details" class="absolute bottom-4 right-4 bg-[#0B1B4D] text-white text-xs font-semibold rounded px-3 py-1 flex items-center hover:bg-[#0a1740] transition-colors">
                            View
                            <i class="fas fa-arrow-right ml-2">
                            </i>
                        </button>
                    </article>
                    <!-- Card 3 -->
                    <article class="bg-white rounded-lg shadow-md p-5 relative flex flex-col justify-between">
                        <div class="flex justify-between items-start">
                            <div class="space-y-1 max-w-[75%]">
                                <h3 class="font-semibold text-sm leading-snug text-[#0B1B4D]">
                                    Lorem ipsum dolor sit amet Lorem
                                </h3>
                                <div class="flex flex-wrap gap-2 mt-1">
                                    <span class="text-xs text-[#0B1B4D] bg-[#E9F0FF] rounded px-2 py-0.5">
                                        Category
                                    </span>
                                    <span class="text-xs text-[#0B1B4D] bg-[#E9F0FF] rounded px-2 py-0.5">
                                        Category
                                    </span>
                                </div>
                            </div>
                            <span class="text-xs bg-[#0B1B4D] text-white rounded px-3 py-1 font-semibold">
                                Waiting
                            </span>
                        </div>
                        <p class="text-xs text-[#6B7280] mt-2 leading-tight">
                            John Doe
                            <i class="far fa-calendar-alt mx-1">
                            </i>
                            2 October 2024
                        </p>
                        <p class="text-xs text-[#6B7280] mt-1 leading-tight">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        </p>
                        <p class="text-xs text-[#6B7280] mt-1 leading-tight">
                            15 Dec 2024
                        </p>
                        <button aria-label="View details" class="absolute bottom-4 right-4 bg-[#0B1B4D] text-white text-xs font-semibold rounded px-3 py-1 flex items-center hover:bg-[#0a1740] transition-colors">
                            View
                            <i class="fas fa-arrow-right ml-2">
                            </i>
                        </button>
                    </article>
                    <!-- Card 4 -->
                    <article class="bg-white rounded-lg shadow-md p-5 relative flex flex-col justify-between">
                        <div class="flex justify-between items-start">
                            <div class="space-y-1 max-w-[75%]">
                                <h3 class="font-semibold text-sm leading-snug text-[#0B1B4D]">
                                    Lorem ipsum dolor sit amet Lorem
                                </h3>
                                <div class="flex flex-wrap gap-2 mt-1">
                                    <span class="text-xs text-[#0B1B4D] bg-[#E9F0FF] rounded px-2 py-0.5">
                                        Category
                                    </span>
                                    <span class="text-xs text-[#0B1B4D] bg-[#E9F0FF] rounded px-2 py-0.5">
                                        Category
                                    </span>
                                </div>
                            </div>
                            <span class="text-xs bg-[#0B1B4D] text-white rounded px-3 py-1 font-semibold">
                                Waiting
                            </span>
                        </div>
                        <p class="text-xs text-[#6B7280] mt-2 leading-tight">
                            John Doe
                            <i class="far fa-calendar-alt mx-1">
                            </i>
                            2 October 2024
                        </p>
                        <p class="text-xs text-[#6B7280] mt-1 leading-tight">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        </p>
                        <p class="text-xs text-[#6B7280] mt-1 leading-tight">
                            15 Dec 2024
                        </p>
                        <button aria-label="View details" class="absolute bottom-4 right-4 bg-[#0B1B4D] text-white text-xs font-semibold rounded px-3 py-1 flex items-center hover:bg-[#0a1740] transition-colors">
                            View
                            <i class="fas fa-arrow-right ml-2">
                            </i>
                        </button>
                    </article>
                    <!-- Card 5 -->
                    <article class="bg-white rounded-lg shadow-md p-5 relative flex flex-col justify-between">
                        <div class="flex justify-between items-start">
                            <div class="space-y-1 max-w-[75%]">
                                <h3 class="font-semibold text-sm leading-snug text-[#0B1B4D]">
                                    Lorem ipsum dolor sit amet Lorem
                                </h3>
                                <div class="flex flex-wrap gap-2 mt-1">
                                    <span class="text-xs text-[#0B1B4D] bg-[#E9F0FF] rounded px-2 py-0.5">
                                        Category
                                    </span>
                                    <span class="text-xs text-[#0B1B4D] bg-[#E9F0FF] rounded px-2 py-0.5">
                                        Category
                                    </span>
                                </div>
                            </div>
                            <span class="text-xs bg-[#0B1B4D] text-white rounded px-3 py-1 font-semibold">
                                Waiting
                            </span>
                        </div>
                        <p class="text-xs text-[#6B7280] mt-2 leading-tight">
                            John Doe
                            <i class="far fa-calendar-alt mx-1">
                            </i>
                            2 October 2024
                        </p>
                        <p class="text-xs text-[#6B7280] mt-1 leading-tight">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        </p>
                        <p class="text-xs text-[#6B7280] mt-1 leading-tight">
                            15 Dec 2024
                        </p>
                        <button aria-label="View details" class="absolute bottom-4 right-4 bg-[#0B1B4D] text-white text-xs font-semibold rounded px-3 py-1 flex items-center hover:bg-[#0a1740] transition-colors">
                            View
                            <i class="fas fa-arrow-right ml-2">
                            </i>
                        </button>
                    </article>
                    <!-- Card 6 -->
                    <article class="bg-white rounded-lg shadow-md p-5 relative flex flex-col justify-between">
                        <div class="flex justify-between items-start">
                            <div class="space-y-1 max-w-[75%]">
                                <h3 class="font-semibold text-sm leading-snug text-[#0B1B4D]">
                                    Lorem ipsum dolor sit amet Lorem
                                </h3>
                                <div class="flex flex-wrap gap-2 mt-1">
                                    <span class="text-xs text-[#0B1B4D] bg-[#E9F0FF] rounded px-2 py-0.5">
                                        Category
                                    </span>
                                    <span class="text-xs text-[#0B1B4D] bg-[#E9F0FF] rounded px-2 py-0.5">
                                        Category
                                    </span>
                                </div>
                            </div>
                            <span class="text-xs bg-[#0B1B4D] text-white rounded px-3 py-1 font-semibold">
                                Waiting
                            </span>
                        </div>
                        <p class="text-xs text-[#6B7280] mt-2 leading-tight">
                            John Doe
                            <i class="far fa-calendar-alt mx-1">
                            </i>
                            2 October 2024
                        </p>
                        <p class="text-xs text-[#6B7280] mt-1 leading-tight">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        </p>
                        <p class="text-xs text-[#6B7280] mt-1 leading-tight">
                            15 Dec 2024
                        </p>
                        <button aria-label="View details" class="absolute bottom-4 right-4 bg-[#0B1B4D] text-white text-xs font-semibold rounded px-3 py-1 flex items-center hover:bg-[#0a1740] transition-colors">
                            View
                            <i class="fas fa-arrow-right ml-2">
                            </i>
                        </button>
                    </article>
                </div>
            </div>
            <!-- Pagination -->
            <div class="mt-10 flex justify-center items-center space-x-4 text-xs text-[#7A8BB3] font-semibold">
                <button class="bg-[#0B1E5B] text-white rounded-md px-3 py-1 hover:bg-[#091a44] focus:outline-none" type="button">
                    Next →
                </button>
                <div>
                    Page
                    <span class="text-[#0B1E5B]">
                        1
                    </span>
                    of
                    <span>
                        2
                    </span>
                </div>
            </div>
        </div>
        <!-- Hero Section Bottom -->
        <div class="relative w-full h-64 mt-12">
            <img src="{{ asset('storage/booklibrary.png') }}"
        alt="Gambar buku"
        class="absolute inset-0 w-full h-full object-cover z-0"
        width="1920"
        height="320">
            <div class="absolute inset-0 bg-black bg-opacity-30 flex flex-col justify-end px-8 pb-6">
                <div class="text-white max-w-lg">
                    <h1 class="text-3xl font-bold">
                        The future of your business,
                        <br />
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
    </div>
    @include('bottom')
    <!-- Modal backdrop -->
    <div class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50" id="reportModal">
        <div class="bg-white rounded-2xl max-w-md w-full p-8 drop-shadow-lg mx-4">
            <h1 class="text-[#0B1B4D] text-2xl font-extrabold mb-2">
                Report Case
            </h1>
            <p class="text-gray-800 text-base mb-6">
                Why do you want to report this case
            </p>
            <label class="block text-gray-900 text-sm mb-1" for="reason">
                Choose the reason
            </label>
            <select class="w-full rounded-lg bg-gray-100 border border-gray-200 text-gray-700 py-3 px-4 mb-6 appearance-none" id="reason" name="reason" style="background-color:#F3F4F6;">
                <option>
                    Reason
                </option>
                <option>
                    Spam
                </option>
                <option>
                    Inappropriate Content
                </option>
                <option>
                    Harassment
                </option>
                <option>
                    Other
                </option>
            </select>
            <label class="block text-gray-900 text-sm mb-1" for="comment">
                Add a comment to the report:
            </label>
            <textarea class="w-full rounded-lg bg-gray-100 border border-gray-200 text-gray-400 py-3 px-4 mb-8 resize-none" id="comment" name="comment" placeholder="Start typing your comment here" rows="4" style="background-color:#F3F4F6;"></textarea>
            <div class="flex space-x-6 justify-center">
                <button class="w-32 py-3 rounded-lg border border-black text-black text-base font-normal" id="cancelBtn" type="button">
                    Cancel
                </button>
                <button class="w-32 py-3 rounded-lg bg-[#0B1B4D] text-white text-base font-normal" id="submitBtn" type="submit">
                    Submit
                </button>
            </div>
        </div>
    </div>
    <!-- Thank You Modal -->
    <div class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-60" id="thankYouModal">
        <div class="bg-white rounded-2xl max-w-md w-full p-8 drop-shadow-lg mx-4 flex flex-col items-center">
            <h2 class="text-[#0A1F44] text-xl font-bold mb-4">
                Thank you
            </h2>
            <div class="border-4 border-[#0A1F44] rounded-2xl p-4 mb-6">
                <i class="fas fa-check text-[#0A1F44]" style="font-size: 3.5rem;">
                </i>
            </div>
            <p class="text-center text-gray-700 mb-6 leading-relaxed">
                Your report has been successfully sent to us
                <br />
                We will be verify the problem and notify you
                <br />
                back in short notice
            </p>
            <p class="text-center text-gray-700 mb-8">
                Thank you for your contribution
            </p>
            <button class="bg-[#0A1F44] text-white rounded-xl w-48 py-3 text-lg font-normal" id="thankYouCloseBtn">
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