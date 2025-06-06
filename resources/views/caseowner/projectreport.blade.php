<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Liturtara Project</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
  />
  <link
    href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap"
    rel="stylesheet"
  />
  <style>
    body {
      font-family: "Inter", sans-serif;
    }
  </style>
</head>
<body class="bg-white text-[#0B1B4D]">
    
@include('navbar')

  <!-- Main content -->
  <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-8 mb-20">
    <h1 class="text-[#0B1B4D] font-bold text-lg mb-3">Project</h1>
    <button
      class="text-[#0B1B4D] text-xs font-semibold flex items-center mb-4 hover:underline"
      aria-label="Back"
    >
      <svg
        class="w-3 h-3 mr-1"
        fill="none"
        stroke="#0B1B4D"
        stroke-width="2"
        viewBox="0 0 24 24"
        xmlns="http://www.w3.org/2000/svg"
      >
        <path d="M15 19l-7-7 7-7" stroke-linecap="round" stroke-linejoin="round"></path>
      </svg>
      Back
    </button>

    <div class="flex flex-wrap gap-3 text-xs font-semibold text-[#0B1B4D] mb-4">
      <button class="px-2 py-1 rounded border border-[#0B1B4D] hover:bg-[#0B1B4D] hover:text-white transition">
        All
      </button>
      <button class="px-2 py-1 rounded border border-[#0B1B4D] hover:bg-[#0B1B4D] hover:text-white transition">
        Ongoing
      </button>
      <button class="px-2 py-1 rounded border border-[#0B1B4D] hover:bg-[#0B1B4D] hover:text-white transition">
        Completed
      </button>
      <button class="px-2 py-1 rounded border border-[#0B1B4D] hover:bg-[#0B1B4D] hover:text-white transition">
        Declined
      </button>
      <button class="px-2 py-1 rounded border border-[#0B1B4D] hover:bg-[#0B1B4D] hover:text-white transition">
        Pending Approval
      </button>
      <button class="px-2 py-1 rounded border border-[#0B1B4D] hover:bg-[#0B1B4D] hover:text-white transition">
        Draft
      </button>
      <div
        class="ml-auto flex items-center space-x-1 text-xs text-[#0B1B4D] cursor-pointer select-none"
        aria-label="Sort by Date"
      >
        <span>Date</span>
        <svg
          class="w-3 h-3"
          fill="none"
          stroke="currentColor"
          stroke-width="2"
          viewBox="0 0 24 24"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path d="M19 9l-7 7-7-7" stroke-linecap="round" stroke-linejoin="round"></path>
        </svg>
        <svg
          class="w-3 h-3"
          fill="none"
          stroke="currentColor"
          stroke-width="2"
          viewBox="0 0 24 24"
          xmlns="http://www.w3.org/2000/svg"
        >
          <circle cx="11" cy="11" r="8" stroke-width="2"></circle>
          <line x1="21" y1="21" x2="16.65" y2="16.65" stroke-linecap="round" stroke-width="2"></line>
        </svg>
      </div>
    </div>

    <div class="overflow-x-auto border border-gray-300 rounded text-xs">
      <table class="w-full border-collapse border border-gray-300">
        <thead class="bg-white text-[#0B1B4D] font-semibold">
          <tr>
            <th class="border border-gray-300 px-2 py-1 text-left max-w-[180px]">Case Tittle</th>
            <th class="border border-gray-300 px-2 py-1 text-left w-[90px]">Approval</th>
            <th class="border border-gray-300 px-2 py-1 text-left w-[120px]">Date</th>
            <th class="border border-gray-300 px-2 py-1 text-left w-[120px]">Draft</th>
            <th class="border border-gray-300 px-2 py-1 text-left w-[220px]">Action</th>
          </tr>
        </thead>
        <tbody class="text-[#0B1B4D]">
          <tr>
            <td
              class="border border-gray-300 px-2 py-1 max-w-[180px] truncate"
              title="Lorem ipsum dolor sit amet"
            >
              Lorem ipsum dolor sit amet
            </td>
            <td class="border border-gray-300 px-2 py-1 font-semibold">Ongoing</td>
            <td class="border border-gray-300 px-2 py-1">11 Desember 2025</td>
            <td class="border border-gray-300 px-2 py-1 flex items-center space-x-2">
              <span>Draft3.txt</span>
              <button
                aria-label="Revision Version"
                class="text-xs border border-gray-300 rounded px-2 py-0.5 flex items-center space-x-1 text-[#0B1B4D] hover:bg-gray-100"
              >
                <span>Revision Version</span>
                <svg
                  class="w-3 h-3"
                  fill="none"
                  stroke="currentColor"
                  stroke-width="2"
                  viewBox="0 0 24 24"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M4 18v-2a4 4 0 014-4h12"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  ></path>
                </svg>
              </button>
            </td>
            <td class="border border-gray-300 px-2 py-1 flex flex-wrap gap-1">
              <button
                aria-label="Complete Case"
                class="text-xs border border-gray-300 rounded px-2 py-0.5 flex items-center space-x-1 text-[#0B1B4D] hover:bg-gray-100"
              >
                <span>Complete Case</span>
                <i class="fas fa-check"></i>
              </button>
              <button
                aria-label="Resign Case"
                class="text-xs border border-gray-300 rounded px-2 py-0.5 flex items-center space-x-1 text-[#0B1B4D] hover:bg-gray-100"
              >
                <span>Resign Case</span>
                <i class="fas fa-times"></i>
              </button>
              <button
                aria-label="Chat"
                class="text-xs border border-gray-300 rounded px-2 py-0.5 text-[#0B1B4D] hover:bg-gray-100"
              >
                Chat
              </button>
            </td>
          </tr>
          <tr>
            <td
              class="border border-gray-300 px-2 py-1 max-w-[180px] truncate"
              title="consectetur adipiscing elit..."
            >
              consectetur adipiscing elit...
            </td>
            <td class="border border-gray-300 px-2 py-1">Pending</td>
            <td class="border border-gray-300 px-2 py-1">12 Desember 2025</td>
            <td class="border border-gray-300 px-2 py-1 flex items-center space-x-2">
              <span>Draft.txt</span>
              <button
                aria-label="Revision Version"
                class="text-xs border border-gray-300 rounded px-2 py-0.5 flex items-center space-x-1 text-[#0B1B4D] hover:bg-gray-100"
              >
                <span>Revision Version</span>
                <svg
                  class="w-3 h-3"
                  fill="none"
                  stroke="currentColor"
                  stroke-width="2"
                  viewBox="0 0 24 24"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M4 18v-2a4 4 0 014-4h12"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  ></path>
                </svg>
              </button>
            </td>
            <td class="border border-gray-300 px-2 py-1 flex flex-wrap gap-1">
              <button
                aria-label="Complete Case disabled"
                class="text-xs border border-gray-300 rounded px-2 py-0.5 flex items-center space-x-1 text-gray-300 cursor-not-allowed"
                disabled
              >
                <span>Complete Case</span>
                <i class="fas fa-check"></i>
              </button>
              <button
                aria-label="Resign Case"
                class="text-xs border border-gray-300 rounded px-2 py-0.5 flex items-center space-x-1 text-[#0B1B4D] hover:bg-gray-100"
              >
                <span>Resign Case</span>
                <i class="fas fa-times"></i>
              </button>
              <button
                aria-label="Chat"
                class="text-xs border border-gray-300 rounded px-2 py-0.5 text-[#0B1B4D] hover:bg-gray-100"
              >
                Chat
              </button>
            </td>
          </tr>
          <tr>
            <td
              class="border border-gray-300 px-2 py-1 max-w-[180px] truncate"
              title="incididunt ut labore et dolore..."
            >
              incididunt ut labore et dolore...
            </td>
            <td class="border border-gray-300 px-2 py-1">Declined</td>
            <td class="border border-gray-300 px-2 py-1">07 Desember 2025</td>
            <td class="border border-gray-300 px-2 py-1 flex items-center space-x-2">
              <span>Draft.txt</span>
              <button
                aria-label="Revision Version"
                class="text-xs border border-gray-300 rounded px-2 py-0.5 flex items-center space-x-1 text-[#0B1B4D] hover:bg-gray-100"
              >
                <span>Revision Version</span>
                <svg
                  class="w-3 h-3"
                  fill="none"
                  stroke="currentColor"
                  stroke-width="2"
                  viewBox="0 0 24 24"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M4 18v-2a4 4 0 014-4h12"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  ></path>
                </svg>
              </button>
            </td>
            <td class="border border-gray-300 px-2 py-1 flex flex-wrap gap-1">
              <button
                aria-label="Complete Case disabled"
                class="text-xs border border-gray-300 rounded px-2 py-0.5 flex items-center space-x-1 text-gray-300 cursor-not-allowed"
                disabled
              >
                <span>Complete Case</span>
                <i class="fas fa-check"></i>
              </button>
              <button
                aria-label="Resign Case disabled"
                class="text-xs border border-gray-300 rounded px-2 py-0.5 flex items-center space-x-1 text-gray-300 cursor-not-allowed"
                disabled
              >
                <span>Resign Case</span>
                <i class="fas fa-times"></i>
              </button>
              <button
                aria-label="Chat"
                class="text-xs border border-gray-300 rounded px-2 py-0.5 text-[#0B1B4D] hover:bg-gray-100"
              >
                Chat
              </button>
            </td>
          </tr>
          <tr>
            <td
              class="border border-gray-300 px-2 py-1 max-w-[180px] truncate"
              title="Ut enim ad minim veniam"
            >
              Ut enim ad minim veniam
            </td>
            <td class="border border-gray-300 px-2 py-1">Draft</td>
            <td class="border border-gray-300 px-2 py-1">14 Desember 2025</td>
            <td class="border border-gray-300 px-2 py-1 flex items-center space-x-2">
              <span>Draft.txt</span>
              <button
                aria-label="Revision Version"
                class="text-xs border border-gray-300 rounded px-2 py-0.5 flex items-center space-x-1 text-[#0B1B4D] hover:bg-gray-100"
              >
                <span>Revision Version</span>
                <svg
                  class="w-3 h-3"
                  fill="none"
                  stroke="currentColor"
                  stroke-width="2"
                  viewBox="0 0 24 24"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M4 18v-2a4 4 0 014-4h12"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  ></path>
                </svg>
              </button>
            </td>
            <td class="border border-gray-300 px-2 py-1 flex flex-wrap gap-1">
              <button
                aria-label="Aijukan Solusi"
                class="text-xs border border-gray-300 rounded px-2 py-0.5 flex items-center space-x-1 text-[#0B1B4D] hover:bg-gray-100"
              >
                <span>Aijukan Solusi</span>
                <i class="fas fa-arrow-right"></i>
              </button>
              <button
                aria-label="Chat"
                class="text-xs border border-gray-300 rounded px-2 py-0.5 text-[#0B1B4D] hover:bg-gray-100"
              >
                Chat
              </button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </main>
@include('bottom')
</body>
</html>