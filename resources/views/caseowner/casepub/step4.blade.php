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

        <form method="POST" action="{{ route('casepub.postStep4') }}" class="mt-6">
            @csrf

            <div class="mb-4">
                <label for="early_due_date" class="block text-sm font-medium text-gray-700">Early Due Date</label>
                <input type="date" name="early_due_date" id="early_due_date"
                    class="w-full mt-1 p-2 border rounded-md focus:ring-2 focus:ring-[#00114F] focus:outline-none" required>
            </div>

            <div class="mb-4">
                <label for="final_due_date" class="block text-sm font-medium text-gray-700">Final Due Date</label>
                <input type="date" name="final_due_date" id="final_due_date"
                    class="w-full mt-1 p-2 border rounded-md focus:ring-2 focus:ring-[#00114F] focus:outline-none" required>
            </div>

            <!-- Ceklis Setuju dengan UU -->
            <div class="mb-4 flex items-center">
                <input type="checkbox" name="agree_uu" id="agree_uu"
                    class="mr-2 w-4 h-4 text-[#00114F] border-gray-300 rounded focus:ring-[#00114F]">
                <label for="agree_uu" class="text-sm text-gray-700">Setuju dengan UU</label>
            </div>

            <!-- Ceklis Setuju dengan SK -->
            <div class="mb-4 flex items-center">
                <input type="checkbox" name="agree_sk" id="agree_sk"
                    class="mr-2 w-4 h-4 text-[#00114F] border-gray-300 rounded focus:ring-[#00114F]">
                <label for="agree_sk" class="text-sm text-gray-700">Setuju dengan SK</label>
            </div>

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
