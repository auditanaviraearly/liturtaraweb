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

            <button type="button" id="documentBtn"
                class="prevBtn border border-[#00114F] text-[#00114F] bg-transparent px-6 py-2 rounded-md hover:bg-[#00114F] hover:text-white transition duration-200">
                Document
            </button>
        </div>

        <!-- Form 5W1H -->
        <form>
            <div class="mb-4">
                <label for="what" class="block text-sm font-medium text-gray-700">What (Apa yang terjadi?)</label>
                <textarea name="what" id="what" rows="3"
                    class="w-full mt-1 p-2 border rounded-md focus:ring-2 focus:ring-[#00114F] focus:outline-none" required></textarea>
            </div>

            <div class="mb-4">
                <label for="who" class="block text-sm font-medium text-gray-700">Who (Siapa yang terlibat?)</label>
                <textarea name="who" id="who" rows="3"
                    class="w-full mt-1 p-2 border rounded-md focus:ring-2 focus:ring-[#00114F] focus:outline-none" required></textarea>
            </div>

            <div class="mb-4">
                <label for="when" class="block text-sm font-medium text-gray-700">When (Kapan kejadian ini?)</label>
                <textarea name="when" id="when" rows="2"
                    class="w-full mt-1 p-2 border rounded-md focus:ring-2 focus:ring-[#00114F] focus:outline-none" required></textarea>
            </div>

            <div class="mb-4">
                <label for="where" class="block text-sm font-medium text-gray-700">Where (Di mana lokasinya?)</label>
                <textarea name="where" id="where" rows="2"
                    class="w-full mt-1 p-2 border rounded-md focus:ring-2 focus:ring-[#00114F] focus:outline-none" required></textarea>
            </div>

            <div class="mb-4">
                <label for="why" class="block text-sm font-medium text-gray-700">Why (Mengapa hal ini terjadi?)</label>
                <textarea name="why" id="why" rows="3"
                    class="w-full mt-1 p-2 border rounded-md focus:ring-2 focus:ring-[#00114F] focus:outline-none" required></textarea>
            </div>

            <div class="mb-4">
                <label for="how" class="block text-sm font-medium text-gray-700">How (Bagaimana kejadiannya?)</label>
                <textarea name="how" id="how" rows="3"
                    class="w-full mt-1 p-2 border rounded-md focus:ring-2 focus:ring-[#00114F] focus:outline-none" required></textarea>
            </div>

            <div class="flex justify-start mt-6 space-x-4">
                <button type="button"
                    class="prevBtn border border-[#00114F] text-[#00114F] bg-transparent px-6 py-2 rounded-md hover:bg-[#00114F] hover:text-white transition duration-200">
                    ← Prev
                </button>
                <button type="button"
                    class="nextBtn bg-[#00114F] text-white px-6 py-2 rounded-md hover:bg-[#00227f] transition duration-200">
                    Next →
                </button>
            </div>
        </form>
    </div>
</div>