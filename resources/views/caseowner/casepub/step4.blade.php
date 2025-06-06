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
<div id="termsOverlay" class="hidden fixed inset-0 bg-black bg-opacity-30 backdrop-blur-sm z-50 flex items-center justify-center p-4">
    <!-- Modal box -->
    <div class="bg-white w-full max-w-3xl max-h-[90vh] p-6 rounded-lg shadow-lg relative overflow-hidden">

        <!-- Close button -->
        <button id="closeTermsOverlay" class="absolute top-2 right-3 text-gray-500 hover:text-red-600 text-2xl">
            &times;
        </button>

        <!-- Content container -->
        <div class="overflow-y-auto max-h-[80vh] pr-2 space-y-6">
            <!-- Terms and Conditions -->
            <div>
                <h2 class="text-xl font-bold mb-4 text-[#00114F]">Terms and Conditions</h2>
                <div class="space-y-4 text-sm text-gray-700 text-justify">
                    <p><strong>Acceptance of Terms:</strong> By accessing and using this website, you agree to be bound by the Terms and Conditions set forth herein. If you do not agree with any part of these terms, please do not use our website.</p>
                    <p><strong>Changes to Terms:</strong> We reserve the right to modify these Terms and Conditions at any time without prior notice. Changes will take effect immediately upon being posted on the website. Your continued use of the website after such changes constitutes your acceptance of the revised terms.</p>
                    <p><strong>User Obligations:</strong> You agree to use this website solely for lawful purposes and in accordance with applicable laws and regulations. You are prohibited from uploading or distributing content that infringes on copyright, is obscene, or violates the privacy of others.</p>
                    <p><strong>Intellectual Property Rights:</strong> All content on this website, including but not limited to text, images, logos, and software, is owned by us or our licensors and is protected under applicable copyright laws.</p>
                    <p><strong>Limitation of Liability:</strong> We are not liable for any loss or damage arising from the use of, or inability to use, this website, including but not limited to errors or omissions in the content.</p>
                    <p><strong>Links to Third-Party Sites:</strong> Our website may contain links to third-party websites that are not owned or controlled by us. We are not responsible for the content or privacy practices of those third-party sites.</p>
                    <p><strong>Governing Law:</strong> These Terms and Conditions shall be governed by and construed in accordance with the laws of Indonesia.</p>
                </div>
            </div>

            <!-- Privacy Policy -->
            <div>
                <h2 class="text-xl font-bold mb-4 text-[#00114F]">Privacy Policy</h2>
                <div class="space-y-4 text-sm text-gray-700 text-justify">
                    <p><strong>Information Collection:</strong> We collect personal information that you voluntarily provide during registration, such as your name, email address, and phone number. In addition, we may collect non-personal information such as website usage data through cookies.</p>
                    <p><strong>Use of Information:</strong> The information we collect is used to: process registration and manage your account; improve our website services and content; send you relevant information or promotional materials.</p>
                    <p><strong>Information Protection:</strong> We are committed to protecting your personal information by implementing reasonable security measures to prevent unauthorized access, use, or disclosure.</p>
                    <p><strong>Information Sharing:</strong> We do not sell, trade, or rent your personal information to third parties without your consent, except as required by law.</p>
                    <p><strong>Cookies:</strong> Our website uses cookies to enhance the user experience. You can configure your browser to refuse cookies, but this may affect the functionality of the website.</p>
                    <p><strong>Changes to the Privacy Policy:</strong> We may update this Privacy Policy from time to time. Changes will be posted on this page, and your continued use of the website after such changes constitutes your acceptance of the updated policy.</p>
                    <p><strong>Contact:</strong> If you have any questions or concerns regarding this Privacy Policy, please contact us via email at <a href="mailto:admin@liturtara.com" class="text-blue-600 hover:underline">admin@liturtara.com</a>.</p>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Popup Overlay Personal Data Protection -->
<div id="personalDataOverlay"
    class="hidden fixed inset-0 bg-black bg-opacity-30 backdrop-blur-sm flex justify-center items-center z-50">
    <div class="bg-white w-3/4 md:w-1/2 lg:w-1/3 p-6 rounded-lg shadow-lg relative">
        <button id="closePersonalDataOverlay"
            class="absolute top-2 right-3 text-gray-500 hover:text-red-600 text-2xl">&times;</button>
        <h2 class="text-xl font-bold mb-4 text-[#00114F]">Personal Data Protection Consent</h2>
        <div class="overflow-y-auto max-h-64 space-y-4 text-sm text-gray-600 text-justify">
            <p>By registering and using liturtara.com, I acknowledge that I have read, understood, and agreed to the Privacy Policy and applicable Terms and Conditions, including the provisions of Law No. 27 of 2022 on Personal Data Protection (PDP Law).</p>

            <p>As a data subject, I understand that I have the following rights under the PDP Law, including but not limited to:</p>
            <ul class="list-disc list-inside ml-4">
                <li><strong>Right to Information:</strong> I have the right to know the identity, legal basis, and purpose of data collection and processing.</li>
                <li><strong>Right to Access and Correction:</strong> I have the right to access and update the personal data I have provided.</li>
                <li><strong>Right to Erasure and Withdrawal of Consent:</strong> I have the right to terminate processing, delete, and withdraw my consent regarding the use of my personal data in accordance with applicable laws.</li>
                <li><strong>Right to Data Protection:</strong> I understand that my data will be processed securely and confidentially in compliance with regulations.</li>
                <li><strong>Right to Compensation:</strong> I have the right to claim compensation if my personal data is misused or unlawfully processed.</li>
            </ul>

            <p class="font-semibold">Consent Statement</p>
            <p>Hereby, I give explicit consent to liturtara.com to:</p>
            <ul class="list-disc list-inside ml-4">
                <li>Collect, store, process, and use my personal data in accordance with the applicable privacy policy.</li>
                <li>Use my data for service delivery, administration, and site development purposes.</li>
                <li>Share my personal data with third parties collaborating with liturtara.com within the scope permitted by law.</li>
            </ul>

            <p>I understand that I may withdraw this consent at any time by submitting a formal request via the contact information provided in the liturtara.com Privacy Policy.</p>
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