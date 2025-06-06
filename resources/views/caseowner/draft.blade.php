<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>
        Liturtara Draft Page
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
@include('navbar')
    <!-- Main content -->
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-8 mb-20">
        <section>
            <h1 class="text-xl font-extrabold text-[#0B1E4F] leading-tight">
                Ut enim ad minim veniam
            </h1>
            <p class="text-xs font-normal text-gray-600 mt-1 mb-4">
                Project Draft
            </p>
            <hr class="border-gray-300 mb-6" />
            <div class="flex flex-col md:flex-row md:space-x-6">
                <form class="flex-1 space-y-4">
                    <div>
                        <label class="block text-xs font-normal text-gray-700 mb-1" for="title">
                            Title (Required)
                        </label>
                        <input class="w-full border border-gray-300 rounded px-2 py-1 text-xs text-gray-900" id="title" type="text" value="Lorem ipsum dolor sit amet" />
                    </div>
                    <div>
                        <label class="block text-xs font-normal text-gray-700 mb-1" for="abstract">
                            Abstract
                        </label>
                        <textarea class="w-full border border-gray-300 rounded px-2 py-1 text-xs text-gray-900 resize-none" id="abstract" rows="3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</textarea>
                    </div>
                    <div>
                        <label class="block text-xs font-normal text-gray-700 mb-1" for="background">
                            Background
                        </label>
                        <textarea class="w-full border border-gray-300 rounded px-2 py-1 text-xs text-gray-900 resize-none" id="background" rows="2">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</textarea>
                    </div>
                    <div>
                        <label class="block text-xs font-normal text-gray-700 mb-1" for="content">
                            Content
                        </label>
                        <textarea class="w-full border border-gray-300 rounded px-2 py-1 text-xs text-gray-900 resize-none" id="content" placeholder="Start typing" rows="2"></textarea>
                    </div>
                    <button class="mt-2 text-xs font-semibold text-gray-900 hover:underline focus:outline-none" type="button">
                        + Add Section
                    </button>
                </form>
                <!-- Action panel -->
                <aside aria-label="Revision Version and Actions" class="mt-6 md:mt-0 w-full md:w-64 border border-gray-300 rounded p-3 text-xs text-gray-900 flex flex-col space-y-3">
                    <div class="font-semibold border-b border-gray-300 pb-1 mb-2">
                        Revision Version
                    </div>
                    <div class="space-y-1">
                        <div class="flex justify-between">
                            <span class="font-semibold">
                                Metadata
                            </span>
                            <button aria-label="Refresh metadata" class="text-gray-600 hover:text-gray-900 focus:outline-none">
                                <i class="fas fa-sync-alt">
                                </i>
                            </button>
                        </div>
                        <div class="text-gray-700">
                            <p>
                                Title: Draft1.txt
                            </p>
                            <p>
                                Word Count: 308
                            </p>
                            <p>
                                Revision: 3
                            </p>
                        </div>
                    </div>
                    <div class="border-t border-gray-300 pt-2">
                        <label class="block font-semibold mb-1" for="font">
                            Font
                        </label>
                        <div class="flex items-center space-x-1 mb-2">
                            <button aria-label="Bold" class="border border-gray-400 rounded px-1 py-0.5 font-bold text-xs hover:bg-gray-100 focus:outline-none">
                                B
                            </button>
                            <button aria-label="Italic" class="border border-gray-400 rounded px-1 py-0.5 italic text-xs hover:bg-gray-100 focus:outline-none">
                                I
                            </button>
                            <button aria-label="Underline" class="border border-gray-400 rounded px-1 py-0.5 underline text-xs hover:bg-gray-100 focus:outline-none">
                                U
                            </button>
                        </div>
                        <select aria-label="Font family selection" class="w-full border border-gray-300 rounded px-2 py-1 text-xs text-gray-900" id="font">
                            <option>
                                Calibri
                            </option>
                            <option>
                                Arial
                            </option>
                            <option>
                                Times New Roman
                            </option>
                        </select>
                        <input aria-label="Font size" class="w-full border border-gray-300 rounded mt-1 px-2 py-1 text-xs text-gray-900" max="72" min="8" type="number" value="24" />
                    </div>
                    <div class="flex space-x-2 mt-2">
                        <button class="flex-1 border border-gray-300 rounded px-2 py-1 text-xs font-semibold hover:bg-gray-100 focus:outline-none" type="button">
                            Ajukan Solusi
                        </button>
                        <button class="flex-1 border border-gray-300 rounded px-2 py-1 text-xs font-semibold hover:bg-gray-100 focus:outline-none" type="button">
                            Chat
                        </button>
                    </div>
                </aside>
            </div>
        </section>
    </main>
@include('bottom')
</body>

</html>