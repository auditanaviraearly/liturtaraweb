<!-- Tailwind CSS CDN -->
<script src="https://cdn.tailwindcss.com"></script>

<div class="flex flex-col md:flex-row gap-8 items-center">
    <!-- Gambar di kiri -->
    <div class="w-[300px] h-[1000px] md:w-1/2 flex justify-center items-center overflow-hidden">
        <img src="{{ asset('storage/loginimg.png') }}" alt="Ilustrasi Kasus"
            class="w-full h-full object-cover object-center" />
    </div>

    <!-- Form di kanan -->
    <div class="w-full md:w-1/2">
        <h3 class="text-3xl font-semibold text-gray-900 mb-4">Issue Upload Form</h3>

        <!-- Mode Buttons -->
        <div class="w-full flex justify-start items-center mt-8 space-x-4">
            <button type="button" id="textBtn"
                class="bg-[#00114F] text-white px-6 py-2 rounded-md flex items-center gap-2 hover:bg-[#00227f] transition duration-200">
                Text
            </button>
            <button type="button" id="documentBtn"
                class="prevBtn border border-[#00114F] text-[#00114F] bg-transparent px-6 py-2 rounded-md hover:bg-[#00114F] hover:text-white transition duration-200">
                Document
            </button>
        </div>

        <!-- Form Input -->
        <form method="POST" action="{{ route('casepub.postStep4') }}" class="mt-6">
            @csrf

            <!-- Early Due Date -->
            <div class="mb-4">
                <label for="early_due_date" class="block text-sm font-medium text-gray-700">Early Due Date</label>
                <input type="date" name="early_due_date" id="early_due_date"
                    class="w-full mt-1 p-2 border rounded-md focus:ring-2 focus:ring-[#00114F] focus:outline-none" required>
            </div>

            <!-- Final Due Date -->
            <div class="mb-4">
                <label for="final_due_date" class="block text-sm font-medium text-gray-700">Final Due Date</label>
                <input type="date" name="final_due_date" id="final_due_date"
                    class="w-full mt-1 p-2 border rounded-md focus:ring-2 focus:ring-[#00114F] focus:outline-none" required>
            </div>

            <!-- Ceklis Setuju dengan Terms, Privacy Policy dan Personal Data -->
            <div class="mb-4 flex items-center">
                <input type="checkbox" name="agree_terms" id="agree_terms"
                    class="mr-2 w-4 h-4 text-[#00114F] border-gray-300 rounded focus:ring-[#00114F]">
                <label for="agree_terms" class="text-sm text-gray-700">
                    I agree to the
                    <a href="#" id="termsLink" class="text-blue-600 hover:underline">
                        Terms and Conditions & Privacy Policy
                    </a>
                </label>
            </div>

            <div class="mb-4 flex items-center">
                <input type="checkbox" name="agree_personal_data" id="agree_personal_data"
                    class="mr-2 w-4 h-4 text-[#00114F] border-gray-300 rounded focus:ring-[#00114F]">
                <label for="agree_personal_data" class="text-sm text-gray-700">
                    I agree to the
                    <a href="#" id="personalDataLink" class="text-blue-600 hover:underline">
                        Personal Data Protection Law
                    </a>
                </label>
            </div>
    
            <!-- Tombol Navigasi -->
            <div class="flex justify-start mt-6 space-x-4">
                <button type="button"
                    class="prevBtn border border-[#00114F] text-[#00114F] bg-transparent px-6 py-2 rounded-md hover:bg-[#00114F] hover:text-white transition duration-200">
                    ← Prev
                </button>
                <button type="submit"
                    class="nextBtn bg-[#00114F] text-white px-6 py-2 rounded-md hover:bg-[#00227f] transition duration-200">
                    Submit
                </button>
            </div>
        </form>
    </div>
</div>

