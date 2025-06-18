<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>
        Token Purchase
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
    <script src="//unpkg.com/alpinejs" defer></script>

</head>

@include('navbar')

<body>
    <div class="min-h-screen flex flex-col items-center justify-center px-4 py-12" style="background: radial-gradient(circle at top left, #f9fafc 0%, #e6f0ff 60%), radial-gradient(circle at bottom right, #d9f7e4 0%, #ffffff 60%)">
        <img src="{{ asset('storage/logo1.1.png') }}" alt="Logo" width="48" height="48" class="mb-6">
        <h1 class="text-center text-navy-900 font-semibold text-lg md:text-xl leading-tight text-[#0B1446]">
            Select the number of tokens that
            <br class="hidden sm:inline" />
            suits your needs.
        </h1>
        <p class="text-center text-xs md:text-sm text-[#7B7B7B] max-w-xl mt-2 leading-tight px-2">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </p>
        <div
            class="mt-10 flex flex-wrap justify-center gap-6 max-w-4xl w-full px-2"
            x-data="{ selected: 1 }">
            @foreach ([['qty' => 5, 'price' => 'Rp 12.500'], ['qty' => 10, 'price' => 'Rp 25.000'], ['qty' => 20, 'price' => 'Rp 50.000'], ['qty' => 50, 'price' => 'Rp 125.000']] as $index => $item)
            <div
                @click="selected = {{ $index }}"
                class="cursor-pointer bg-white rounded-md w-28 sm:w-32 md:w-36 flex flex-col items-center py-6 shadow-sm 
                transition duration-300 ease-in-out transform hover:scale-105 hover:shadow-lg"
                :class="selected === {{ $index }} ? 'border-2 border-[#3DBE29]' : 'hover:border-2 hover:border-[#3DBE29]'">
                <div class="bg-[#D9F7E4] rounded-full p-3 mb-4 shadow-[0_8px_15px_rgba(0,0,0,0.05)]">
                    <img src="{{ asset('storage/logo1.1.png') }}" alt="Logo" width="40" height="40" class="rounded-full bg-green-100 p-1">
                </div>
                <span class="text-[#0B1446] font-semibold text-xl md:text-2xl">
                    {{ $item['qty'] }}
                </span>
                <span class="text-[#0B1446] mt-2 text-sm md:text-base">
                    {{ $item['price'] }}
                </span>
            </div>
            @endforeach
        </div>

        <a href="{{ route('payment') }}"
            class="mt-12 bg-[#0B1446] hover:bg-[#1c2a7a] text-white rounded-md w-64 py-3 text-center text-sm md:text-base font-normal transition duration-300 ease-in-out transform hover:scale-105 hover:shadow-lg inline-block"
            role="button">
            Purchase
        </a>
        <a href="{{ route('redeemtkn') }}"
            class="mt-12 border border-[#0B1446] text-[#0B1446] hover:bg-[#0B1446] hover:text-white rounded-md w-64 py-3 text-center text-sm md:text-base font-normal transition duration-300 ease-in-out transform hover:scale-105 hover:shadow-lg inline-block"
            role="button">
            View More ->
        </a>


    </div>

@include('bottom')
</body>

</html>