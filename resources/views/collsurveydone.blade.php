<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>
        Liturtara Payment Success
    </title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet" />
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>

<body class="bg-gradient-to-r from-[#e6ebff] via-[#f0f9f4] to-[#e6f7e9] min-h-screen flex flex-col">
    <!-- Navbar -->
@include('navbartr')

    <!-- Main content -->
    <main class="flex-grow max-w-7xl mx-auto w-full px-6 py-16 flex flex-col md:flex-row items-center justify-between gap-12 bg-gradient-to-r from-[#e6ebff] via-[#f0f9f4] to-[#e6f7e9] rounded-lg">
        <div class="relative w-64 h-64 md:w-72 md:h-72 flex-shrink-0">
  <!-- Gambar di depan -->
  <img alt="woman"
       class="absolute inset-0 w-full h-full object-contain z-10"
       decoding="async"
       height="288"
       loading="lazy"
       src="girl1thanks.png"
       width="288" />
       
  <!-- SVG lingkaran di belakang
  <svg aria-hidden="true"
       class="absolute inset-0 w-full h-full z-0"
       fill="none"
       viewBox="0 0 288 288"
       xmlns="http://www.w3.org/2000/svg">
    <circle cx="144" cy="144" r="110" stroke="#0B1B4D" stroke-width="6"></circle>
    <circle cx="144" cy="144" r="100" stroke="#2E7D32" stroke-width="6"></circle>
    <circle cx="144" cy="144" r="90" stroke="#0B1B4D" stroke-width="6"></circle>
  </svg> -->
</div>


        <div class="max-w-xl flex flex-col justify-center text-[#0B1B4D] font-bold text-2xl md:text-3xl leading-snug">
            Terima kasih atas solusi<br />yang Anda berikan!
            <p class="mt-3 font-normal text-base md:text-lg text-gray-700 leading-relaxed max-w-md">
                Saat ini Anda menunggu tinjauan<br />solusi dari Case Owner
            </p>
            <div class="mt-8 bg-white rounded-lg shadow-lg p-5 max-w-xs text-gray-900 font-semibold text-sm leading-tight" style="box-shadow: 0 10px 15px -3px rgba(46, 125, 50, 0.3), 0 4px 6px -4px rgba(46, 125, 50, 0.2);">
                <p class="font-bold text-xs mb-1">Terimakasih telah memilih layanan kami</p>
                <p class="font-normal text-[10px] mb-3 leading-tight">Dengan adanya layanan kami, kami berharap anda dengan senang hati untuk mengisi survey layanan</p>
                <button class="bg-[#0B1B4D] text-white text-xs font-semibold px-3 py-1 rounded hover:bg-[#0a173a] flex items-center space-x-1" type="button">
                    <span>Isi Survey</span>
                    <svg aria-hidden="true" class="w-3 h-3" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                        <polyline points="12 5 19 12 12 19"></polyline>
                    </svg>
                </button>
            </div>
        </div>
    </main>

    <!-- Footer -->
@include('bottom')
</body>

</html>