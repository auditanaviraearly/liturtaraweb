<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Syarat & Ketentuan</title>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        [x-cloak] { display: none !important; }   
    </style>
</head>
<body class="flex items-center justify-center h-screen bg-gray-100" x-data="{ open: true }" x-init="open = true">
    
    <!-- Popup Modal Langsung Muncul -->
    <div x-show="open" x-cloak class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 p-4">
        <div class="bg-white w-full max-w-2xl rounded-lg shadow-lg p-6 relative">
            
            <h2 class="text-xl font-bold mb-4">Syarat dan Ketentuan</h2>
            <div class="max-h-96 overflow-y-auto text-sm text-gray-700 space-y-4">
                <p><strong>Penerimaan Syarat</strong><br>
                Dengan mengakses dan menggunakan situs web ini, Anda setuju untuk terikat oleh Syarat dan Ketentuan yang ditetapkan.</p>
                
                <p><strong>Perubahan Syarat</strong><br>
                Kami berhak untuk mengubah Syarat dan Ketentuan ini sewaktu-waktu tanpa pemberitahuan sebelumnya.</p>
                
                <p><strong>Kewajiban Pengguna</strong><br>
                Anda setuju untuk menggunakan situs web ini hanya untuk tujuan yang sah dan tidak melanggar hukum yang berlaku.</p>
                
                <p><strong>Hak Kekayaan Intelektual</strong><br>
                Semua konten di situs web ini adalah milik kami atau pemberi lisensi kami.</p>
                
                <p><strong>Batasan Tanggung Jawab</strong><br>
                Kami tidak bertanggung jawab atas kerugian atau kerusakan yang timbul dari penggunaan situs web ini.</p>
                
                <p><strong>Tautan ke Situs Pihak Ketiga</strong><br>
                Kami tidak bertanggung jawab atas konten situs web pihak ketiga.</p>
                
                <p><strong>Hukum yang Berlaku</strong><br>
                Syarat dan Ketentuan ini diatur sesuai dengan hukum Indonesia.</p>
                
                <h3 class="text-lg font-bold mt-4">Kebijakan Privasi</h3>
                <p><strong>Pengumpulan Informasi</strong><br>
                Kami mengumpulkan informasi pribadi yang Anda berikan secara sukarela.</p>
                
                <p><strong>Penggunaan Informasi</strong><br>
                Informasi digunakan untuk memproses pendaftaran dan meningkatkan layanan.</p>
                
                <p><strong>Perlindungan Informasi</strong><br>
                Kami berkomitmen melindungi informasi pribadi Anda.</p>
            </div>
            
            <!-- Tombol Tutup -->
            <button @click="open = false" class="absolute top-2 right-2 bg-red-500 text-white px-3 py-1 rounded-lg hover:bg-red-600">
                &times;
            </button>
        </div>
    </div>

</body>
</html>