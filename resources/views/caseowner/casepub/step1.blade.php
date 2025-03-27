<div class="flex flex-col md:flex-row gap-8 items-center">
    <!-- Gambar di kiri -->
    <div class="w-[300px] h-[1000px] md:w-1/2 flex justify-center items-center overflow-hidden">
        <img src="{{ asset('storage/loginimg.png') }}"
            alt="Ilustrasi Kasus"
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
            <button type="button"
                class="border border-[#00114F] text-[#00114F] bg-transparent px-6 py-2 rounded-md hover:bg-[#00114F] hover:text-white transition duration-200">
                Document
            </button>

        </div>

        <form>
            <div class="mb-4">
                <label for="fullname" class="block text-sm font-medium text-gray-700">Full Name</label>
                <input type="text" name="fullname" id="fullname" class="w-full mt-1 p-2 border rounded-md" required>
            </div>

            <div class="mb-4">
                <label for="phone_number" class="block text-sm font-medium text-gray-700">Phone Number</label>
                <input type="text" name="phone_number" id="phone_number" class="w-full mt-1 p-2 border rounded-md" required>
            </div>

            <div class="mb-4">
                <label for="case_description" class="block text-sm font-medium text-gray-700">Case Description</label>
                <textarea name="case_description" id="case_description" rows="3"
                    class="w-full mt-1 p-2 border rounded-md" required></textarea>
            </div>

            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" name="email" id="email" class="w-full mt-1 p-2 border rounded-md">
            </div>

            <div class="mb-4">
                <label for="company_name" class="block text-sm font-medium text-gray-700">Company Name</label>
                <input type="text" name="company_name" id="company_name" class="w-full mt-1 p-2 border rounded-md">
            </div>

            <div class="flex justify-start mt-6 space-x-4">
                <button type="button"
                    class="nextBtn bg-[#00114F] text-white px-6 py-2 rounded-md hover:bg-[#00227f] transition duration-200">
                    Next →
                </button>
            </div>
        </form>
    </div>
</div>

<script>
    document.getElementById('textBtn').addEventListener('click', function () {
        window.location.href = "{{ route('casepub.step1') }}";
    });
</script>