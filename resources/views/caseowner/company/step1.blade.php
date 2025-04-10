<div class="grid grid-cols-1 gap-6">
    <!-- Nama Perusahaan -->
    <div class="flex flex-col">
        <label class="text-gray-700">Company Name</label>
        <div class="flex items-center space-x-4">
            <input type="text" name="company_name" id="company_name" class="border px-4 py-2 rounded w-2/3" value="">
            <button type="button" class="border border-blue-700 text-blue-700 px-4 py-2 rounded-md hover:bg-blue-700 hover:text-white" onclick="toggleEdit('company_name')">
                Edit
            </button>
        </div>
    </div>

    <!-- Company Description -->
    <div class="flex flex-col">
        <label class="text-gray-700">Company Description</label>
        <div class="flex items-center space-x-4">
            <textarea name="company_description" id="company_description" class="border px-4 py-2 rounded w-2/3" rows="4" readonly></textarea>
            <button type="button" class="border border-blue-700 text-blue-700 px-4 py-2 rounded-md hover:bg-blue-700 hover:text-white" onclick="toggleEdit('company_description')">
                Edit
            </button>
        </div>
    </div>

    <!-- Date of Company Establishment -->
    <div class="flex flex-col">
        <label class="text-gray-700">Date of Company Establishment</label>
        <div class="flex items-center space-x-4">
            <input type="date" name="company_established_date" id="company_established_date" class="border px-4 py-2 rounded w-2/3" value="{{ old('company_established_date') }}">
            <button type="button" class="border border-blue-700 text-blue-700 px-4 py-2 rounded-md hover:bg-blue-700 hover:text-white" onclick="toggleEdit('company_established_date')">
                Edit
            </button>
        </div>
    </div>

    
    <!-- Company Domicile -->
    <div class="flex flex-col">
        <label class="text-gray-700">Company Domicile</label>
        <div class="flex items-center space-x-4">
            <input type="text" name="company_domicile" id="company_domicile" class="border px-4 py-2 rounded w-2/3" value="Bandung" readonly>
            <button type="button" class="border border-blue-700 text-blue-700 px-4 py-2 rounded-md hover:bg-blue-700 hover:text-white" onclick="toggleEdit('company_email')">
                Edit
            </button>
        </div>
    </div>

    <hr class="my-6 border-gray-300">

    <!-- Company Category -->
    <div class="flex flex-col">
        <label class="text-gray-700">Company Category</label>
        <div class="flex items-center space-x-4">
            <select name="company_category" id="company_category" class="border px-4 py-2 rounded w-2/3 bg-gray-100">
                <option value="">-- Select Category --</option>
                <option value="Technology">Technology</option>
                <option value="Healthcare">Healthcare</option>
                <option value="Finance">Finance</option>
                <option value="Education">Education</option>
                <option value="Retail">Retail</option>
            </select>
            <button type="button"
                class="border border-blue-700 text-blue-700 px-4 py-2 rounded-md hover:bg-blue-700 hover:text-white"
                onclick="toggleSelectEdit('company_category')">
                Edit
            </button>
        </div>
    </div>


    <!-- Total Number of Employees -->
    <div class="flex flex-col">
        <label class="text-gray-700">Total Number of Employees</label>
        <div class="flex items-center space-x-4">
            <input type="url" name="company_website" id="company_website" class="border px-4 py-2 rounded w-2/3" value="15 Employees" readonly>
            <button type="button" class="border border-blue-700 text-blue-700 px-4 py-2 rounded-md hover:bg-blue-700 hover:text-white" onclick="toggleEdit('company_website')">
                Edit
            </button>
        </div>
    </div>

    <!-- Email Perusahaan -->
    <div class="flex flex-col">
        <label class="text-gray-700">Total Number of Expansions</label>
        <div class="flex items-center space-x-4">
            <input type="email" name="company_email" id="company_email" class="border px-4 py-2 rounded w-2/3" value="10 company branches" readonly>
            <button type="button" class="border border-blue-700 text-blue-700 px-4 py-2 rounded-md hover:bg-blue-700 hover:text-white" onclick="toggleEdit('company_email')">
                Edit
            </button>
        </div>
    </div>

    <!-- Sosmed Perusahaan -->
    <div class="flex flex-col">
        <label class="text-gray-700">Profitability(Rp/Month)</label>
        <div class="flex items-center space-x-4">
            <input type="email" name="profitability" id="profitability" class="border px-4 py-2 rounded w-2/3" value="email@example.com" readonly>
            <button type="button" class="border border-blue-700 text-blue-700 px-4 py-2 rounded-md hover:bg-blue-700 hover:text-white" onclick="toggleEdit('company_email')">
                Edit
            </button>
        </div>
    </div>


</div>

<script>
    // Function to toggle the readonly attribute
    function toggleEdit(inputId) {
        var inputField = document.getElementById(inputId);
        if (inputField.readOnly) {
            inputField.readOnly = false; // Allow editing
        } else {
            inputField.readOnly = true; // Make it readonly again
        }
    }

    function toggleEdit(id) {
        const field = document.getElementById(id);
        if (field.hasAttribute('readonly')) {
            field.removeAttribute('readonly');
            field.focus();
        } else {
            field.setAttribute('readonly', true);
        }
    }
</script>
