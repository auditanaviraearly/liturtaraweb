<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1" name="viewport" />
  <title>
    Liturtara Solution Form
  </title>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&amp;display=swap" rel="stylesheet" />
  <style>
    body {
      font-family: 'Inter', sans-serif;
    }
  </style>
</head>

<body class="bg-white text-gray-900">
  @include('navbartr')
  <!-- Main Content -->
  <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-8 mb-20">
    <section>
      <h1 class="text-[#0F1E4F] font-extrabold text-lg leading-6 mb-0.5">
        Lorem Ipsum (Judul Masalah)
      </h1>
      <p class="text-xs text-gray-600 mb-4">
        Solution Form
      </p>
      <a class="inline-block text-xs text-[#0F1E4F] mb-6 hover:underline" href="#">
        ← Back
      </a>
      <form class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="md:col-span-2 space-y-6">
          <div>
            <label class="block text-xs font-semibold text-[#0F1E4F] mb-1" for="title">
              Title
            </label>
            <input class="w-full rounded-md border border-gray-300 bg-gray-100 text-xs text-gray-700 placeholder-gray-300 py-2 px-3 focus:outline-none focus:ring-2 focus:ring-[#0F1E4F]" id="title" name="title" type="text" value="Lorem Ipsum" />
          </div>
          <div>
            <label class="block text-xs font-semibold text-[#0F1E4F] mb-1" for="abstract">
              Abstract
            </label>
            <textarea class="w-full rounded-md border border-gray-300 text-xs text-gray-300 placeholder-gray-300 py-2 px-3 resize-none focus:outline-none focus:ring-2 focus:ring-[#0F1E4F]" id="abstract" name="abstract" placeholder="Ketik deskripsi singkat berkasmu..." rows="3"></textarea>
          </div>
          <div>
            <label class="block text-xs font-semibold text-[#0F1E4F] mb-1" for="solution">
              Solution
            </label>
            <textarea class="w-full rounded-md border border-gray-300 text-xs text-gray-300 placeholder-gray-300 py-2 px-3 resize-none focus:outline-none focus:ring-2 focus:ring-[#0F1E4F]" id="solution" name="solution" placeholder="Ketik deskripsi singkat berkasmu..." rows="3"></textarea>
          </div>
          <div>
            <label class="block text-xs font-semibold text-[#0F1E4F] mb-1" for="file">
              File
            </label>
            <input class="w-full rounded-md border border-gray-300 text-xs text-gray-700 py-1 px-2 focus:outline-none focus:ring-2 focus:ring-[#0F1E4F]" id="file" name="file" type="file" />
          </div>
          <div>
            <button class="bg-[#0F1E4F] text-white text-xs font-semibold rounded px-4 py-2 hover:bg-[#0a1635] transition flex items-center space-x-1" type="submit">
              <span>
                Submit
              </span>
              <svg class="h-3 w-3" fill="none" stroke="currentColor" stroke-width="2" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path d="M17 8l4 4m0 0l-4 4m4-4H3" stroke-linecap="round" stroke-linejoin="round">
                </path>
              </svg>
            </button>
          </div>
        </div>
        <aside class="border border-gray-300 rounded-md p-3 text-xs text-[#0F1E4F]">
          <div class="mb-2 font-semibold">
            Revision History
          </div>
          <div class="mb-2">
            <div class="flex items-center space-x-2 mb-1">
              <label class="cursor-pointer" title="Upload file">
                <i class="fas fa-file-upload">
                </i>
              </label>
              <label class="cursor-pointer" title="Download file">
                <i class="fas fa-file-download">
                </i>
              </label>
              <label class="cursor-pointer" title="Play file">
                <i class="fas fa-play">
                </i>
              </label>
            </div>
            <div class="flex items-center space-x-2">
              <span class="font-semibold">
                Font
              </span>
              <button aria-label="Bold font" class="font-bold">
                B
              </button>
              <button aria-label="Italic font" class="italic">
                I
              </button>
              <button aria-label="Underline font" class="underline">
                U
              </button>
              <select aria-label="Font selection" class="border border-gray-300 rounded text-xs text-[#0F1E4F] px-1 py-0.5" style="font-family: 'Calibri', sans-serif" value="Calibri">
                <option selected="" value="Calibri">
                  Calibri
                </option>
                <option value="Arial">
                  Arial
                </option>
                <option value="Times New Roman">
                  Times New Roman
                </option>
              </select>
              <select aria-label="Font size" class="border border-gray-300 rounded text-xs text-[#0F1E4F] px-1 py-0.5" value="24">
                <option value="12">
                  12
                </option>
                <option value="14">
                  14
                </option>
                <option value="18">
                  18
                </option>
                <option selected="" value="24">
                  24
                </option>
                <option value="36">
                  36
                </option>
              </select>
            </div>
          </div>
        </aside>
      </form>
    </section>
  </main>
  @include('bottom')
</body>

</html>