<!-- Popup Overlay Terms & Privacy -->
<div id="termsOverlay"
    class="hidden fixed inset-0 bg-black bg-opacity-30 backdrop-blur-sm flex justify-center items-center z-50">
    <div class="bg-white w-3/4 md:w-1/2 lg:w-1/3 p-6 rounded-lg shadow-lg relative">
        <button id="closeTermsOverlay"
            class="absolute top-2 right-3 text-gray-500 hover:text-red-600 text-2xl">&times;</button>
        <h2 class="text-xl font-bold mb-4 text-[#00114F]">Terms and Conditions & Privacy Policy</h2>
        <div class="overflow-y-auto max-h-64 space-y-4 text-sm text-gray-600">

            <p>
                <strong>Terms and Conditions:</strong> These terms govern the use of our services and outline the legal agreements between the service provider and the user.
                By accessing and using our platform, you acknowledge and accept the terms and conditions described herein.
                This includes but is not limited to the acceptable use of the platform, limitations of liability, user responsibilities, and dispute resolution mechanisms.
                Violation of these terms may result in suspension or termination of access to services.
            </p>

            <p>
                You agree to use the services in compliance with all applicable local, state, national, and international laws and regulations.
                You are solely responsible for the activity that occurs on your account, and you must keep your account password secure.
                The service provider is not liable for any loss or damage arising from your failure to comply with these obligations.
            </p>

            <p>
                <strong>Privacy Policy:</strong> Our privacy policy outlines how we collect, use, store, and protect your personal information.
                We are committed to safeguarding your privacy and ensuring that your data is handled securely and responsibly.
                When you use our services, we may collect information such as your name, email address, IP address, and usage data.
                This information is used to enhance your experience, improve service quality, and ensure the functionality of the platform.
            </p>

            <p>
                We implement a variety of security measures to maintain the safety of your personal information.
                Your data is protected through encryption protocols and access restrictions to prevent unauthorized access or disclosure.
                However, please be aware that while we strive to protect your personal information, no method of transmission over the Internet,
                or method of electronic storage, is 100% secure, and we cannot guarantee absolute security.
            </p>

            <p>
                By agreeing to our Terms and Conditions and Privacy Policy, you consent to the collection and use of your information as described.
                If there are any changes to this policy, you will be notified accordingly. Your continued use of the platform following the posting
                of changes constitutes your acceptance of those changes.
            </p>

            <p>
                If you have any questions or concerns regarding these Terms and Conditions or our Privacy Policy, please feel free to contact our
                support team. Your trust and security are important to us, and we are committed to ensuring a safe and secure experience.
            </p>
        </div>
    </div>
</div>


<!-- Popup Overlay Personal Data Protection -->
<div id="personalDataOverlay"
    class="hidden fixed inset-0 bg-black bg-opacity-30 backdrop-blur-sm flex justify-center items-center z-50">
    <div class="bg-white w-3/4 md:w-1/2 lg:w-1/3 p-6 rounded-lg shadow-lg relative">
        <button id="closePersonalDataOverlay"
            class="absolute top-2 right-3 text-gray-500 hover:text-red-600 text-2xl">&times;</button>
        <h2 class="text-xl font-bold mb-4 text-[#00114F]">Personal Data Protection Law</h2>
        <div class="overflow-y-auto max-h-64 space-y-4 text-sm text-gray-600">
            <p>The Personal Data Protection Law ensures that your personal data is handled with strict confidentiality...</p>
        </div>
    </div>
</div>

<!-- JavaScript -->
<script>
    // Modal Logic
    const modalLogic = (linkId, overlayId, closeId) => {
        document.getElementById(linkId).addEventListener('click', (e) => {
            e.preventDefault();
            document.getElementById(overlayId).classList.remove('hidden');
        });
        document.getElementById(closeId).addEventListener('click', () => {
            document.getElementById(overlayId).classList.add('hidden');
        });
        window.addEventListener('click', (e) => {
            if (e.target === document.getElementById(overlayId)) {
                document.getElementById(overlayId).classList.add('hidden');
            }
        });
    };

    modalLogic('termsLink', 'termsOverlay', 'closeTermsOverlay');
    modalLogic('personalDataLink', 'personalDataOverlay', 'closePersonalDataOverlay');
</script>