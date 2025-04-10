    <!-- Nomor Telepon -->
    <div class="flex flex-col">
        <label class="text-gray-700">Nomor Telepon</label>
        <div class="flex items-center space-x-4">
            <input type="text" name="company_phone" id="company_phone" class="border px-4 py-2 rounded w-2/3" value="+62 812-3456-7890" readonly>
            <button type="button" class="border border-blue-700 text-blue-700 px-4 py-2 rounded-md hover:bg-blue-700 hover:text-white" onclick="toggleEdit('company_phone')">
                Edit
            </button>
        </div>
    </div>

    <!-- Website -->
    <div class="flex flex-col">
        <label class="text-gray-700">Website (opsional)</label>
        <div class="flex items-center space-x-4">
            <input type="url" name="company_website" id="company_website" class="border px-4 py-2 rounded w-2/3" value="https://www.example.com" readonly>
            <button type="button" class="border border-blue-700 text-blue-700 px-4 py-2 rounded-md hover:bg-blue-700 hover:text-white" onclick="toggleEdit('company_website')">
                Edit
            </button>
        </div>
    </div>

    <!-- Email Perusahaan -->
    <div class="flex flex-col">
        <label class="text-gray-700">Email Perusahaan</label>
        <div class="flex items-center space-x-4">
            <input type="email" name="company_email" id="company_email" class="border px-4 py-2 rounded w-2/3" value="email@example.com" readonly>
            <button type="button" class="border border-blue-700 text-blue-700 px-4 py-2 rounded-md hover:bg-blue-700 hover:text-white" onclick="toggleEdit('company_email')">
                Edit
            </button>
        </div>
    </div>

    <!-- Sosmed Perusahaan -->
    <div class="flex flex-col">
        <label class="text-gray-700">Social Media Company</label>
        <div class="flex items-center space-x-4">
            <input type="email" name="company_sosmed" id="company_sosmed" class="border px-4 py-2 rounded w-2/3" value="email@example.com" readonly>
            <button type="button" class="border border-blue-700 text-blue-700 px-4 py-2 rounded-md hover:bg-blue-700 hover:text-white" onclick="toggleEdit('company_email')">
                Edit
            </button>
        </div>
    </div>
