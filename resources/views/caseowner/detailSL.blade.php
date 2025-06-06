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
@include('navbar')

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
                            <button id="reportBtn1" class="text-[10px] border border-red-600 text-red-600 rounded px-3 py-1 hover:bg-red-50 transition">
                                Report
                            </button>
                            <!-- <button class="text-[10px] border border-[#1E293B]/20 text-[#1E293B]/90 bg-white rounded px-3 py-1 hover:bg-[#F4F7FF] transition">
                                Draft
                            </button> -->
                            <button id="approveBtn1" class="text-[10px] bg-[#0C1E5B] text-white rounded px-3 py-1 flex items-center gap-1 hover:bg-[#0a1740] transition">
                                Approve Solution
                                <i class="fas fa-check"></i>
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
                            <button id="reportBtn2" class="text-[10px] border border-red-600 text-red-600 rounded px-3 py-1 hover:bg-red-50 transition">
                                Report
                            </button>
                            <!-- <button class="text-[10px] border border-[#1E293B]/20 text-[#1E293B]/90 bg-white rounded px-3 py-1 hover:bg-[#F4F7FF] transition">
                                Draft
                            </button> -->
                            <button id="approveBtn2" class="text-[10px] bg-[#0C1E5B] text-white rounded px-3 py-1 flex items-center gap-1 hover:bg-[#0a1740] transition">
                                Approve Solution
                                <i class="fas fa-check"></i>
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
                                    06 December 2025
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
                            <button id="reportBtn3" class="text-[10px] border border-red-600 text-red-600 rounded px-3 py-1 hover:bg-red-50 transition">
                                Report
                            </button>
                            <!-- <button class="text-[10px] border border-[#1E293B]/20 text-[#1E293B]/90 bg-white rounded px-3 py-1 hover:bg-[#F4F7FF] transition">
                                Draft
                            </button> -->
                            <button id="approveBtn3" class="text-[10px] bg-[#0C1E5B] text-white rounded px-3 py-1 flex items-center gap-1 hover:bg-[#0a1740] transition">
                                Approve Solution
                                <i class="fas fa-check"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Approve Confirmation Modal -->
        <div id="approveModal" class="hidden fixed inset-0 bg-black bg-opacity-30 backdrop-blur-sm flex justify-center items-center z-50">
            <div class="bg-white w-11/12 max-w-md p-6 rounded-lg shadow-lg relative">
                <button id="closeApproveModal" class="absolute top-2 right-3 text-gray-500 hover:text-red-600 text-2xl">&times;</button>
                <h2 class="text-start text-xl font-bold mb-4 text-[#00114F]">Overview Soution</h2>
                <hr class="border-t border-gray-300 mb-4" />
                <!-- Solution Draft and Date -->
                <div class="flex justify-start text-[11px] text-gray-700 mb-4 space-x-4">
                    <span>
                        Solution Draft
                    </span>
                    <span>
                        15 Desember 2025
                    </span>
                </div>
                <!-- Content block with icon and text -->
                <div class="flex space-x-4 mb-4">
                    <div>
                        <img alt="Icon showing three horizontal lines representing a document" class="w-12 h-12" height="48" src="https://storage.googleapis.com/a1aa/image/78ae9bd5-eb11-4795-5640-76a8d8ea7cad.jpg" width="48" />
                    </div>
                    <div class="flex-1">
                        <h3 class="text-[#00184F] font-semibold text-[13px] leading-[1.3] mb-1" style="font-weight: 600;">
                            Lorem ipsum dolor sit amet
                        </h3>
                        <p class="text-[11px] text-gray-700 leading-[1.3]">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                            minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                            aliquip ex ea commodo consequat.
                        </p>
                        <button class="mt-2 text-[10px] text-[#00184F] border border-[#00184F] rounded px-3 py-1 hover:bg-[#00184F] hover:text-white transition" style="font-weight: 500;">
                            View Draft
                        </button>
                    </div>
                </div>
                <hr class="border-t border-gray-300 mb-4" />
                <p class="text-[11px] text-gray-700 mb-3">
                    Submitted By
                </p>
                <!-- User info block -->
                <div class="flex items-center justify-between mb-4">
                    <div class="flex items-center space-x-4">
                        <img alt="Photo of a young man with short black hair wearing a white t-shirt, smiling" class="w-12 h-12 rounded-full object-cover" height="48" src="https://storage.googleapis.com/a1aa/image/9be27ccb-bb56-4352-b7c5-69a9404ec191.jpg" width="48" />
                        <div>
                            <span class="bg-[#00184F] text-white text-[9px] font-semibold rounded px-2 py-[2px] inline-block mb-1" style="font-weight: 600;">
                                Beginner Researcher
                            </span>
                            <h4 class="text-[#00184F] font-bold text-[15px] leading-[1.2] flex items-center space-x-1" style="font-weight: 700;">
                                <span>
                                    Muhammad Patel
                                </span>
                                <i aria-label="LinkedIn icon" class="fab fa-linkedin text-[#0A66C2]" title="LinkedIn">
                                </i>
                            </h4>
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
                            <div class="flex items-center text-[11px] text-gray-700 space-x-1">
                                <i class="fas fa-university">
                                </i>
                                <span>
                                    Haluoleo University
                                </span>
                            </div>
                        </div>
                    </div>
                    <a class="text-[#00184F] text-[11px] font-normal hover:underline" href="#" style="font-weight: 400;">
                        View Profile
                    </a>
                </div>
                <hr class="border-t border-gray-300 mb-4" />
                <!-- Disclaimer text -->
                <p class="text-[10px] text-gray-700 mb-4 leading-[1.3]">
                    By agreeing to this solution, the talent will be assigned to solve the
                    problem based on the solution presented and notified that the problem will
                    be handled by this talent.
                </p>
                <button id="confirmApprove" class="text-[10px] bg-[#0C1E5B] text-white rounded px-3 py-1 flex items-center gap-x-1 hover:bg-[#0a1740] transition">
                    Approve Solution
                    <i class="fas fa-check"></i>
                </button>
            </div>
        </div>
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
                        <label class="flex items-start gap-2">
                            <input type="text" name="reportReason" class="text-start" onclick="document.getElementById('otherInput').classList.add('hidden')" />
                            <span class="text-left">The solution provided does not match the problem described.</span>
                        </label>
                        <label class="flex items-start gap-2">
                            <input type="text" name="reportReason" class="text-start" onclick="document.getElementById('otherInput').classList.add('hidden')" />
                            <span class="text-left">The solution contains inappropriate content.</span>
                        </label>
                        <label class="flex items-start gap-2">
                            <input type="text" name="reportReason" class="text-start" onclick="document.getElementById('otherInput').classList.add('hidden')" />
                            <span class="text-left">The solution is spam or promotional content.</span>
                        </label>
                    </div>


                    <!-- Other Report sebagai checkbox -->
                    <div class="space-y-2 text-sm text-gray-700">
                        <label class="flex items-center gap-2">
                            <input type="checkbox" id="otherCheckbox" class="form-checkbox text-red-600" onclick="toggleOtherInputCheckbox()" />
                            Other Report
                        </label>
                        <input type="text" id="otherInput" name="reportReasonOther" placeholder="Please specify..." class="w-full border rounded px-3 py-2 hidden" />
                    </div>
                    <!-- Tambahan Textarea Penjelasan -->
                    <div>
                        <label for="reportDetails" class="block font-medium text-sm">Additional Explanation (optional)</label>
                        <textarea id="reportDetails" name="reportDetails" rows="3" placeholder="Explain more details here..."
                            class="w-full border rounded px-3 py-2 resize-none"></textarea>
                    </div>

                </div>


                <button onclick="submitReport()"
                    class="bg-red-600 text-white px-4 py-2 rounded-md hover:bg-red-700 focus:outline-none w-full">
                    Report
                </button>
            </div>
        </div>
    </div>

    <script>
        // Report modal functions
        function openReportModal() {
            document.getElementById('reportOverlay').classList.remove('hidden');
        }

        function closeReportModal() {
            document.getElementById('reportOverlay').classList.add('hidden');
            // Reset form
            document.getElementById('otherInput').classList.add('hidden');
            document.querySelectorAll('input[name="reportReason"]').forEach(input => input.checked = false);
            document.getElementById('otherInput').value = '';
        }

        function toggleOtherInput() {
            const otherInput = document.getElementById('otherInput');
            otherInput.classList.toggle('hidden');
        }

        function submitReport() {
            const selectedReason = document.querySelector('input[name="reportReason"]:checked');
            const otherText = document.getElementById('otherInput').value.trim();

            if (!selectedReason) {
                alert('Please select a reason for reporting.');
                return;
            }

            const reportData = {
                reason: selectedReason.value,
                details: selectedReason.value === 'Other' ? otherText : null
            };

            console.log(reportData); // Data yang akan dikirim ke backend

            closeReportModal();
            alert('Your report has been submitted.');
        }

        // Attach event listeners to all report buttons
        document.getElementById('reportBtn1').addEventListener('click', openReportModal);
        document.getElementById('reportBtn2').addEventListener('click', openReportModal);
        document.getElementById('reportBtn3').addEventListener('click', openReportModal);

        // Approve modal elements
        const approveModal = document.getElementById('approveModal');
        const closeApproveModalBtn = document.getElementById('closeApproveModal');
        const cancelApproveBtn = document.getElementById('cancelApprove');
        const confirmApproveBtn = document.getElementById('confirmApprove');

        // Show approve modal on clicking any approve button
        document.getElementById('approveBtn1').addEventListener('click', () => {
            approveModal.classList.remove('hidden');
        });
        document.getElementById('approveBtn2').addEventListener('click', () => {
            approveModal.classList.remove('hidden');
        });
        document.getElementById('approveBtn3').addEventListener('click', () => {
            approveModal.classList.remove('hidden');
        });

        // Close approve modal handlers
        closeApproveModalBtn.addEventListener('click', () => {
            approveModal.classList.add('hidden');
        });
        cancelApproveBtn.addEventListener('click', () => {
            approveModal.classList.add('hidden');
        });

        // Confirm approve action
        confirmApproveBtn.addEventListener('click', () => {
            approveModal.classList.add('hidden');
            alert('Solution approved successfully.');
            // Here you can add your logic to handle approval (e.g., API call)
        });
    </script>

    <!-- Footer -->
@include('bottom')
</body>

</html>