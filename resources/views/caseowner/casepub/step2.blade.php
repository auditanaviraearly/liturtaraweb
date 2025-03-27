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
            <button type="button" id="textBtn" class="bg-[#00114F] text-white px-6 py-2 rounded-md flex items-center gap-2 hover:bg-[#00227f] transition duration-200">
                Text
            </button>
            <button type="button" id="documentBtn" class="prevBtn border border-[#00114F] text-[#00114F] bg-transparent px-6 py-2 rounded-md hover:bg-[#00114F] hover:text-white transition duration-200">
                Document
            </button>
        </div>

        <form>
            <div class="mb-4">
                <label for="case_name" class="block text-sm font-medium text-gray-700">Case Name</label>
                <input type="text" name="case_name" id="case_name" class="w-full mt-1 p-2 border rounded-md" required>
            </div>

            <div class="mb-4">
                <label for="case_category" class="block text-sm font-medium text-gray-700">Case Category</label>
                <select name="case_category" id="case_category" class="w-full mt-1 p-2 border rounded-md" required>
                    <option value="">-- Select Category --</option>
                    <option value="Finance">Finance</option>
                    <option value="Tech">Tech</option>
                    <option value="Health">Health</option>
                    <option value="Education">Education</option>
                    <option value="Environment">Environment</option>
                    <option value="Government">Government</option>
                    <option value="Others">Others</option>
                </select>
            </div>

            <div class="mb-4">
                <label for="case_description" class="block text-sm font-medium text-gray-700">Case Description</label>
                <textarea name="case_description" id="case_description" rows="3" class="w-full mt-1 p-2 border rounded-md" required></textarea>
            </div>

            <div class="mb-4">
                <label for="category_level" class="block text-sm font-medium text-gray-700">Category Level</label>
                <select name="category_level" id="category_level" class="w-full mt-1 p-2 border rounded-md" required>
                    <option value="">-- Select Level --</option>
                    <option value="Low">Low</option>
                    <option value="Moderate">Moderate</option>
                    <option value="High">High</option>
                </select>
            </div>

            <div class="mb-4">
                <label for="input_link" class="block text-sm font-medium text-gray-700">Input Link (Optional)</label>
                <input type="url" name="input_link" id="input_link" class="w-full mt-1 p-2 border rounded-md">
            </div>

            <!-- Navigasi -->
            <div class="flex justify-start mt-6 space-x-4">
                <button type="button" class="prevBtn border border-[#00114F] text-[#00114F] bg-transparent px-6 py-2 rounded-md hover:bg-[#00114F] hover:text-white transition duration-200">
                ← Prev
                </button>
                <button type="button" class="nextBtn bg-[#00114F] text-white px-6 py-2 rounded-md hover:bg-[#00227f] transition duration-200">
                    Next →
                </button>
            </div>
        </form>
    </div>
</div>
