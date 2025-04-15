<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verification Email</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex items-center justify-center min-h-screen bg-gradient-to-r from-white via-blue-100 to-green-100">

    <div class="flex items-center justify-center p-6 rounded-lg">
        <!-- Bagian Gambar -->
        <div class="w-1/2 flex justify-center">
            <img src="{{ asset('storage/loginimg.png') }}" alt="Verification Email" class="w-80">
        </div>

        <!-- Bagian Teks -->
        <div class="w-1/2 text-left">
            <h1 class="text-2xl font-bold text-blue-900">Password has been reset, please log in again</h1>
        </div>
    </div>

</body>
</html>
