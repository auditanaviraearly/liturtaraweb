<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Password - Liturtara</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    @vite(['resources/css/app.css'])
</head>
<body class="auth-container">

    <div class="auth-box">
        <!-- Bagian Kiri: Gambar -->
        <div class="auth-image">
            <img src="{{ asset('images/welcome.svg') }}" alt="Welcome Image" class="w-3/4">
        </div>

        <!-- Bagian Kanan: Form -->
        <div class="auth-form">
            <div class="auth-logo">
                <img src="{{ asset('storage/liturtaralogo.svg') }}" alt="Liturtara Logo" class="h-10">
            </div>
            <h2 class="auth-title">New Password</h2>

            <form action="{{ route('login') }}" method="POST" class="fade-in">
                @csrf

                <div class="mb-4">
                    <label class="block text-gray-600">Email</label>
                    <input type="email" name="email" class="auth-input" required>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-600">New Password</label>
                    <input type="password" name="password" class="auth-input" required>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-600">Confirm Password</label>
                    <input type="password" name="password_confirmation" class="auth-input" required>
                </div>

                <button type="submit" class="auth-button">Confirm</button>
            </form>

            <p class="text-center mt-4 text-gray-600">
                Back to Login? <a href="{{ route('login') }}" class="auth-link">Login</a>
            </p>
        </div>
    </div>

    <script>
        // Animasi fade-in saat halaman dimuat
        document.addEventListener("DOMContentLoaded", function () {
            document.querySelector(".fade-in").classList.add("show");
        });
    </script>

</body>
</html>